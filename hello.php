<?php
echo 'Привет!';
session_start();
echo 'Последняя посещенная страница: '.$_COOKIE['lvisit'].'.';
exit();