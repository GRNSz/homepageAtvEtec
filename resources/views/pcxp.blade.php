<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Windows XP Professional - Dell Optiplex | TechRetro 2007</title>
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

        .product-detail {
            display: flex;
            margin-bottom: 30px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            background: linear-gradient(to bottom, #ffffff, #f9f9f9);
        }

        .product-images {
            width: 40%;
            padding-right: 20px;
        }

        .main-image {
            width: 100%;
            border: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .thumbnails {
            display: flex;
            gap: 10px;
        }

        .thumbnail {
            width: 60px;
            height: 60px;
            border: 1px solid #ddd;
            cursor: pointer;
        }

        .thumbnail:hover {
            border-color: #0078d7;
        }

        .product-info {
            width: 60%;
        }

        .product-info h1 {
            color: #0067b8;
            border-bottom: 2px solid #0078d7;
            padding-bottom: 10px;
            margin-top: 0;
        }

        .price {
            font-size: 24px;
            font-weight: bold;
            color: #d04a02;
            margin: 15px 0;
        }

        .discount {
            background-color: #fffc9c;
            padding: 5px 10px;
            border: 1px solid #e6e49f;
            color: #d04a02;
            display: inline-block;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .specs {
            background-color: #f5f5f5;
            padding: 15px;
            border: 1px solid #ddd;
            margin: 20px 0;
        }

        .specs h3 {
            margin-top: 0;
            border-bottom: 1px solid #ccc;
            padding-bottom: 5px;
        }

        .specs ul {
            list-style-type: square;
            padding-left: 20px;
        }

        .specs li {
            margin-bottom: 5px;
        }

        .buy-options {
            margin-top: 20px;
        }

        .quantity {
            margin-bottom: 15px;
        }

        .quantity select {
            padding: 5px;
            width: 60px;
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
            font-size: 16px;
        }

        .btn:hover {
            background: linear-gradient(to bottom, #45a049, #3d8b40);
        }

        .btn-cart {
            background: linear-gradient(to bottom, #0078d7, #0067b8);
        }

        .btn-cart:hover {
            background: linear-gradient(to bottom, #0067b8, #005ca1);
        }

        .warranty {
            margin: 20px 0;
            padding: 15px;
            border: 1px dashed #ccc;
            background-color: #f9f9f9;
        }

        .description {
            margin-top: 30px;
        }

        .tab-header {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        .tab-header button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 10px 16px;
            transition: 0.3s;
            font-weight: bold;
        }

        .tab-header button:hover {
            background-color: #ddd;
        }

        .tab-header button.active {
            background-color: #0078d7;
            color: white;
        }

        .tab-content {
            display: none;
            padding: 20px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .tab-content.active {
            display: block;
        }

        .related-products {
            margin-top: 30px;
        }

        .related-product-grid {
            display: flex;
            gap: 15px;
        }

        .related-product {
            border: 1px solid #ddd;
            padding: 10px;
            width: 24%;
            text-align: center;
        }

        .related-product img {
            width: 100px;
            height: 75px;
            margin-bottom: 10px;
        }

        .related-product h4 {
            margin: 5px 0;
            font-size: 14px;
        }

        .related-product .price {
            font-size: 16px;
            margin: 5px 0;
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
            </ul>
        </div>

        <div id="content">
            <div class="product-detail">
                <div class="product-images">
                    <img src="https://www.wikihow.com/images_en/thumb/e/ef/Install-Windows-XP-Step-25-Version-3.jpg/v4-460px-Install-Windows-XP-Step-25-Version-3.jpg.webp" alt="PC Windows XP" class="main-image">
                    <div class="thumbnails">
                        <img src="https://www.wikihow.com/images_en/thumb/e/ef/Install-Windows-XP-Step-25-Version-3.jpg/v4-460px-Install-Windows-XP-Step-25-Version-3.jpg.webp" alt="PC Windows XP" class="thumbnail">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/5/59/Dell_Optiplex_GX270.jpg" alt="Dell Optiplex" class="thumbnail">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/f/f3/Windows_XP_SP3_screenshot.jpg" alt="Windows XP" class="thumbnail">
                    </div>
                </div>
                <div class="product-info">
                    <h1>PC Windows XP Professional - Dell Optiplex</h1>
                    <div class="discount">20% de DESCONTO! Oferta por tempo limitado!</div>
                    <p class="price"><s>R$ 999,99</s> R$ 799,99</p>
                    <p>Computador Dell Optiplex em perfeito estado, com Windows XP Professional genuíno instalado e pronto para uso. Um clássico para colecionadores e aficionados por tecnologia retro.</p>
                    
                    <div class="specs">
                        <h3>Especificações Técnicas</h3>
                        <ul>
                            <li>Processador Intel Pentium 4 2.8GHz</li>
                            <li>Memória RAM 1GB DDR</li>
                            <li>Disco Rígido 80GB IDE</li>
                            <li>Drive de CD-RW/DVD</li>
                            <li>Windows XP Professional Service Pack 3</li>
                            <li>Placa de vídeo integrada Intel</li>
                            <li>Placa de som integrada</li>
                            <li>4 portas USB</li>
                            <li>Porta serial e paralela</li>
                            <li>Rede 10/100Mbps</li>
                        </ul>
                    </div>

                    <div class="warranty">
                        <strong>Garantia:</strong> 3 meses para defeitos de fabricação
                    </div>

                    <div class="buy-options">
                        <div class="quantity">
                            <label for="quantity">Quantidade:</label>
                            <select id="quantity" name="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        
                        <button class="btn">Comprar Agora</button>
                        <button class="btn btn-cart">Adicionar ao Carrinho</button>
                    </div>
                </div>
            </div>

            <div class="description">
                <div class="tab-header">
                    <button class="tab-link active" onclick="openTab(event, 'description')">Descrição</button>
                    <button class="tab-link" onclick="openTab(event, 'specifications')">Especificações</button>
                    <button class="tab-link" onclick="openTab(event, 'shipping')">Envio</button>
                    <button class="tab-link" onclick="openTab(event, 'reviews')">Avaliações</button>
                </div>

                <div id="description" class="tab-content active">
                    <h3>Dell Optiplex com Windows XP Professional</h3>
                    <p>Reviva a era de ouro da computação com este Dell Optiplex perfeitamente conservado, rodando o clássico Windows XP Professional. Este computador é ideal para colecionadores, entusiastas de tecnologia retro ou para quem deseja uma máquina dedicada para rodar programas e jogos antigos que não são compatíveis com sistemas mais modernos.</p>
                    <p>O Dell Optiplex foi uma das linhas de desktop mais confiáveis e duradouras da sua época, conhecida pela sua robustez e facilidade de manutenção. Este modelo vem com o Windows XP Professional SP3, o sistema operacional que revolucionou a computação no início dos anos 2000 com sua interface amigável e estabilidade.</p>
                    <p>Todos os nossos computadores passam por um rigoroso processo de teste e limpeza, garantindo que você receberá um produto em perfeitas condições de funcionamento.</p>
                </div>

                <div id="specifications" class="tab-content">
                    <h3>Especificações Detalhadas</h3>
                    <table border="1" cellpadding="10" cellspacing="0" width="100%">
                        <tr>
                            <th>Componente</th>
                            <th>Especificação</th>
                        </tr>
                        <tr>
                            <td>Modelo</td>
                            <td>Dell Optiplex GX270</td>
                        </tr>
                        <tr>
                            <td>Processador</td>
                            <td>Intel Pentium 4 2.8GHz</td>
                        </tr>
                        <tr>
                            <td>Memória</td>
                            <td>1GB DDR (2 x 512MB)</td>
                        </tr>
                        <tr>
                            <td>Armazenamento</td>
                            <td>HD 80GB IDE 7200RPM</td>
                        </tr>
                        <tr>
                            <td>Unidade Óptica</td>
                            <td>CD-RW/DVD Combo Drive</td>
                        </tr>
                        <tr>
                            <td>Sistema Operacional</td>
                            <td>Windows XP Professional SP3 (licença original)</td>
                        </tr>
                        <tr>
                            <td>Vídeo</td>
                            <td>Intel Extreme Graphics integrado</td>
                        </tr>
                        <tr>
                            <td>Áudio</td>
                            <td>Integrado AC'97</td>
                        </tr>
                        <tr>
                            <td>Rede</td>
                            <td>Ethernet 10/100 Mbps</td>
                        </tr>
                        <tr>
                            <td>Portas</td>
                            <td>4 x USB 2.0, 1 x Serial, 1 x Paralela, 2 x PS/2</td>
                        </tr>
                        <tr>
                            <td>Gabinete</td>
                            <td>Desktop/Small Form Factor</td>
                        </tr>
                        <tr>
                            <td>Software Incluso</td>
                            <td>Microsoft Office 2003, Internet Explorer 6, Windows Media Player 9</td>
                        </tr>
                    </table>
                </div>

                <div id="shipping" class="tab-content">
                    <h3>Informações de Envio</h3>
                    <p><strong>Prazo de Envio:</strong> 3-7 dias úteis</p>
                    <p><strong>Formas de Envio:</strong> Transportadora, Sedex, PAC</p>
                    <p><strong>Valor do Frete:</strong> Calculado no checkout com base no CEP de destino</p>
                    <p><strong>Embalagem:</strong> Nossos produtos são cuidadosamente embalados com proteção anti-impacto para garantir que cheguem em perfeitas condições.</p>
                    <p><strong>Observação:</strong> Devido ao tamanho e peso do produto, o frete pode ter valor mais elevado que o usual.</p>
                </div>

                <div id="reviews" class="tab-content">
                    <h3>Avaliações de Clientes</h3>
                    <p><strong>Média: ★★★★☆</strong> (4.2/5 baseado em 15 avaliações)</p>
                    
                    <div style="border-bottom: 1px solid #ddd; padding-bottom: 10px; margin-bottom: 10px;">
                        <p><strong>★★★★★</strong> - Carlos S. | 12/05/2023</p>
                        <p>Computador chegou em perfeito estado e funcionando exatamente como descrito. Ótimo para rodar meus programas antigos de engenharia!</p>
                    </div>
                    
                    <div style="border-bottom: 1px solid #ddd; padding-bottom: 10px; margin-bottom: 10px;">
                        <p><strong>★★★★☆</strong> - Marina L. | 28/04/2023</p>
                        <p>Máquina em bom estado, mas o drive de CD estava um pouco barulhento. De resto, funciona muito bem!</p>
                    </div>
                    
                    <div>
                        <p><strong>★★★★★</strong> - Paulo R. | 15/04/2023</p>
                        <p>Comprei para minha coleção de computadores antigos e não me arrependi. A experiência autêntica do Windows XP é incrível!</p>
                    </div>
                </div>
            </div>

            <div class="related-products">
                <h3>Produtos Relacionados</h3>
                <div class="related-product-grid">
                    <div class="related-product">
                        <img src="https://dcdn-us.mitiendanube.com/stores/112/482/products/4735641-e2f3bc249b444f736315349588537498-640-0.jpg" alt="PC Windows Vista">
                        <h4>PC Windows Vista Ultimate</h4>
                        <p class="price">R$ 1.299,99</p>
                        <a href="#" class="btn" style="font-size: 12px; padding: 5px 10px;">Ver</a>
                    </div>
                    <div class="related-product">
                        <img src="https://www.5ti.com.br/1390-thickbox_default/monitor-crt-lg-17pol-730sh-flatron.jpg" alt="Monitor CRT">
                        <h4>Monitor CRT 17" Samsung</h4>
                        <p class="price">R$ 299,99</p>
                        <a href="#" class="btn" style="font-size: 12px; padding: 5px 10px;">Ver</a>
                    </div>
                    <div class="related-product">
                        <img src="https://m.media-amazon.com/images/I/61DpZ+OJxUL._AC_UF1000,1000_QL80_.jpg" alt="Teclado Microsoft">
                        <h4>Teclado Microsoft Office XP</h4>
                        <p class="price">R$ 89,99</p>
                        <a href="#" class="btn" style="font-size: 12px; padding: 5px 10px;">Ver</a>
                    </div>
                    <div class="related-product">
                        <img src="https://frutiger-aero.org/img/frutiger-aero-5.webp" alt="Kit Frutiger Aero">
                        <h4>Kit Frutiger Aero</h4>
                        <p class="price">R$ 49,99</p>
                        <a href="#" class="btn" style="font-size: 12px; padding: 5px 10px;">Ver</a>
                    </div>
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
            // Hide all tab content
            var tabContents = document.getElementsByClassName("tab-content");
            for (var i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove("active");
            }

            // Remove "active" class from all tab links
            var tabLinks = document.getElementsByClassName("tab-link");
            for (var i = 0; i < tabLinks.length; i++) {
                tabLinks[i].classList.remove("active");
            }

            // Show the current tab and add "active" class to the button that opened the tab
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }
    </script>
</body>
</html></tr></div>}}}