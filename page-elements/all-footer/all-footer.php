<footer class="footer">
    <p>©Дмитрий</p>
    <?php
        date_default_timezone_set('UTC');
        $date1 = date('Y-m-d', mktime(0, 0, 0, 2, 24, 2002));
        $today = date("Y-m-d");
        echo $date1." - дата рождения ".$today." - сегодня ";
        $dateDiff = date_diff(new DateTime("$date1"), new DateTime())->days;
        echo $dateDiff." - разница";
    ?>
</footer>
