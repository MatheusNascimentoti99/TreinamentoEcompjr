<?php
require_once "../../../DB/Connection.php";
require_once "../../../models/User.php";
require_once "../../../controllers/UserController.php";
UserController::verifyLogin();
$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>

<head>
    <link href="/Treinamento2020/Lib/bootstrap.css" rel="stylesheet">
    <link href="/Treinamento2020/assets/styles/profile.css" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Login</title>
</head>

<body>


    <?php include '../dashboard.php' ?>

    <form action="/Treinamento2020/user/update/<?php echo $user->getId() ?>" method="post">
        <input name="name" placeholder="name" value="<?php echo $user->getName() ?>">
        <input type="email" name="email" placeholder="email" value="<?php echo $user->getEmail() ?>">
        <select name="type">
            <option value="">Selecione um tipo</option>
            <?php if ($_SESSION['user']->getType() == 'admin') { ?>
                <option value="admin" <?php if ($user->getType() == "admin") { ?> selected <?php } ?>>Administrador</option>
            <?php } ?>
            <option value="user" <?php if ($user->getType() == "user") { ?> selected <?php } ?>>Usuário comum</option>
        </select>
        <input type="password" name="password">
        <input type="password" name="password_confirmation">
        <button type="submit"> Alterar </button>
    </form>
</body>

</html>