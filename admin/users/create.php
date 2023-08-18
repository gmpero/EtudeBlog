<?php
include("../../path.php");
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/6d9064c383.js" crossorigin="anonymous"></script>
    <!-- Custom style -->
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Open+Sans:ital,wght@0,300;0,400;1,600&family=Rubik:wght@400;700&family=Tinos:wght@400;700&display=swap" rel="stylesheet">
    <title>Etude blog</title>
</head>

<body>
    <!-- header -->
    <?php include("../../app/include/header-admin.php"); ?>


    <div class="container">
        <div class="row">
            <?php include "../../app/include/sidebar-admin.php";?>

            <div class="posts col-9">
                <div class="button row">
                    <a href="<?php echo BASE_URL . "admin/users/create.php";?>" class="col-2 btn btn-success">Создать</a>
                    <span class="col-1"></span>
                    <a href="<?php echo BASE_URL . "admin/users/index.php";?>" class="col-3 btn btn-warning">Управление</a>
                </div>
                <div class="row title-table">
                    <h2>Создать пользователя</h2>
                </div>
                <div class="row add-post">
                    <form action="create.php" method="POST">

                        <div class="col">
                            <label for="formGroupExampleInput">Логин</label>
                            <input name="login" value="" type="text" class="form-control" id="formGroupExampleInput" placeholder="Введите Ваш логин">
                        </div>

                        <div class="col">
                            <label for="exampleInputEmail1">Email</label>
                            <input name="email" value="" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <div class="col">
                            <label for="exampleInputPassword1">Пароль</label>
                            <input name="pass-first" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="col">
                            <label for="exampleInputPassword2">Повторите пароль</label>
                            <input name="pass-second" type="password" class="form-control" id="exampleInputPassword2" placeholder="Repeat Password">
                        </div>

                        <label for="exampleInputPassword2">Укажите роль</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>User</option>
                            <option value="1">Admin</option> 
                        </select>

                        <div class="col">
                            <button class="btn btn-primary" type="submit">Создать</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    <?php include("../../app/include/footer.php"); ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>