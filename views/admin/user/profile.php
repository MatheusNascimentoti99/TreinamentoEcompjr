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
    <link href="../../../Lib/bootstrap.css" rel="stylesheet">
    <link href="../../../assets/styles/page.css" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Login</title>
</head>

<body>

    <?php include '../dashboard.php' ?>
    <div class="container">
        <form class="row mb-3" action="/Treinamento2020/user/update/<?php echo $user->getId() ?>" method="post">
            <div class="col-md-4 col-12">
                <input name="name" placeholder="name" value="<?php echo $user->getName() ?>">
                <input type="email" name="email" placeholder="email" value="<?php echo $user->getEmail() ?>">
            </div>
            <select class="col-md-4"> name="type">
                <option value="">Selecione um tipo</option>
                <?php if ($_SESSION['user']->getType() == 'admin') { ?>
                    <option value="admin" <?php if ($user->getType() == "admin") { ?> selected <?php } ?>>Administrador</option>
                <?php } ?>
                <option value="user" <?php if ($user->getType() == "user") { ?> selected <?php } ?>>Usuário comum</option>
            </select>
            <div class="col-md-4">
                <input type="password" name="password">
                <input type="password" name="password_confirmation">
            </div>
            <button type="submit"> Alterar </button>
        </form>
    </div>
</body>

</html>