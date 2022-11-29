<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <title>REGISTROS</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=novo">Novo Usuário</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?page=listar">Listar Usuários</a>
                </li>    
            </ul>
            </div>
        </div>
    </nav>

    <?php
        include("config.php");
        switch(@$_REQUEST["page"]){
            case "novo":
                include("usuario.php");
            break;
            case "listar":
                include("listar.php");
            break;
            case "salvar":
                include("salvar.php");
            break;
            case "editar":
                include("editar.php");
            break;
            default:
                echo "<h1>Bem-Vindos!</h1>";
        }
    ?>
</body>
</html>