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

    <title>Doações: Hospital Viamão</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand d-flex align-items-center" href="homepage.html">
				<!-- logo -->
				<img src="../img/welcome.png" alt="Logo" width="auto" height="90" class="d-inline-block align-text-top">
				<!-- Título ao lado do logo -->
				<span class="navbar-brand-title">Doe por Setores</span>
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
    <div class="my-5 container-fluid">
        <!-- Título -->
        <div class="py-3 text-center rounded mb-4" style="background-color: #08568f;">
            <h5 class="m-0 text-white" style="font-size: 2rem; font-weight: bold;">DOAÇÕES POR SETORES<p>Conheça os setores</h5>
        </div>
        
        <!-- Imagem maior à esquerda -->
        <div class="row align-items-center">
            <div class="col-md-4 col-12 text-center text-md-start">
                <img src="../img/maosvoluntario.png" alt="projetos" class="fade-in-image" 
                    style="width: 100%; max-width: 1000px; height: auto;">
            </div>

            <div class="col-md-8 col-12">
                <div class="container">
                    <!-- Linha com 3 imagens (primeira linha) -->
                    <div class="row justify-content-center g-1">
                        <div class="col-md-4 col-6 p-1 text-center">
                            <a href="/php/pages/InfoNutricao.php">
                                <img src="../img/Setores/9.png" alt="desc" style="width: 65%; height: auto;" class="rounded">
                            </a>
                        </div>
                        <div class="col-md-4 col-6 p-1 text-center">
                            <a href="/php/pages/infoFarmacia.php">
                                <img src="../img/Setores/10.png" alt="desc" style="width: 65%; height: auto;" class="rounded">
                            </a>
                        </div>
                        <div class="col-md-4 col-6 p-1 text-center">
                            <a href="/php/pages/infoEmergencia.php">
                                <img src="../img/Setores/14.png" alt="desc" style="width: 65%; height: auto;" class="rounded">
                            </a>
                        </div>
                    </div>
                    <!-- Linha com 3 imagens (segunda linha) -->
                    <div class="row justify-content-center g-1">
                        <div class="col-md-4 col-6 p-1 text-center">
                            <a href="/php/pages/infoHospital.php">
                                <img src="../img/Setores/11.png" alt="desc" style="width: 65%; height: auto;" class="rounded">
                            </a>
                        </div>
                        <div class="col-md-4 col-6 p-1 text-center">
                            <a href="/php/pages/infoAssSoc.php">
                                <img src="../img/Setores/12.png" alt="desc" style="width: 65%; height: auto;" class="rounded">
                            </a>
                        </div>
                        <div class="col-md-4 col-6 p-1 text-center">
                            <a href="/php/pages/infoSaudeMental.php">
                                <img src="../img/Setores/13.png" alt="desc" style="width: 65%; height: auto;" class="rounded">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Logo final -->
    <div class="text-center my-4">
        <a href="https://www.imas.net.br/site/"><img src="../img/finalimagem.png" alt="desc" /></a>
    </div>
</div>


<!-- Script para o fade-in da imagem -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const fadeInImage = document.querySelector(".fade-in-image");

        const handleScroll = () => {
            const rect = fadeInImage.getBoundingClientRect();
            if (rect.top <= window.innerHeight && rect.bottom >= 0) {
                fadeInImage.classList.add("visible");
                window.removeEventListener("scroll", handleScroll);
            }
        };

        window.addEventListener("scroll", handleScroll);
        handleScroll();
    });
</script>


   

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
                    <p><i class="fas fa-envelope"></i> Email: <a
                            href="mailto:contato@exemplo.com">contato@exemplo.com</a></p>
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