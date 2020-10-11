<?php
require_once realpath($_SERVER["DOCUMENT_ROOT"])."/Treinamento2020/DB/Connection.php";
require_once realpath($_SERVER["DOCUMENT_ROOT"])."/Treinamento2020/models/User.php";
require_once realpath($_SERVER["DOCUMENT_ROOT"])."/Treinamento2020/controllers/UserController.php";
UserController::verifyLogin();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="/Treinamento2020/Lib/bootstrap.css" rel="stylesheet">
    <link href="/Treinamento2020/assets/styles/dashboard.css" rel="stylesheet">
    <meta charset="utf-8" />
</head>
    <nav class="navbar navbar-expand navbar-light bg-light">
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
                    <img src="/Treinamento2020/assets/images/sign-out.svg" alt="Sair da página" width="24px" />
                </a>

            </div>
        </div>
    </nav>
    </div>
</body>

</html>