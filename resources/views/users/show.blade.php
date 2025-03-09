<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Perfil - TechRetro 2007</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://win98icons.alexmeub.com/icons/png/user-4.png" type="image/png">
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

        #menu {
            background: linear-gradient(to bottom, #f0f0f0, #d4d4d4);
            border-bottom: 1px solid #aaa;
        }

        #menu ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            text-align: center;
        }

        #menu li {
            display: inline-block;
        }

        #menu li a {
            display: block;
            color: #333;
            text-align: center;
            padding: 10px 16px;
            text-decoration: none;
            font-weight: bold;
            border-right: 1px solid #bbb;
        }

        #menu li a:hover {
            background: linear-gradient(to bottom, #e0e0e0, #c0c0c0);
        }

        #content {
            padding: 15px;
        }

        #footer {
            background: linear-gradient(to bottom, #333, #222);
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }

        .profile-container {
            background: linear-gradient(to bottom, #ffffff, #f0f0f0);
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #ddd;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border: 3px solid #0078d7;
            border-radius: 50%;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
        }

        .profile-avatar img {
            max-width: 100%;
            max-height: 100%;
        }

        .profile-title {
            flex-grow: 1;
        }

        .profile-title h2 {
            color: #0078d7;
            margin: 0 0 5px 0;
        }

        .profile-actions {
            margin-top: 10px;
        }

        .btn {
            background: linear-gradient(to bottom, #4caf50, #45a049);
            color: white;
            border: none;
            padding: 7px 15px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
            margin-right: 10px;
        }

        .btn-edit {
            background: linear-gradient(to bottom, #2196F3, #0b7dda);
        }

        .btn-delete {
            background: linear-gradient(to bottom, #f44336, #d32f2f);
        }

        .btn:hover {
            opacity: 0.9;
        }

        .profile-detail {
            margin-bottom: 10px;
            padding: 8px;
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 4px;
        }

        .profile-detail strong {
            display: inline-block;
            width: 120px;
        }

        .order-history {
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background: linear-gradient(to bottom, #f0f0f0, #e0e0e0);
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .alert-success {
            color: #3c763d;
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }

        .alert-danger {
            color: #a94442;
            background-color: #f2dede;
            border-color: #ebccd1;
        }

        .tab-container {
            margin-bottom: 20px;
        }

        .tab-buttons {
            display: flex;
            border-bottom: 1px solid #ccc;
        }

        .tab-button {
            padding: 10px 15px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            border-bottom: none;
            cursor: pointer;
            margin-right: 5px;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }

        .tab-button.active {
            background-color: white;
            border-bottom: 1px solid white;
            margin-bottom: -1px;
        }

        .tab-content {
            display: none;
            padding: 15px;
            border: 1px solid #ccc;
            border-top: none;
            background-color: white;
        }

        .tab-content.active {
            display: block;
        }

        input[type="text"], 
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 5px 0 15px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="container">
        <div id="header">
            <h1>TechRetro 2007</h1>
            <p>Sua loja especializada em PCs Windows XP e Vista!</p>
        </div>

        <div id="menu">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Windows XP</a></li>
                <li><a href="#">Windows Vista</a></li>
                <li><a href="#">Acessórios</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="{{ url('/usuario') }}">Voltar</a></li>
            </ul>
        </div>

        <div id="content">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="profile-container">
                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="https://win98icons.alexmeub.com/icons/png/user_world-0.png" alt="Avatar">
                    </div>
                    <div class="profile-title">
                        <h2>{{ $user->name ?? 'Nome do Usuário' }}</h2>
                        <p>Membro desde {{ isset($user->created_at) ? $user->created_at->format('d/m/Y') : '01/01/2007' }}</p>
                    </div>
                </div>

                <div class="tab-container">
                    <div class="tab-buttons">
                        <div class="tab-button active" onclick="openTab(event, 'info')">Informações Pessoais</div>
                        <div class="tab-button" onclick="openTab(event, 'edit')">Editar Perfil</div>
                        <div class="tab-button" onclick="openTab(event, 'orders')">Meus Pedidos</div>
                        <div class="tab-button" onclick="openTab(event, 'password')">Alterar Senha</div>
                    </div>

                    <div id="info" class="tab-content active">
                        <h3>Informações Pessoais</h3>
                        <div class="profile-detail">
                            <strong>Nome:</strong> {{ $user->name ?? 'Nome do Usuário' }}
                        </div>
                        <div class="profile-detail">
                            <strong>E-mail:</strong> {{ $user->email ?? 'email@exemplo.com' }}
                        </div>
                        <div class="profile-detail">
                            <strong>Telefone:</strong> {{ $user->phone ?? '(xx) xxxxx-xxxx' }}
                        </div>
                        <div class="profile-detail">
                            <strong>Endereço:</strong> {{ $user->address ?? 'Endereço não cadastrado' }}
                        </div>
                        <div class="profile-detail">
                            <strong>Cidade:</strong> {{ $user->city ?? 'Cidade não cadastrada' }}
                        </div>
                        <div class="profile-detail">
                            <strong>Status:</strong> 
                            <span style="color: green; font-weight: bold;">Ativo</span>
                        </div>
                    </div>

                    <div id="edit" class="tab-content">
                        <h3>Editar Perfil</h3>
                        <form action="{{ route('users.update', $user->id ?? 1) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div>
                                <label for="name">Nome</label>
                                <input type="text" id="name" name="name" value="{{ $user->name ?? 'Nome do Usuário' }}" required>
                            </div>
                            
                            <div>
                                <label for="email">E-mail</label>
                                <input type="email" id="email" name="email" value="{{ $user->email ?? 'email@exemplo.com' }}" required>
                            </div>
                            
                            <div>
                                <label for="phone">Telefone</label>
                                <input type="text" id="phone" name="phone" value="{{ $user->phone ?? '(xx) xxxxx-xxxx' }}">
                            </div>
                            
                            <div>
                                <label for="address">Endereço</label>
                                <input type="text" id="address" name="address" value="{{ $user->address ?? 'Endereço não cadastrado' }}">
                            </div>
                            
                            <div>
                                <label for="city">Cidade</label>
                                <input type="text" id="city" name="city" value="{{ $user->city ?? 'Cidade não cadastrada' }}">
                            </div>
                            
                            <div class="profile-actions">
                                <button type="submit" class="btn btn-edit">Salvar Alterações</button>
                                <a href="{{ route('users.show', $user->id ?? 1) }}" class="btn">Cancelar</a>
                            </div>
                        </form>
                    </div>

                    <div id="orders" class="tab-content">
                        <h3>Histórico de Pedidos</h3>
                        @if(isset($orders) && count($orders) > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nº do Pedido</th>
                                        <th>Data</th>
                                        <th>Produtos</th>
                                        <th>Total</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                        <td>{{ $order->items_count }} itens</td>
                                        <td>R$ {{ number_format($order->total, 2, ',', '.') }}</td>
                                        <td>{{ $order->status }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>Você ainda não realizou nenhum pedido.</p>
                            <a href="{{ url('/') }}" class="btn">Ir às compras</a>
                        @endif
                    </div>

                    <div id="password" class="tab-content">
                        <h3>Alterar Senha</h3>
                        <form action="{{ route('users.changePassword', $user->id ?? 1) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div>
                                <label for="current_password">Senha Atual</label>
                                <input type="password" id="current_password" name="current_password" required>
                            </div>
                            
                            <div>
                                <label for="password">Nova Senha</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            
                            <div>
                                <label for="password_confirmation">Confirmar Nova Senha</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            
                            <div class="profile-actions">
                                <button type="submit" class="btn btn-edit">Alterar Senha</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="profile-actions">
                    <form action="{{ route('users.destroy', $user->id ?? 1) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir sua conta? Esta ação não pode ser desfeita.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Excluir Minha Conta</button>
                    </form>
                </div>
            </div>
        </div>

        <div id="footer">
            <p>© 2007-2023 TechRetro - Todos os direitos reservados</p>
            <p>Este site funciona melhor no Internet Explorer 6 ou 7 com resolução 1024x768</p>
        </div>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tabbuttons;
            
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }
            
            tabbuttons = document.getElementsByClassName("tab-button");
            for (i = 0; i < tabbuttons.length; i++) {
                tabbuttons[i].classList.remove("active");
            }
            
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }
    </script>
</body>
</html>