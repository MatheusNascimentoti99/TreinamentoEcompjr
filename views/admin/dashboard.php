<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . "/Treinamento2020/DB/Connection.php";
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . "/Treinamento2020/models/User.php";
require_once realpath($_SERVER["DOCUMENT_ROOT"]) . "/Treinamento2020/controllers/UserController.php";
UserController::verifyLogin();
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/Treinamento2020/assets/styles/dashboard.css" rel="stylesheet">
    <meta charset="utf-8" />
</head>
<nav class="navbar navbar-expand navbar-light bg-light sticky-top">
    <img class="img-fluid rounded mx-auto row" src="/Treinamento2020/assets/images/logo.png" alt="Logo da EcompJr">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/Treinamento2020/user/profile">Meu Perfil</a>
            </li>
            <?php
            if ($_SESSION['user']->getType() == 'admin') { ?>
                <li class="nav-item">
                    <a class="nav-link" href="/Treinamento2020/user/index">Listagem de usuários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Treinamento2020/user/create">Cadastrar novo usuário</a>
                </li>
            <?php
            }
            ?>
        </ul>
        <text> <?php echo "Olá, " . $_SESSION['user']->getName() . "! " ?></text>
        <div id="exit">
            <a class="text-danger" href="/Treinamento2020/user/logout">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-door-open-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2v13h1V2.5a.5.5 0 0 0-.5-.5H11zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                </svg> </a>

        </div>
    </div>
</nav>
</div>