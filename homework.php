<?php
$pagename = basename(__FILE__);
require('page-elements/all-head/all-head.php');
?>
<body class="font-color">
    <?php
    require ('page-elements/all-header/all-header.php')
    ?>
    <main class="box-border">
        <section class="box-border box-background">
            <?php
                for ($i = 5; $i <= 13 ; $i++){
                    echo '<p>'.$i.'</p>'.'<br>';
                }
            ?>
        </section>
        <section class="box-border box-background">
            <?php
                $num = 1000;
                $iter = 0;
                echo '<p>Делим 1000 на 2 с помощью while</p>'.'<br>';
                while ($num > 50){
                    $num = $num / 2;
                    echo '<p>'.$num.'</p>'.'<br>';
                    $iter++;
                }
                echo '<p>Количество итераций: '.$iter.'</p>'.'<br>';
            ?>
        </section>
        <section class="box-border box-background">
            <?php
                $num2 = 1000;
                $iterat = 0;
                echo '<p>Делим 1000 на 2 с помощью for</p>'.'<br>';
                for (;$num2 > 50;){
                    $num2 /= 2;
                    echo '<p>'.$num2.'</p>'.'<br>';
                    $iterat++;
                }
                echo '<p>Количество итераций: '.$iterat.'</p>'.'<br>';
            ?>
        </section>
        <section class="box-border box-background">
            <?php
                $numbers=["0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10", "0, 1, 2, 3, 4, 5, 6, 7, 8, 9", "0, 1, 2, 3, 4, 5, 6, 7, 8", "0, 1, 2, 3, 4, 5, 6, 7", "0, 1, 2, 3, 4, 5, 6", "0, 1, 2, 3, 4, 5", "0, 1, 2, 3, 4", "0, 1, 2, 3", "0, 1, 2", "0, 1", "0"];
                for ($iteration = 0; $iteration <= 10; $iteration++) {
                    echo '<p>' . $numbers[$iteration] . '</p>'.'<br>';
                }
            ?>
        </section>
    </main>
</body>
</html>