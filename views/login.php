<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="../Lib/bootstrap.css" rel="stylesheet">
    <link href="login.css" rel="stylesheet">

    <title>Login</title>
</head>

<body>
    
    <div class="container form-signin">
        <img class="img-fluid rounded mx-auto row" src="../assets/images/logo.png" alt="Logo da EcompJr">
        <h1 class = "text-center text-primary">Faça o seu login</h1>
        <i class="fas fa-sign-in-alt"></i>
        <form action="/Treinamento2020/user/check" method="post">
            <div class="row">
                <input class = "col-12 form-control" name="email" placeholder="Email address" required autofocus>
                <input class = "col-12 form-control" name="password" type="password" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit"> Entrar </button>
            </div>
        </form>
    </div>
    <script>
        if($_SESSION['fault'] != null){
            alert ($_SESSION['fault'])
        }
    </script>
</body>

</html>