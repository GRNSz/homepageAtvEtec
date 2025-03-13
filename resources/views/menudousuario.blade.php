<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil do Usuário - TechRetro 2007</title>
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

        .page-title {
            border-bottom: 2px solid #0078d7;
            padding-bottom: 10px;
            color: #0078d7;
        }

        .profile-container {
            display: flex;
            gap: 20px;
        }

        .profile-sidebar {
            width: 200px;
            background: linear-gradient(to bottom, #f9f9f9, #eeeeee);
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .profile-sidebar .user-avatar {
            width: 150px;
            height: 150px;
            margin: 0 auto 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f0f0;
        }

        .profile-sidebar .user-avatar img {
            max-width: 100%;
            max-height: 100%;
        }

        .profile-sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .profile-sidebar ul li {
            margin-bottom: 8px;
        }

        .profile-sidebar ul li a {
            display: block;
            padding: 8px;
            background: linear-gradient(to bottom, #ffffff, #f0f0f0);
            border: 1px solid #ddd;
            border-radius: 3px;
            color: #333;
            text-decoration: none;
            text-align: center;
        }

        .profile-sidebar ul li a:hover {
            background: linear-gradient(to bottom, #f0f0f0, #e0e0e0);
        }

        .profile-sidebar ul li a.active {
            background: linear-gradient(to bottom, #0078d7, #006abc);
            color: white;
            border-color: #005ca1;
        }

        .profile-content {
            flex: 1;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: white;
        }

        .profile-info {
            margin-bottom: 20px;
        }

        .profile-info h3 {
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-top: 0;
        }

        .profile-info-item {
            display: flex;
            border-bottom: 1px dotted #eee;
            padding: 8px 0;
        }

        .profile-info-label {
            width: 150px;
            font-weight: bold;
            color: #666;
        }

        .profile-info-value {
            flex: 1;
        }

        .btn {
            background: linear-gradient(to bottom, #4caf50, #45a049);
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background: linear-gradient(to bottom, #45a049, #3d8b40);
        }

        .btn-edit {
            background: linear-gradient(to bottom, #0078d7, #006abc);
        }

        .btn-edit:hover {
            background: linear-gradient(to bottom, #006abc, #005ca1);
        }

        .btn-danger {
            background: linear-gradient(to bottom, #d9534f, #c9302c);
        }

        .btn-danger:hover {
            background: linear-gradient(to bottom, #c9302c, #b52b27);
        }

        .btn-group {
            margin-top: 20px;
        }

        .btn-group .btn {
            margin-right: 10px;
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

        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid transparent;
            border-radius: 3px;
        }

        .alert-success {
            background-color: #dff0d8;
            border-color: #d6e9c6;
            color: #3c763d;
        }

        .alert-danger {
            background-color: #f2dede;
            border-color: #ebccd1;
            color: #a94442;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            width: 50%;
            border: 1px solid #888;
            border-radius: 5px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: black;
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
                    <li><a href="{{url('/usuario')}}" class="active">Minha Conta</a></li>
                </center>
            </ul>
        </div>

        <div id="content">
            <h2 class="page-title">Minha Conta</h2>
            
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
                <div class="profile-sidebar">
                    <div class="user-avatar">
                        <img src="https://win98icons.alexmeub.com/icons/png/user-0.png" alt="Avatar do usuário">
                    </div>
                    
                    <ul>
                        <li><a href="#" class="tab-link active" data-tab="profile-tab">Meu Perfil</a></li>
                        <li><a href="#" class="tab-link" data-tab="edit-tab">Editar Perfil</a></li>
                        <li><a href="#" class="tab-link" data-tab="orders-tab">Meus Pedidos</a></li>
                        <li><a href="#" class="tab-link" data-tab="address-tab">Endereços</a></li>
                        <li><a href="#" class="tab-link" data-tab="password-tab">Alterar Senha</a></li>
                        <li><a href="#" id="delete-account-btn">Excluir Conta</a></li>
                    </ul>
                </div>
                
                <div class="profile-content">
                    <!-- Perfil Tab -->
                    <div id="profile-tab" class="tab-content active">
                        <div class="profile-info">
                            <h3>Informações Pessoais</h3>
                            
                            <div class="profile-info-item">
                                <div class="profile-info-label">Nome:</div>
                                <div class="profile-info-value">{{ auth()->user()->nome ?? 'Nome do Usuário' }}</div>
                            </div>
                            
                            <div class="profile-info-item">
                                <div class="profile-info-label">Email:</div>
                                <div class="profile-info-value">{{ auth()->user()->email ?? 'email@exemplo.com' }}</div>
                            </div>
                            
                            <div class="profile-info-item">
                                <div class="profile-info-label">Telefone:</div>
                                <div class="profile-info-value">{{ auth()->user()->telefone ?? 'Não informado' }}</div>
                            </div>
                        </div>
                        
                        <div class="profile-info">
                            <h3>Endereço</h3>
                            
                            <div class="profile-info-item">
                                <div class="profile-info-label">Endereço:</div>
                                <div class="profile-info-value">{{ auth()->user()->endereco ?? 'Não informado' }}</div>
                            </div>
                            
                            <div class="profile-info-item">
                                <div class="profile-info-label">Cidade:</div>
                                <div class="profile-info-value">{{ auth()->user()->cidade ?? 'Não informado' }}</div>
                            </div>
                            
                            <div class="profile-info-item">
                                <div class="profile-info-label">Estado:</div>
                                <div class="profile-info-value">{{ auth()->user()->estado ?? 'Não informado' }}</div>
                            </div>
                            
                            <div class="profile-info-item">
                                <div class="profile-info-label">CEP:</div>
                                <div class="profile-info-value">{{ auth()->user()->cep ?? 'Não informado' }}</div>
                            </div>
                        </div>
                        
                        <div class="btn-group">
                            <button class="btn btn-edit tab-link" data-tab="edit-tab">Editar Perfil</button>
                        </div>
                    </div>
                    
                    <!-- Editar Perfil Tab -->
                    <div id="edit-tab" class="tab-content">
                        <h3>Editar Perfil</h3>
                        
                        <form action="{{ route('users.update', auth()->id()) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <p>ID do usuário: {{ auth()->id() }}</p>
                            <div class="form-group">
                                <label for="nome">Nome Completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="{{ auth()->user()->nome ?? '' }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ auth()->user()->email ?? '' }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" name="telefone" value="{{ auth()->user()->telefone ?? '' }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" value="{{ auth()->user()->endereco ?? '' }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="cidade" name="cidade" value="{{ auth()->user()->cidade ?? '' }}">
                            </div>
                            
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <select class="form-control" id="estado" name="estado">
                                    <option value="">Selecione um estado</option>
                                    <option value="AC" {{ auth()->user() && auth()->user()->estado == 'AC' ? 'selected' : '' }}>Acre</option>
                                    <option value="AL" {{ auth()->user() && auth()->user()->estado == 'AL' ? 'selected' : '' }}>Alagoas</option>
                                    <option value="AP" {{ auth()->user() && auth()->user()->estado == 'AP' ? 'selected' : '' }}>Amapá</option>
                                    <option value="AM" {{ auth()->user() && auth()->user()->estado == 'AM' ? 'selected' : '' }}>Amazonas</option>
                                    <option value="BA" {{ auth()->user() && auth()->user()->estado == 'BA' ? 'selected' : '' }}>Bahia</option>
                                    <option value="CE" {{ auth()->user() && auth()->user()->estado == 'CE' ? 'selected' : '' }}>Ceará</option>
                                    <option value="DF" {{ auth()->user() && auth()->user()->estado == 'DF' ? 'selected' : '' }}>Distrito Federal</option>
                                    <option value="ES" {{ auth()->user() && auth()->user()->estado == 'ES' ? 'selected' : '' }}>Espírito Santo</option>
                                    <option value="GO" {{ auth()->user() && auth()->user()->estado == 'GO' ? 'selected' : '' }}>Goiás</option>
                                    <option value="MA" {{ auth()->user() && auth()->user()->estado == 'MA' ? 'selected' : '' }}>Maranhão</option>
                                    <option value="MT" {{ auth()->user() && auth()->user()->estado == 'MT' ? 'selected' : '' }}>Mato Grosso</option>
                                    <option value="MS" {{ auth()->user() && auth()->user()->estado == 'MS' ? 'selected' : '' }}>Mato Grosso do Sul</option>
                                    <option value="MG" {{ auth()->user() && auth()->user()->estado == 'MG' ? 'selected' : '' }}>Minas Gerais</option>
                                    <option value="PA" {{ auth()->user() && auth()->user()->estado == 'PA' ? 'selected' : '' }}>Pará</option>
                                    <option value="PB" {{ auth()->user() && auth()->user()->estado == 'PB' ? 'selected' : '' }}>Paraíba</option>
                                    <option value="PR" {{ auth()->user() && auth()->user()->estado == 'PR' ? 'selected' : '' }}>Paraná</option>
                                    <option value="PE" {{ auth()->user() && auth()->user()->estado == 'PE' ? 'selected' : '' }}>Pernambuco</option>
                                    <option value="PI" {{ auth()->user() && auth()->user()->estado == 'PI' ? 'selected' : '' }}>Piauí</option>
                                    <option value="RJ" {{ auth()->user() && auth()->user()->estado == 'RJ' ? 'selected' : '' }}>Rio de Janeiro</option>
                                    <option value="RN" {{ auth()->user() && auth()->user()->estado == 'RN' ? 'selected' : '' }}>Rio Grande do Norte</option>
                                    <option value="RS" {{ auth()->user() && auth()->user()->estado == 'RS' ? 'selected' : '' }}>Rio Grande do Sul</option>
                                    <option value="RO" {{ auth()->user() && auth()->user()->estado == 'RO' ? 'selected' : '' }}>Rondônia</option>
                                    <option value="RR" {{ auth()->user() && auth()->user()->estado == 'RR' ? 'selected' : '' }}>Roraima</option>
                                    <option value="SC" {{ auth()->user() && auth()->user()->estado == 'SC' ? 'selected' : '' }}>Santa Catarina</option>
                                    <option value="SP" {{ auth()->user() && auth()->user()->estado == 'SP' ? 'selected' : '' }}>São Paulo</option>
                                    <option value="SE" {{ auth()->user() && auth()->user()->estado == 'SE' ? 'selected' : '' }}>Sergipe</option>
                                    <option value="TO" {{ auth()->user() && auth()->user()->estado == 'TO' ? 'selected' : '' }}>Tocantins</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="cep">CEP</label>
                                <input type="text" class="form-control" id="cep" name="cep" value="{{ auth()->user()->cep ?? '' }}">
                            </div>
                            
                            <div class="btn-group">
                                <button type="submit" class="btn btn-edit">Salvar Alterações</button>
                                <button type="button" class="btn tab-link" data-tab="profile-tab">Cancelar</button>
                            </div>
                        </form>
                    </div>
                    
                    <!-- Pedidos Tab -->
                    <div id="orders-tab" class="tab-content">
                        <h3>Meus Pedidos</h3>
                        <p>Você ainda não realizou nenhum pedido.</p>
                    </div>
                    
                    <!-- Endereços Tab -->
                    <div id="address-tab" class="tab-content">
                        <h3>Meus Endereços</h3>
                        <p>Você ainda não cadastrou nenhum endereço adicional.</p>
                        
                        <button class="btn btn-edit">Adicionar Novo Endereço</button>
                    </div>
                    
                    <!-- Senha Tab -->
                    <div id="password-tab" class="tab-content">
                        <h3>Alterar Senha</h3>
                        
                        <form action="{{ route('users.update-password', auth()->id()) }}" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="form-group">
                                <label for="senha_atual">Senha Atual</label>
                                <input type="password" class="form-control" id="senha_atual" name="senha_atual" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="nova_senha">Nova Senha</label>
                                <input type="password" class="form-control" id="nova_senha" name="nova_senha" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="confirmar_nova_senha">Confirmar Nova Senha</label>
                                <input type="password" class="form-control" id="confirmar_nova_senha" name="confirmar_nova_senha" required>
                            </div>
                            
                            <div class="btn-group">
                                <button type="submit" class="btn btn-edit">Alterar Senha</button>
                                <button type="button" class="btn tab-link" data-tab="profile-tab">Cancelar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <p>© 2007-2023 TechRetro - Todos os direitos reservados</p>
            <p>Este site funciona melhor no Internet Explorer 6 ou 7 com resolução 1024x768</p>
        </div>
    </div>
    
    <!-- Modal de confirmação para excluir conta -->
    <div id="delete-modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Confirmar exclusão da conta</h3>
            <p>Tem certeza que deseja excluir sua conta? Esta ação não pode ser desfeita.</p>
            
            <form action="{{ route('users.destroy', auth()->id()) }}" method="POST">
                @csrf
                @method('DELETE')
                
                <div class="btn-group">
                    <button type="submit" class="btn btn-danger">Sim, excluir minha conta</button>
                    <button type="button" class="btn" id="cancel-delete">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Tab Navigation
            const tabLinks = document.querySelectorAll('.tab-link');
            tabLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    // Hide all tab contents
                    const tabContents = document.querySelectorAll('.tab-content');
                    tabContents.forEach(function(tab) {
                        tab.classList.remove('active');
                    });
                    
                    // Remove active class from all tab links
                    tabLinks.forEach(function(link) {
                        link.classList.remove('active');
                    });
                    
                    // Show selected tab content
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                    
                    // Add active class to clicked tab link
                    this.classList.add('active');
                });
            });
            
            // Delete Account Modal
            const deleteBtn = document.getElementById('delete-account-btn');
            const deleteModal = document.getElementById('delete-modal');
            const closeModal = document.querySelector('.close');
            const cancelDelete = document.getElementById('cancel-delete');
            
            deleteBtn.addEventListener('click', function(e) {
                e.preventDefault();
                deleteModal.style.display = 'block';
            });
            
            closeModal.addEventListener('click', function() {
                deleteModal.style.display = 'none';
            });
            
            cancelDelete.addEventListener('click', function() {
                deleteModal.style.display = 'none';
            });
            
            window.addEventListener('click', function(e) {
                if (e.target == deleteModal) {
                    deleteModal.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>