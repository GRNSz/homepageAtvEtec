<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário - TechRetro 2007</title>
    <style>
        body {
            background: #0078d7 url('https://i.imgur.com/8xT4zJL.jpg') no-repeat fixed;
            background-size: cover;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            overflow: hidden;
        }

        #game-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        #container {
            width: 960px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        #header {
            background: linear-gradient(to bottom, #5cb6e7, #2980b9);
            color: white;
            padding: 10px 20px;
            border-bottom: 3px solid #1c638d;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
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
            background-color: rgba(255, 255, 255, 0.85);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            padding: 20px;
            margin-top: 30px;
        }

        .login-container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: linear-gradient(to bottom, #ffffff, #f9f9f9);
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
            position: relative;
            overflow: hidden;
        }

        .login-header h2 {
            color: #0067b8;
            border-bottom: 2px solid #0078d7;
            padding-bottom: 10px;
        }

        .login-animation {
            position: absolute;
            width: 60px;
            height: 60px;
            background-image: url('https://i.gifer.com/origin/71/711557abfeed55bc3e5cd6013abbd57e_w200.gif');
            background-size: contain;
            background-repeat: no-repeat;
            top: 0;
            left: -60px;
            animation: flyWindows 5s infinite;
        }

        @keyframes flyWindows {
            0% {
                left: -60px;
                transform: rotate(0deg);
            }
            50% {
                left: 400px;
                transform: rotate(360deg);
            }
            100% {
                left: -60px;
                transform: rotate(0deg);
            }
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #0067b8;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .form-group input:focus {
            border-color: #0078d7;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 120, 215, 0.3);
        }

        .form-actions {
            text-align: center;
            margin-top: 20px;
        }

        .btn {
            background: linear-gradient(to bottom, #4caf50, #45a049);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background: linear-gradient(to bottom, #45a049, #3d8b40);
        }

        .btn-primary {
            background: linear-gradient(to bottom, #0078d7, #0067b8);
        }

        .btn-primary:hover {
            background: linear-gradient(to bottom, #0067b8, #005ca1);
        }

        .register-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .forgot-password {
            text-align: right;
            margin-top: 5px;
            font-size: 12px;
        }

        .forgot-password a {
            color: #0067b8;
            text-decoration: none;
        }

        .forgot-password a:hover {
            text-decoration: underline;
        }

        .login-footer {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px dashed #ccc;
            text-align: center;
            font-size: 12px;
            color: #666;
        }

        #footer {
            background: linear-gradient(to bottom, #333, #222);
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            margin-top: 30px;
        }

        /* Game styling */
        .bubble {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(ellipse at center, rgba(255,255,255,0.8) 0%,rgba(173,216,230,0.5) 70%,rgba(0,120,215,0.3) 100%);
            box-shadow: 0 0 8px rgba(255,255,255,0.8);
            cursor: pointer;
            animation: float 5s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }
    </style>
</head>
<body>
    <div id="game-container"></div>
    
    <div id="container">
        <div id="header">
            <h1>TechRetro 2007</h1>
            <p>Sua loja especializada em PCs Windows XP e Vista!</p>
        </div>

        <div id="menu">
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Windows XP</a></li>
                <li><a href="#">Windows Vista</a></li>
                <li><a href="#">Acessórios</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="{{ url('/usuario') }}" class="active">Login/Cadastre-se</a></li>
            </ul>
        </div>

        <div id="content">
            <div class="login-container">
                <div class="login-header">
                    <div class="login-animation"></div>
                    <h2>Login de Usuário</h2>
                </div>
                
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="username">Nome de usuário:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    
                    <div class="forgot-password">
                        <a href="#">Esqueceu sua senha?</a>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
                
                <div class="register-link">
                    <p>Ainda não tem uma conta? <a href="{{ url ('/cadastro') }}">Cadastre-se agora!</a></p>
                </div>
                
                <div class="login-footer">
                    <p>Faça login para acessar ofertas exclusivas e acompanhar seus pedidos!</p>
                    <p>O navegador Internet Explorer 6+ é recomendado para melhor experiência.</p>
                </div>
            </div>
        </div>

        <div id="footer">
            <p>© 2007-2023 TechRetro - Todos os direitos reservados</p>
            <p>Este site funciona melhor no Internet Explorer 6 ou 7 com resolução 1024x768</p>
        </div>
    </div>

    <script>
        // Interactive bubble game in the background
        document.addEventListener('DOMContentLoaded', function() {
            const gameContainer = document.getElementById('game-container');
            const bubbleCount = 15;
            let score = 0;
            const scoreDisplay = document.createElement('div');
            
            // Create score display
            scoreDisplay.style.position = 'fixed';
            scoreDisplay.style.top = '20px';
            scoreDisplay.style.right = '20px';
            scoreDisplay.style.background = 'rgba(0,0,0,0.5)';
            scoreDisplay.style.color = 'white';
            scoreDisplay.style.padding = '10px';
            scoreDisplay.style.borderRadius = '5px';
            scoreDisplay.style.zIndex = '2';
            scoreDisplay.style.fontWeight = 'bold';
            scoreDisplay.textContent = 'Pontos: 0';
            document.body.appendChild(scoreDisplay);
            
            // Create bubbles
            for (let i = 0; i < bubbleCount; i++) {
                createBubble();
            }
            
            function createBubble() {
                const bubble = document.createElement('div');
                bubble.className = 'bubble';
                
                // Random size between 30px and 100px
                const size = Math.random() * 70 + 30;
                bubble.style.width = size + 'px';
                bubble.style.height = size + 'px';
                
                // Random position
                const posX = Math.random() * window.innerWidth;
                const posY = Math.random() * window.innerHeight;
                bubble.style.left = posX + 'px';
                bubble.style.top = posY + 'px';
                
                // Random animation duration
                const animDuration = Math.random() * 5 + 3;
                bubble.style.animationDuration = animDuration + 's';
                
                // Random delay
                bubble.style.animationDelay = (Math.random() * 5) + 's';
                
                // Click event
                bubble.addEventListener('click', function() {
                    // Increase score
                    score += Math.floor(100 / size * 10);
                    scoreDisplay.textContent = 'Pontos: ' + score;
                    
                    // Pop animation
                    this.style.transform = 'scale(1.5)';
                    this.style.opacity = '0';
                    
                    // Remove and create new bubble
                    setTimeout(() => {
                        this.remove();
                        createBubble();
                    }, 300);
                    
                    // Play pop sound
                    const popSound = new Audio('data:audio/wav;base64,UklGRiQAAABXQVZFZm10IBAAAAABAAEARKwAAIhYAQACABAAZGF0YQAAAAA=');
                    popSound.play().catch(e => {});
                });
                
                // Add bubble to container
                gameContainer.appendChild(bubble);
                
                // Add some movement
                setInterval(() => {
                    const newPosX = parseFloat(bubble.style.left) + (Math.random() * 10 - 5);
                    const newPosY = parseFloat(bubble.style.top) + (Math.random() * 10 - 5);
                    
                    // Keep within boundaries
                    if (newPosX > 0 && newPosX < window.innerWidth - size) {
                        bubble.style.left = newPosX + 'px';
                    }
                    if (newPosY > 0 && newPosY < window.innerHeight - size) {
                        bubble.style.top = newPosY + 'px';
                    }
                }, 2000);
            }
            
            // Resize event
            window.addEventListener('resize', function() {
                // Adjust bubbles to new window size
                const bubbles = document.querySelectorAll('.bubble');
                bubbles.forEach(bubble => {
                    const size = parseFloat(bubble.style.width);
                    let posX = parseFloat(bubble.style.left);
                    let posY = parseFloat(bubble.style.top);
                    
                    if (posX > window.innerWidth - size) {
                        posX = window.innerWidth - size;
                    }
                    if (posY > window.innerHeight - size) {
                        posY = window.innerHeight - size;
                    }
                    
                    bubble.style.left = posX + 'px';
                    bubble.style.top = posY + 'px';
                });
            });
        });
    </script>
</body>
</html>