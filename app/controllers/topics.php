<?php
include "../../app/database/db.php";

$statusMsg = '';

$id = '';
$name = '';
$description = '';
$topics = selectALL('topics');


//Форма создания категории
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-create'])){
    
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if($name === '' || $description === ''){
        $statusMsg = "Вы не заполнили все поля!";
    }elseif (mb_strlen($name, 'UTF8') < 3) {
        $statusMsg = "Имя категории должно быть более двух символов";
    }else{
        $existence = selectOne('topics', ['name' => $name]);
        if(!empty($existence['name']) && $existence['name'] === $name){
            $statusMsg = "Такая категория уже есть";
        }else {
            $topic = [
                'name' => $name,
                'description' => $description,
                //'created' => '2023-03-15 18:48:14',
            ];

            $id = insert('topics', $topic);
            $topic = selectOne('topics', ['id' => $id]);
            header('location:' . BASE_URL . 'admin/topics/index.php');
        }
        
    }
}else{
    $name = '';
    $description = '';
}


// Редактирование категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])){
    // test($_GET);
    $id = $_GET['id'];
    $topic = selectOne('topics', ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
    // test($name);
}


if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['topic-edit'])){
    
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);

    if($name === '' || $description === ''){
        $statusMsg = "Вы не заполнили все поля!";
    }elseif (mb_strlen($name, 'UTF8') < 3) {
        $statusMsg = "Имя категории должно быть более двух символов";
    }else{
        $existence = selectOne('topics', ['name' => $name]);
            $topic = [
                'name' => $name,
                'description' => $description,
                //'created' => '2023-03-15 18:48:14',
            ];

            $id = $_POST['id'];
            $topic_id =update('topics', $id, $topic);
            header('location:' . BASE_URL . 'admin/topics/index.php');
    }
}


// Удаление категории
if($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    delete('topics', $id);
    header('location:' . BASE_URL . 'admin/topics/index.php');
}