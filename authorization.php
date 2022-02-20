<?php
//иммитация база данных
$bd = ['log' => 'Pers', 'pas' => '123'];
//Хеширование пароля
$bd['pas'] = md5($bd['pas']);
//Функция для проверки пары логин - пароль
function log_in($bd):bool
{
    if ($bd['log'] == $_POST['log']) {
        if ($bd['pas'] == md5($_POST['pas'])) {
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}
//Действия при успешном\пустом\не верном входах
if (log_in($bd)){
    session_start();
    header("Location: hello.php");
    exit();
}elseif (empty($_POST)){
    echo 'Введите логин и пароль';
}else{
    echo 'Не верный логин или пароль';
}
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
    <input type="text" name="log">
    <input type="password" name="pas">
    <input type="submit"><br>
    <a href="fact.php">Факт</a>
    <a href="bitrix.php">Битрикс</a>
</form>
</body>
</html>