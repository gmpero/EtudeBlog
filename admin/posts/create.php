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
                    <a href="<?php echo BASE_URL . "admin/posts/create.php";?>" class="col-2 btn btn-success">Создать</a>
                    <span class="col-1"></span>
                    <a href="<?php echo BASE_URL . "admin/posts/index.php";?>" class="col-3 btn btn-warning">Редактировать</a>
                </div>
                <div class="row title-table">
                    <h2>Добавление статьи</h2>
                </div>
                <div class="row add-post">
                    <form action="create.php" method="POST">

                        <div class="col mb-4">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" aria-label="Название">
                        </div>

                        <div class="col">
                            <label for="editor" class="form-label">Содержимое статьи</label>
                            <textarea class="form-control" id="editor" rows="6"></textarea>
                        </div>

                        <div class="input-group col mb-4 mt-4">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>

                        <select class="form-select mb-2" aria-label="Default select example">
                            <option selected>Выберите тему</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <div class="col mb-2">
                            <button class="btn btn-primary" type="submit">Сохранить запись</button>
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
    <!-- CKEditor 5 Добавлние визуального редактора-->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script src="../../assets/js/script.js"></script>
</body>

</html>