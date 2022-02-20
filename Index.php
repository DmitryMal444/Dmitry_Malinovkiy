<?php
    session_start();
    if(empty($_GET)){
        $_GET = ['color'=>''];
    }
    setcookie('color', $_GET['color'], time()+120);
    $pagename = basename(__FILE__);
    require('page-elements/all-head/all-head.php');
?>
<body class="body">
    <?php
        require ('page-elements/all-header/all-header.php');
    ?>
    <main class="main">
        <article class="about">
            <header class="about__header">
                <h2 class="about__name"><?php $words1 = "Дмитрий Малиновский"; echo $words1;?></h2>
            </header>
            <section class="photo">
                <img src="images/photo.jpeg" alt="не загрузилось" class="photo__img">
            </section>
            <section class="about__me">
                <h3 class="about__title"><?php $words2 = "О себе"; echo $words2; ?></h3>
                <?php
                    $about_me = 'Родился и развивался в городе Магнитогорске. Закончил колледж по специальности
                    электромонтёр ОПС, сейчас работаю в этой же сфере. Хочу и стремлюсь стать разработчиком, но
                    так как не получилось поступить на это направление в образовательное учреждение, переодически занимался самообразованием
                    в этой области. Свободное время провожу по-разному: от простого сидения дома до путешествий с друзьями в другие города.';
                    $new_about_me = substr_replace($about_me, '<span class="red">', 0, 0);
                    $dot_item = '.';
                    $dot = strpos($new_about_me, $dot_item);
                    echo substr_replace($new_about_me, '</span> ', ++$dot, 1);
                ?>
            </section>
            <section class="about__course">
                <h3 class="about__title"><?php $words4 = "О курсе"; echo $words4;?></h3>
                <?php
                    $about_course = 'Курс нравится, особенно тем подходом, что каждый может задать свой вопрос и
                    ему обязательно помогут.';
                    $about_course_ms = explode(" ", $about_course);
                    for ($ii = 0; $ii < count($about_course_ms); $ii++){
                        if ($ii%2 == 0){
                            echo str_replace($about_course_ms[$ii], "<span class=\"red\">$about_course_ms[$ii] </span>", $about_course_ms[$ii]);
                        }
                        else {
                            echo str_replace($about_course_ms[$ii], "<span class=\"blue\">$about_course_ms[$ii] </span>", $about_course_ms[$ii]);
                        }
                    }
                ?>
            </section>
        </article>
        <article class="cars">
            <section class="line">
                <figure class="line__figure">
                    <img src="images/alphard.png" alt="не загрузилось" class="line__img">
                    <figcaption class="cars__capt"><?php $words6 = "Toyota Alphard"; echo $words6;?></figcaption>
                </figure>
                <figure class="line__figure">
                    <img src="images/cruiser.png" alt="не загрузилось" class="line__img">
                    <figcaption class="cars__capt"><?php $words7 = "Toyota Land Cruiser"; echo $words7;?></figcaption>
                </figure>
                <figure class="line__figure">
                    <img src="images/fortuner.png" alt="не загрузилось" class="line__img">
                    <figcaption class="cars__capt"><?php $words8 = "Toyota Fortune"; echo $words8;?></figcaption>
                </figure>
                <figure class="line__figure">
                    <img src="images/rav4.png" alt="не загрузилось" class="line__img">
                    <figcaption class="cars__capt"><?php $words9 = "Toyota Rav4"; echo $words9;?></figcaption>
                </figure>
            </section>
            <section class="box">
                <figure class="box__figure">
                    <img src="images/alphard.png" alt="не загрузилось" class="box__img">
                    <figcaption class="cars__capt"><?php $words10 = "Toyota Alphard"; echo $words10;?></figcaption>
                </figure>
                <figure class="box__figure">
                    <img src="images/cruiser.png" alt="не загрузилось" class="box__img">
                    <figcaption class="cars__capt"><?php $words11 = "Toyota Land Cruiser"; echo $words11;?></figcaption>
                </figure>
                <figure class="box__figure">
                    <img src="images/fortuner.png" alt="не загрузилось" class="box__img">
                    <figcaption class="cars__capt"><?php $words12 = "Toyota Fortune"; echo $words12;?></figcaption>
                </figure>
                <figure class="box__figure">
                    <img src="images/rav4.png" alt="не загрузилось" class="box__img">
                    <figcaption class="cars__capt"><?php $words13 = "Toyota Rav4"; echo $words13;?></figcaption>
                </figure>
            </section>
        </article>
    </main>
    <?php
        require ('page-elements/all-footer/all-footer.php');
    ?>
</body>
</html>