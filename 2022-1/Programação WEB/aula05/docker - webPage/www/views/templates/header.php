<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS-->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!--BOOTSTRAP v5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--JQuery v3-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--JS-->
    <script src="./assets/js/script.js"></script>
    
    <title>Aula01</title>
</head>
<body>
    <header class="p-5 bg-dark text-light text-center rounded">
        <h1>Minha página usando PHP</h1>
    </header>
    

    <section class="container-fluid">
        <div class="row">
            <ul class="nav flex-column col-md-3 py-5" id="nav">
                <li class="nav-item">
                <a class="nav-link" href="?controller=site&action=home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?controller=site&action=about">Sobre</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?controller=site&action=products">Produtos</a>
                </li>
                <li class="nav-item">
                <a id="about" class="nav-link" href="?controller=site&action=contact">Contato</a>
                </li>
                <h3>Clientes</h3>
                <li class="nav-item">
                <a id="about" class="nav-link" href="?controller=client&action=insertClient">Cadastro</a>
                </li>

            </ul>

            <article class="col-md-9 py-5">
            