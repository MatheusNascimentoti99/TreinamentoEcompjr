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
    <link href="../../../assets/styles/profile.css" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Login</title>
</head>

<body>

    <?php include '../dashboard.php' ?>
    <h1 class="text-primary">Meu perfil</h1>
    <div class="container page">
        <form action="/Treinamento2020/user/update/<?php echo $user->getId() ?>" method="post">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationServer01">Nome</label>
                    <input name="name" placeholder="name" type="text" class="form-control" id="validationServer01" value="<?php echo $user->getName() ?>" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="validationServer02">E-mail</label>
                    <input type="email" name="email" placeholder="email" value="<?php echo $user->getEmail() ?>" class="form-control" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationServer03">Password</label>
                    <input type="password" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" name="password" required>

                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer03">Password</label>
                    <input type="password" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback" name="password_confirmation" required>

                </div>
                <div class="col-md-4 mb-3">
                    <label for="validationServer04">Selecione o tipo</label>
                    <select name="type" class="custom-select" id="validationServer04" aria-describedby="validationServer04Feedback" required>
                        <option selected disabled value="">Choose...</option>
                        <?php if ($_SESSION['user']->getType() == 'admin') { ?>
                            <option  value="admin" <?php if ($user->getType() == "admin") { ?> selected <?php } ?>>Administrador</option>
                        <?php } ?>
                        <option value="user" <?php if ($user->getType() == "user") { ?> selected <?php } ?>>Usuário comum</option>
                    </select>
                </div>
              
            </div>
            <button class="btn btn-primary" type="submit">Alterar</button>
        </form>
    </div>
</body>

</html>