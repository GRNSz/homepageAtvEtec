<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechRetro 2007 - Sua loja de PCs Windows XP e Vista!</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://win98icons.alexmeub.com/icons/png/computer_2-4.png" type="image/png">
    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var audio = new Audio('https://www.winhistory.de/more/winstart/mp3/vista.mp3');
            
            // Create a button for better user experience (autoplay policies)
            var audioButton = document.createElement('div');
            audioButton.innerHTML = 'Clique aqui para a experiência sonora completa!';
            audioButton.style.backgroundColor = '#0078d7';
            audioButton.style.color = 'white';
            audioButton.style.padding = '5px 10px';
            audioButton.style.cursor = 'pointer';
            audioButton.style.textAlign = 'center';
            audioButton.style.marginBottom = '10px';
            
            // Add click event to play audio
            audioButton.addEventListener('click', function() {
                audio.play();
                this.innerHTML = 'Áudio iniciado!';
                setTimeout(() => this.style.display = 'none', 3000);
            });
            
            // Insert button at the top of the body
            document.body.insertBefore(audioButton, document.body.firstChild);
        });
    </script>
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
            display: flex;
            padding: 15px;
        }

        #sidebar {
            width: 200px;
            background-color: #f5f5f5;
            border-right: 1px solid #ddd;
            padding: 10px;
        }

        #sidebar h3 {
            border-bottom: 2px solid #0078d7;
            padding-bottom: 5px;
            color: #0078d7;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        #sidebar li {
            padding: 5px 0;
            border-bottom: 1px dotted #ccc;
        }

        #sidebar li a {
            text-decoration: none;
            color: #333;
        }

        #sidebar li a:hover {
            color: #0078d7;
        }

        #main {
            flex: 1;
            padding: 0 15px;
        }

        .product {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
            background: linear-gradient(to bottom, #ffffff, #f9f9f9);
            display: flex;
        }

        .product img {
            width: 120px;
            height: 90px;
            border: 1px solid #ccc;
            margin-right: 15px;
        }

        .product-info {
            flex: 1;
        }

        .product h3 {
            margin-top: 0;
            color: #0067b8;
        }

        .price {
            font-weight: bold;
            color: #d04a02;
            font-size: 18px;
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

        #footer {
            background: linear-gradient(to bottom, #333, #222);
            color: white;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }

        .marquee {
            background-color: #fffc9c;
            padding: 5px;
            border: 1px solid #e6e49f;
            margin-bottom: 15px;
        }

        #counter {
            text-align: center;
            font-size: 12px;
            margin-top: 10px;
            color: #666;
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
                <li><a href="#">Home</a></li>
                <li><a href="#">Produtos</a></li>
                <li><a href="#">Windows XP</a></li>
                <li><a href="#">Windows Vista</a></li>
                <li><a href="#">Acessórios</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="{{url ('/menudousuario')}}">Login/Cadastre-se</a></li>
        </center>
            </ul>
        </div>

        <div class="marquee">
            <marquee>SUPER PROMOÇÃO! Computadores Windows XP com 20% de desconto! Aproveite enquanto durar o estoque!</marquee>
        </div>

        <div id="content">
            <div id="sidebar">
                <h3>Categorias</h3>
                <ul>
                    <li><a href="#">PCs com Windows XP</a></li>
                    <li><a href="#">PCs com Windows Vista</a></li>
                    <li><a href="#">Monitores CRT</a></li>
                    <li><a href="#">Teclados</a></li>
                    <li><a href="#">Mouses</a></li>
                    <li><a href="#">Software</a></li>
                    <li><a href="#">Itens Frutiger Aero</a></li>
                </ul>

                <h3>Informações</h3>
                <ul>
                    <li><a href="#">Sobre nós</a></li>
                    <li><a href="#">Como comprar</a></li>
                    <li><a href="#">Formas de pagamento</a></li>
                    <li><a href="#">Entrega</a></li>
                </ul>

                <div id="counter">
                    <p>Visitantes: 12458</p>
                    <img src="https://static.wixstatic.com/media/817551_e0484efd3c90474ca567cf38c0e7f139.gif" alt="contador" width="80">
                </div>
            </div>

            <div id="main">
                <h2>Bem-vindo à TechRetro 2007!</h2>
                <p>A melhor loja para encontrar computadores com a autêntica experiência Windows XP e Vista, com design Frutiger Aero e toda a nostalgia dos anos 2000!</p>

                <h3>Produtos em Destaque</h3>

                <div class="product">
                    <img src="https://www.wikihow.com/images_en/thumb/e/ef/Install-Windows-XP-Step-25-Version-3.jpg/v4-460px-Install-Windows-XP-Step-25-Version-3.jpg.webp" alt="PC Windows XP">
                    <div class="product-info">
                        <h3>PC Windows XP Professional</h3>
                        <p>Computador Dell Optiplex com Windows XP Professional, Pentium 4 2.8GHz, 1GB RAM, HD 80GB.</p>
                        <p class="price">R$ 799,99</p>
                        <a href="{{ route ('pcxp') }}" class="btn btn-primary">Comprar Agora</a>
                    </div>
                </div>

                <div class="product">
                    <img src="https://dcdn-us.mitiendanube.com/stores/112/482/products/4735641-e2f3bc249b444f736315349588537498-640-0.jpg" alt="PC Windows Vista">
                    <div class="product-info">
                        <h3>PC Windows Vista Ultimate</h3>
                        <p>Computador HP Pavilion com Windows Vista Ultimate, Core 2 Duo, 2GB RAM, HD 160GB, placa de vídeo dedicada.</p>
                        <p class="price">R$ 1.299,99</p>
                        <a href="#" class="btn">Comprar Agora</a>
                    </div>
                </div>

                <div class="product">
                    <img src="https://www.5ti.com.br/1390-thickbox_default/monitor-crt-lg-17pol-730sh-flatron.jpg" alt="Monitor CRT">
                    <div class="product-info">
                        <h3>Monitor CRT 17" Samsung</h3>
                        <p>Monitor de tubo 17 polegadas, resolução 1024x768, perfeito para jogos antigos e experiência autêntica do Windows XP.</p>
                        <p class="price">R$ 299,99</p>
                        <a href="#" class="btn">Comprar Agora</a>
                    </div>
                </div>

                <div class="product">
                    <img src="https://frutiger-aero.org/img/frutiger-aero-5.webp" alt="Kit Frutiger Aero">
                    <div class="product-info">
                        <h3>Kit Frutiger Aero Customização</h3>
                        <p>Kit completo para customizar seu PC com o estilo Frutiger Aero: wallpapers, cursores, ícones e sons nostálgicos.</p>
                        <p class="price">R$ 49,99</p>
                        <a href="#" class="btn">Comprar Agora</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="footer">
            <p>© 2007-2023 TechRetro - Todos os direitos reservados</p>
            <p>Este site funciona melhor no Internet Explorer 6 ou 7 com resolução 1024x768</p>
        </div>
    </div>
</body>
</html></div>}}}}}</head>
