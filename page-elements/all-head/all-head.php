<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png">
    <?php
    //    подключение тем
    $a = range(8, 19);
    $b = getdate();
    foreach ($a as $z){
        if ($b['hours'] == $z) {
            echo '<link rel="stylesheet" href="styles/day-theme.css">';
            break;
        }
        else {
            echo '<link rel="stylesheet" href="styles/nigh-theme.css">';
        }
    }
    //    подключение разметки грид и флекс
        $styles = ['<link rel="stylesheet" href="page-elements/all-header/all-header__styles.css">', '<link rel="stylesheet" href="styles/layout-index.css">', '<link rel="stylesheet" href="styles/layout-tableOfM.css">', '<link rel="stylesheet" href="styles/layout-homework.css">'];
        if ($pagename == "Index.php"){
            echo $styles[0];
            echo $styles[1];
        }
        elseif ($pagename == "tableOfM.php"){
            echo $styles[0];
            echo $styles[2];
        }
        elseif ($pagename == "homework.php"){
            echo $styles[0];
            echo $styles[3];
        }
    ?>
    <title>SPHS</title>
