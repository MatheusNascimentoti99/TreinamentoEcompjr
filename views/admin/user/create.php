<?php
require_once "../../../DB/Connection.php";
require_once "../../../models/User.php";
require_once "../../../controllers/UserController.php";
UserController::verifyLogin();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="../../../Lib/bootstrap.css" rel="stylesheet">
    <link href="../../../assets/styles/Dashboard.css" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Dashboard</title>
</head>

<body>
    <?php include '../dashboard.php'?>
    
    <form action="/Treinamento2020/user/store" method="post">
        <input name="name" placeholder="name" required>
        <input type="email" name="email" placeholder="email" required>
        <select name="type" required>
            <option value="">Selecione um tipo</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário comum</option>
        </select>
        <input type="password" name="password" placeholder="password" required>
        <input type="password" name="password_confirmation" placeholder="password" required>
        <button type="submit"> Cadastrar </button>
    </form>
</body>

</html>