<?php
include("app/database/db.php");

$statusMsg = '';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    // $pass = password_hash($_POST['pass-first'], PASSWORD_DEFAULT); 
    // $passSec = $_POST['pass-second'];

    if($login === '' || $email === '' || $passF === ''){
        $statusMsg = "Вы не заполнили все поля!";
    }elseif (mb_strlen($login, 'UTF8') < 3) {
        $statusMsg = "Логин должен быть более двух символов";
    }elseif ($passF !== $passS){
        $statusMsg = "Пароли не совпадают";
    }else{
        $existence = selectOne('users', ['email' => $email]);
        if(!empty($existence['email']) && $existence['email'] === $email){
            $statusMsg = "Такая почта уже зарегистрирована";
        }else {
            $pass = password_hash($passF, PASSWORD_DEFAULT); 
            $post = [
                'admin' => '0',
                'username' => $login,
                'email' => $email,
                'password' => $pass,
                //'created' => '2023-03-15 18:48:14',
            ];

            $id = insert('users', $post);
            $user = selectOne('users', ['id' => $id]);
            $_SESSION['id'] = $user['id'];
            $_SESSION['login'] = $user['username'];
            $_SESSION['admin'] = $user['admin'];
            if($_SESSION['admin']){
                header('location:' . BASE_URL . "admin/admin.php");
            }else{
                header('location:' . BASE_URL);
            }
        }
        
    }

    // $lastRow = selectOne('users', ['id' => $id]);
}else{
    $login = '';
    $email = '';
}

