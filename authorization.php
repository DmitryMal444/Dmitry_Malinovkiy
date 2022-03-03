<?php
require_once 'auth.php';
if (empty($_POST)){
    $_POST = ['log' => '', 'pas' => ''];
    echo 'Введите данные для входа';
}else{
    $log = $_POST['log'];
    $pas = md5($_POST['pas']);
    $user = new auth($log, $pas);
    if ($user->login()){
        echo 'Вы вошли';
    }else{
        echo 'Неверный логин или пароль';
    }
}
// логин: admin пароль: 123
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="log">Введите логин</label>
        <input id="log" type="text" name="log"><br><br>
        <label for="pas">Введите пароль</label>
        <input id="pas" type="password" name="pas">
        <input type="submit">
    </form>
</body>
</html>
