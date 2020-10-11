<?php
require_once "../../../DB/Connection.php";
require_once "../../../models/User.php";
require_once "../../../controllers/UserController.php";
UserController::verifyLogin();
UserController::verifyAdmin();
?>
<!DOCTYPE html>
<html>

<head>
    <link href="../../../Lib/bootstrap.css" rel="stylesheet">
    <link href="../../../assets/styles/page.css" rel="stylesheet">
    <link href="../../../assets/styles/profile.css" rel="stylesheet">
    <link href="../../../assets/styles/index.css" rel="stylesheet">
    <meta charset="utf-8" />
    <title>Login</title>
</head>

<body>

    <?php include '../dashboard.php' ?>
    <h1 class="text-primary">Listagem de usuários</h1>
    <div class="container page">

        <div class="row">
            <?php
            $users = UserController::all();
            foreach ($users as $user) {
            ?>

                <div class="col-md-6">
                    <div class="card mb-4 shadow-sm">
                        <div class="card-body">
                            <div class="card-user">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                                </svg>
                                <ul>
                                    <li><?php echo $user->getName(); ?></li>
                                    <li><?php echo $user->getEmail(); ?></li>
                                </ul>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <?php if ($user->getId() == $_SESSION['user']->getId()) {
                                    ?>
                                        <a href="/Treinamento2020/user/profile" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="/Treinamento2020/user/edit/<?php echo $user->getId() ?>" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                                    <?php
                                    }
                                    ?>
                                    <?php
                                    if ($user->getId() != $_SESSION['user']->getId()) {
                                    ?>
                                        <a href="/Treinamento2020/user/delete/<?php echo $user->getId() ?>" type="button" class="btn btn-sm btn-outline-secondary">Excluir</a>
                                        </a>


                                    <?php
                                    }
                                    ?>
                                </div>
                                <small class="text-muted"><?php echo $user->gettype(); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>