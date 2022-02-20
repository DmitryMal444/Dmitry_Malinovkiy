<?php
if (empty($_POST)){
    $_POST = ['to'=>'1','subject'=>'','message'=>''];
}else {
    $to = $_POST['to'];
    $subject = wordwrap($_POST['subject'], 70, "\r\n");
    $message = $_POST['message'];
    mail($to, $subject, $message);
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
        <label for="to">Куда отправить?</label>
        <input id="to" type="text" name="to" required>
        <label for="su">Тема</label>
        <input id="su" type="text" name="subject" required>
        <label for="mes">Текст</label>
        <input id="mes" type="text" name="message" required>
        <input type="submit">
    </form>
</body>
</html>
