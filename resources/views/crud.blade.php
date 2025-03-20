<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Usuários - TechRetro 2007</title>
    <link rel="icon" href="https://win98icons.alexmeub.com/icons/png/computer_2-4.png" type="image/png">
    <style>
        body {
            background: #0078d7 url('https://i.imgur.com/8xT4zJL.jpg') no-repeat fixed;
            background-size: cover;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        #container {
            width: 960px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.85);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        #header {
            background: linear-gradient(to bottom, #5cb6e7, #2980b9);
            color: white;
            padding: 10px 20px;
            border-bottom: 3px solid #1c638d;
            text-align: center;
        }

        #header h1 {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin: 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background: linear-gradient(to bottom, #f0f0f0, #d4d4d4);
            color: #333;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            background: linear-gradient(to bottom, #4caf50, #45a049);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background: linear-gradient(to bottom, #45a049, #3d8b40);
        }

        .btn-danger {
            background: linear-gradient(to bottom, #e53935, #d32f2f);
        }

        .btn-danger:hover {
            background: linear-gradient(to bottom, #d32f2f, #c62828);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }

        #footer {
            background: linear-gradient(to bottom, #333, #222);
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>Gerenciamento de Usuários</h1>
        </div>

        <h2>Adicionar Novo Usuário</h2>
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <button type="submit" class="btn">Adicionar Usuário</button>
        </form>

        <h2>Lista de Usuários</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>

            $user = DB::table('users')->get();

            <!-- Pega dados do Controller para validação -->

            <!-- Warnings -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <!-- Fim dos Wornings -->
            <!-- Loop para exibir os usuários -->
            @foreach ($user as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->nome }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('user.edit', $usuario->id) }}" class="btn">Editar</a>
                        <form action="{{ route('user.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="footer">
        <p>© 2007-2023 TechRetro - Todos os direitos reservados</p>
    </div>
</body>
</html>