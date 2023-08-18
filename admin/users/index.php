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
                    <a href="create.php" class="col-2 btn btn-success">Создать</a>
                    <span class="col-1"></span>
                    <a href="index.php" class="col-3 btn btn-warning">Управление</a>
                </div>
                <div class="row title-table">
                    <h2>Управление пользователями</h2>
                    <div class="id col-1">ID</div>
                    <div class="title col-4">Логин</div>
                    <div class="author col-2">Роль</div>
                    <div class="management col-4">Управление</div>
                </div>
                <div class="row post">
                    <div class="id col-1">1</div>
                    <div class="title col-4">Neo</div>
                    <div class="author col-2">Admin</div>
                    <div class="edit col-3"><a href="#">Редактировать</a></div>
                    <div class="delete col-2"><a href="#">Удалить</a></div>
                </div>
                <div class="row post">
                    <div class="id col-1">1</div>
                    <div class="title col-4">Neo</div>
                    <div class="author col-2">Admin</div>
                    <div class="edit col-3"><a href="#">Редактировать</a></div>
                    <div class="delete col-2"><a href="#">Удалить</a></div>
                </div>
                <div class="row post">
                    <div class="id col-1">1</div>
                    <div class="title col-4">Neo</div>
                    <div class="author col-2">Admin</div>
                    <div class="edit col-3"><a href="#">Редактировать</a></div>
                    <div class="delete col-2"><a href="#">Удалить</a></div>
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