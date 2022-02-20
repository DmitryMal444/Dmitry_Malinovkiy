<footer class="footer">
    <p>©Дмитрий</p>
    <?php
    // функция разницы между датой рождения и сегодня
        function foodate()
        {
            date_default_timezone_set('UTC');
            $date1 = date('Y-m-d', mktime(0, 0, 0, 2, 24, 2002));
            $today = date("Y-m-d");
            echo $date1 . " - дата рождения " . $today . " - сегодня ";
            return date_diff(new DateTime("$date1"), new DateTime())->days;
        }
        echo foodate()." - разница".'<br>';
    //  функция подсчета слов в одном блоке
        function allwords($word){
            return str_word_count($word,0,"АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
        }
        echo allwords($words1)+allwords($words2)+allwords($about_me)+allwords($words4)+allwords($about_course)+allwords($words6)+allwords($words7)+allwords($words8)+allwords($words9)+allwords($words10)+allwords($words11)+allwords($words12)+allwords($words13)." - Всего слов".'<br>';
    //  подсчет гласных
        $vowels = ['а', 'у', 'о', 'и', 'э', 'я', 'е', 'ю', 'ы', 'ё', 'a', 'o', 'u', 'e', 'y', 'i', 'А', 'У', 'О', 'И', 'Э', 'Я', 'Е', 'Ю', 'Ы', 'Ё', 'A', 'O', 'U', 'E', 'Y', 'I'];
        $v_words = $words1 .= $words2 .= $about_me .= $words4 .= $about_course .= $words6 .= $words7 .= $words8 .= $words9 .= $words10 .= $words11 .= $words12 .= $words13;
        $all_v = 0;
        foreach ($vowels as $key) {
            $all_v = substr_count($v_words, $key) + $all_v;
        }
        echo $all_v." - всего гласных";
        //Удаление сессии
        if(isset($_POST)){
            if (isset($_POST['p'])){
                session_destroy();
                $_POST = NULL;
            }
        }
    ?>
    <form action="" method="post">
        <button type="submit" name="p" value="p">Удалить сессию</button>
    </form>
</footer>
