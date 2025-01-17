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

    <title>Doações: Hospital Viamão</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="homepage.html">
                <span class="navbar-brand-title">Hospital Viamão</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link custom-button" href="homepage.php">Início</a>
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

    <!-- Donation Information -->
    <div class="container my-5">
        <div class="text-center py-3 rounded mb-4" style="background-color: #08568f;">
            <h5 class="text-white" style="font-size: 3rem; font-weight: bold;">Informações para Doações</h5>
        </div>

        <div class="row">
            <!-- Bank Details -->
            <div class="text-center col-md-6 text-white" style="font-size: 2.2rem; line-height: 1.8;">
				<h1>Dados Bancários</h1>
				<p><strong>Banco:</strong> Banco do Brasil</p>
				<p><strong>Agência:</strong> 1234-5</p>
				<p><strong>Conta Corrente:</strong> 98765-4</p>
				<p><strong>Chave PIX:</strong> doacoes@hospitalviamao.org</p>
				<p><strong>Titular:</strong> Hospital Viamão</p>
			</div>


            <!-- QR Code -->
            <div class="col-md-6 text-center text-white">
                <h4>QR Code para Doações</h4>
                <div style="border: 2px dashed #ccc; padding: 70px; display: inline-block;">
                    <img src="../img/QRcode.png" alt="QR Code para Doações" style="width: auto; height: auto;">
                </div>
            </div>
        </div>

        <!-- Donation Benefits -->
        <div class="text-white mt-4">
            <h4>Como sua doação ajuda?</h4>
            <p>Com sua contribuição, podemos melhorar nossos equipamentos, oferecer medicamentos e atender ainda melhor a comunidade. Cada doação faz a diferença!</p>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5" style="background-color: #F1F1F1;">
        <div class="container-fluid">
            <div class="row">
                <!-- Contact Information -->
                <div class="col-md-6">
                    <h4>Contato</h4>
                    <p><i class="fas fa-map-marker-alt"></i> Endereço: Isabel Bastos, 138</p>
                    <p><i class="fas fa-envelope"></i> Email: <a href="mailto:contato@hospitalviamao.org">contato@hospitalviamao.org</a></p>
                    <p><i class="fas fa-phone"></i> Telefone: (51) 3485-4700</p>
                </div>

                <!-- Social Media -->
                <div class="col-md-6">
                    <h4>Redes Sociais</h4>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
