<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - TechRetro 2007</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
        }

        #menu li {
            float: left;
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

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: linear-gradient(to bottom, #ffffff, #f9f9f9);
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        .btn {
            background: linear-gradient(to bottom, #4caf50, #45a049);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background: linear-gradient(to bottom, #45a049, #3d8b40);
        }

        .btn-secondary {
            background: linear-gradient(to bottom, #6c757d, #5a6268);
        }

        .btn-secondary:hover {
            background: linear-gradient(to bottom, #5a6268, #4e555b);
        }

        .page-title {
            border-bottom: 2px solid #0078d7;
            padding-bottom: 10px;
            color: #0078d7;
        }

        .error-message {
            color: #d9534f;
            font-size: 14px;
            margin-top: 5px;
        }

        .required {
            color: #d9534f;
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
                <center>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="#">Windows XP</a></li>
                    <li><a href="#">Windows Vista</a></li>
                    <li><a href="#">Acessórios</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="{{url('/usuario')}}">Login/Cadastre-se</a></li>
                </center>
            </ul>
        </div>

        <div id="content">
            <h2 class="page-title">Cadastro de Usuário</h2>
            <div class="form-container">
                <form method="POST" action="{{ route('user.store') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label for="nome">Nome Completo <span class="required">*</span></label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail <span class="required">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="senha">Senha <span class="required">*</span></label>
                        <input type="password" class="form-control" id="senha" name="senha" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirmar_senha">Confirmar Senha <span class="required">*</span></label>
                        <input type="password" class="form-control" id="confirmar_senha" name="confirmar_senha" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(99) 99999-9999">
                    </div>
                    
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" class="form-control" id="endereco" name="endereco">
                    </div>
                    
                    <div class="form-group">
                        <label for="cidade">Cidade</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>
                    
                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado">
                            <option value="">Selecione um estado</option>
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="cep">CEP</label>
                        <input type="text" class="form-control" id="cep" name="cep" placeholder="99999-999">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn">Cadastrar</button>
                        <a href="{{ url('/usuario') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                    
                    @if ($errors->any())
                        <div class="error-message">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>

        <div id="footer">
            <p>© 2007-2023 TechRetro - Todos os direitos reservados</p>
            <p>Este site funciona melhor no Internet Explorer 6 ou 7 com resolução 1024x768</p>
        </div>
    </div>
</body>
</html>