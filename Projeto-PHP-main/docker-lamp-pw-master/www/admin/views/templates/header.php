<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/script.js">
    <title>Document</title>

</head>
<body>
    
    <header class="jumbotron text-center mb-0">
        <h1>Página ADM </h1>
        <a href="?controller=main&action=logout">Sair</a>
        
       
    </header>
   <div class="container-fluid">
        <div class="row">
            <nav class="col-2 p-4">
                
                <ul class="nav flex-column">
                    <h2>Menu</h2>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=main&action=index"> Home</a>
                    </li>
                    <h4>Clientes</h4>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=client&action=listClients"> Lista de  Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?controller=client&action=createClient">Inserir novo</a>
                    </li>
                </ul>
            </nav>
            <section class="col-10 p-4">