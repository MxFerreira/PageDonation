<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Maicon Ferreira">
    
    <link rel="stylesheet" href="../css/projetos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon"> 

    <title>Itens da Farmácia: Hospital Viamão</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand d-flex align-items-center" href="homepage.html">
				<img src="../img/welcome.png" alt="Logo" width="auto" height="90" class="d-inline-block align-text-top">
				<span class="navbar-brand-title">Doações por Setores</span>
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link custom-button" href="homepage.php">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link custom-button" href="donation.php">Doação</a>
					</li>
					<li class="nav-item">
						<a class="nav-link custom-button" href="projetos.php">Projetos</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<div class="container-fluid">
    <div class="my-5">
        <!-- Título -->
        <div class="py-3 text-center rounded mb-4" style="background-color: #08568f;">
            <h5 class="m-0 text-white" style="font-size:50px; 2rem; font-weight: bold;">Farmácia</h5>
        </div>

        <!-- Texto à esquerda -->
        <div class="my-5 container-fluid text-center">
			<div class="row">
				<div class="col-md-6 col-12 align-middle d-flex">
					<div class="row mx-5">
						<div class="col-12">
							<p>
								 A Farmácia do Hospital Viamão é responsável por suprir medicamentos e materiais indispensáveis 
								para o tratamento de nossos pacientes.<p> No entanto, para garantir que nunca faltem esses itens essenciais, 
								contamos com a sua ajuda! <p>
								Contribua com a doação de medicamentos e produtos listados abaixo.<p> Sua doação é essencial para salvar vidas 
								e manter o funcionamento de nossa farmácia hospitalar.
							
						</div>
					</div>
				</div>
				<div class="col-md-6 col-12">
					<img src="../img/Setores/medicamentoNOBG.png" alt="#" width="50" height="70"
						style="width: auto; height: auto;">
				</div>
			</div>
		</div>

<!-- Lista de produtos -->
<div class="row justify-content-center mt-4">
    <div class="col-md-10 col-12">
        <h6 class="text-white text-center mb-4" style="font-size:50px; font-weight: bold;">Itens Necessários para Doação</h6>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <!-- Item 1 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Medicamentos de uso contínuo</h5>
                        <p class="card-text">Anti-hipertensivos, hipoglicemiantes, e outros essenciais.</p>
                    </div>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Soluções injetáveis</h5>
                        <p class="card-text">Soro fisiológico, glicose, ringer lactato, entre outros.</p>
                    </div>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Materiais descartáveis</h5>
                        <p class="card-text">Seringas, agulhas, luvas, máscaras, e outros itens.</p>
                    </div>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Medicamentos analgésicos</h5>
                        <p class="card-text">Dipirona, paracetamol, ibuprofeno, e similares.</p>
                    </div>
                </div>
            </div>
            <!-- Item 5 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Antibióticos</h5>
                        <p class="card-text">Amoxicilina, cefalexina, e outros.</p>
                    </div>
                </div>
            </div>
            <!-- Item 6 -->
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-primary">Pomadas e cremes tópicos</h5>
                        <p class="card-text">Produtos para queimaduras, feridas, e cuidados dermatológicos.</p>
                    </div>
                </div>
            </div>
        </div>
        <p>
        <!-- Mensagem abaixo da lista -->
        <h6 class="text-white text-center mb-4" style="font-size:25px; font-weight: bold;">
            Faça sua doação diretamente no setor de Farmácia do Hospital Viamão. 
            Juntos, podemos transformar vidas!
        </h6>
    </div>
</div>


        <!-- Imagens dos fornecedores -->
        <div class="row justify-content-center mt-5">
            <!-- Fornecedor 1 -->
            <div class="col-md-4 col-sm-6 col-12 text-center mb-4">
                <a href="https://www.fornecedor1.com.br" target="_blank">
                    <img src="../img/Entidades/Logo Fornecedores Emergencia/01.jpg" alt="Fornecedor 1" class="img-fluid" style="max-width: 200px;">
                </a>
                <p class="mt-2 text-white ">Fornecedor Fictício 01</p>
            </div>

            <!-- Fornecedor 2 -->
            <div class="col-md-4 col-sm-6 col-12 text-center mb-4">
                <a href="https://www.fornecedor2.com.br" target="_blank">
                    <img src="../img/Entidades/Logo Fornecedores Farmacia/02.jpg" alt="Fornecedor 2" class="img-fluid" style="max-width: 200px;">
                </a>
                <p class="mt-2 text-white ">Fornecedor Fictício 02</p>
            </div>

            <!-- Fornecedor 3 -->
            <div class="col-md-4 col-sm-6 col-12 text-center mb-4">
                <a href="https://www.fornecedor3.com.br" target="_blank">
                    <img src="../img/Entidades/Logo Fornecedores Farmacia/03.jpg" alt="Fornecedor 3" class="img-fluid" style="max-width: 200px;">
                </a>
                <p class="mt-2 text-white ">Fornecedor Fictício 03</p>
            </div>
        </div>

        <!-- Informações de Contato e Entrega -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-8 col-12">
                <div class="p-4 border rounded bg-light">
                    <h5 class="text-center text-primary">Informações de Contato e Entrega</h5>
                    <p class="mt-3">
                        <strong>Responsável pelo Setor:</strong> Maria Oliveira<br>
                        <strong>Endereço:</strong> Hospital de Viamão - Rua Isabel Bastos, 138, Centro, Viamão/RS<br>
                        <strong>Ramal:</strong> 3456-4700 (Setor de Farmacia)<br>
                        <strong>Email:</strong> <a href="mailto:farmacia@hospitalviamao.com">farmacia@hospitalviamao.com</a><br>
                        <strong>Horário de Recebimento:</strong> Segunda a Sexta, das 8h às 17h.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo final -->
    <div class="text-center my-4">
        <a href="https://www.imas.net.br/site/">
            <img src="../img/finalimagem.png" alt="desc" />
        </a>
    </div>
</div>





    <footer class="py-5" style="background-color: #F1F1F1;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <h4 class="mb-4">Redes Sociais</h4>
                    <ul class="list-unstyled social-icons">
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#" class="instagram"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="mb-4">Contato</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Endereço: Isabel Bastos, 138</p>
                    <p><i class="fas fa-envelope"></i> Email: <a href="mailto:contato@exemplo.com">contato@exemplo.com</a></p>
                    <p><i class="fas fa-phone"></i> Telefone: (51) 3485-4700</p>
                </div>
                <div class="col-md-3">
                    <h4 class="mb-4">Informações</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Suporte</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="mb-4">Suporte</h4>
                    <ul class="list-unstyled social-icons">
                        <li><a href="https://github.com/MxFerreira">Maicon Ferreira</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>



<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Maicon Ferreira">

    <link rel="stylesheet" href="../css/projetos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">

    <title>Popup Doação</title>

    <style>
        /* Estilo para a imagem pop-up */
        .floating-popup {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 250;
            height: 250px;
            z-index: 1000;
            cursor: pointer;
            animation: blink 1s infinite;
        }

        /* Animação para o piscar */
        @keyframes blink {
            0%, 50%, 100% {
                opacity: 1;
            }
            25%, 75% {
                opacity: 0.1;
            }
        }
    </style>
</head>

<body>

    <!-- Imagem pop-up fixa -->
    <a href="donation.php">
        <img src="../img/CarimboDoacao.png" alt="Faça uma doação" class="floating-popup">
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
