<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: login.php');
    }
    $logado = $_SESSION['email'];

    //verificação de sessão e exclusão de dados após a função sair.php for chamada
?>


<!DOCTYPE html>
<html lang="pt-br">
    <!-- Inicio do Head -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Cadê Meu Banzo </title>
    <meta name="description" content="Cadê meu banzo é um site criado por um grupo de estudantes, com a ambiciosa ideia de mudar o Sistema de Transporte Público do Rio Grande do Sul, mais precisamente das cidades de Alvorada e Porto Alegre">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="icon" type="image/png" sizes="500x500" href="assets/img/Ico/Cade%20meu%20Banzo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/divider-text-middle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Basic.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
</head>
    <!-- Fim do Head -->

    <!-- Inicio Do Corpo Da Pagina -->
    
<body style="background: var(--bs-body-color);">
    <nav class="navbar navbar-light navbar-expand-md custom-header" data-aos="fade-right" data-aos-duration="350">
        <div class="container-fluid">
            <div><a class="navbar-brand" href="dashboard.php" style="color: var(--bs-orange);">Cadê Meu&nbsp;<span style="color: var(--bs-yellow);">Banzo W.I.P</span> </a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbar-collapse"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="navbar-nav links">
                    <li class="nav-item"><a class="nav-link active" href="" style="color: rgb(255,255,255);">Paradas</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="color: rgb(255,255,255);">Recarregar Cartão</a></li>
                    <li class="nav-item"><a class="nav-link active" href="#" style="color: rgb(255,255,255);">Reclamações</a></li>
                    <li class="nav-item"><a class="nav-link active custom-navbar" href="#" style="color: rgb(255,255,255);"> Mais+<span class="badge rounded-pill bg-primary">new</span></a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"> <img class="dropdown-image" src="assets/img/perfil.jpg"></a>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Configurações</a><a class="dropdown-item" href="#">Cartões</a><a class="dropdown-item" href="sair.php">Sair</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div></div>

        <?php
        echo "<h3 class='text-center text-warning'>Bem Vindo! <u>$logado</u></h3>";
        ?>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script src="assets/js/creative.js"></script>
</body>

</html>