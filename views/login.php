<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="/Treinamento2020/Lib/bootstrap.css" rel="stylesheet">
    <link href="/Treinamento2020/assets/styles/login.css" rel="stylesheet">
    <meta charset="utf-8" />
    <script language="JavaScript" src="/Treinamento2020/assets/js/validForm.js"></script>
    <title>Login</title>
</head>

<body>

    <div class="container form-signin">
        <img class="img-fluid rounded mx-auto row" src="../assets/images/logo.png" alt="Logo da EcompJr">
        <h1 class="text-center text-primary">Faça o seu login</h1>
        <i class="fas fa-sign-in-alt"></i>
        <form action="/Treinamento2020/user/check" method="post" Onsubmit="submitLogin()">
            <div class="row">
                <input class="col-12 form-control" name="email" placeholder="Email address" required autofocus>
                <input class="col-12 form-control" name="password" type="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name = "sign-in"> Entrar </button>
            </div>
        </form>
<div id="invalidLogin" class="alert alert-danger" role="alert" <?php if(!isset( $_SESSION["invalid"] )){?> style="visibility: hidden" <?php }?>>
            <h4 class="alert-heading">Erro!</h4>
            <p>Senha ou email inválidos</p>
        </div>
    </div>

</body>

</html>