<?php
    $pagename = basename(__FILE__);
    require('page-elements/all-head/all-head.php');
?>
<body class="body">
    <?php
        require ('page-elements/all-header/all-header.php')
    ?>
    <main class="main">
        <article class="about">
            <header class="about__header">
                <h2 class="about__name">Дмитрий Малиновский</h2>
            </header>
            <section class="photo">
                <img src="images/photo.jpeg" alt="не загрузилось" class="photo__img">
            </section>
            <section class="about__me">
                <h3 class="about__title">О себе</h3>
                <p class="about__text">Text TextText TextText TextText TextText TextText TextText TextText TextText TextText TextText Text</p>
            </section>
            <section class="about__course">
                <h3 class="about__title">О курсе</h3>
                <p class="about__text">Text TextText TextText TextText TextText TextText TextText TextText TextText TextText TextText TextText TextText TextText TextText Text</p>
            </section>
        </article>
        <article class="cars">
            <section class="line">
                <figure class="line__figure">
                    <img src="images/alphard.png" alt="не загрузилось" class="line__img">
                    <figcaption class="cars__capt">Toyota Alphard</figcaption>
                </figure>
                <figure class="line__figure">
                    <img src="images/cruiser.png" alt="не загрузилось" class="line__img">
                    <figcaption class="cars__capt">Toyota Land Cruiser</figcaption>
                </figure>
                <figure class="line__figure">
                    <img src="images/fortuner.png" alt="не загрузилось" class="line__img">
                    <figcaption class="cars__capt">Toyota Fortune</figcaption>
                </figure>
                <figure class="line__figure">
                    <img src="images/rav4.png" alt="не загрузилось" class="line__img">
                    <figcaption class="cars__capt">Toyota Rav4</figcaption>
                </figure>
            </section>
            <section class="box">
                <figure class="box__figure">
                    <img src="images/alphard.png" alt="не загрузилось" class="box__img">
                    <figcaption class="cars__capt">Toyota Alphard</figcaption>
                </figure>
                <figure class="box__figure">
                    <img src="images/cruiser.png" alt="не загрузилось" class="box__img">
                    <figcaption class="cars__capt">Toyota Land Cruiser</figcaption>
                </figure>
                <figure class="box__figure">
                    <img src="images/fortuner.png" alt="не загрузилось" class="box__img">
                    <figcaption class="cars__capt">Toyota Fortune</figcaption>
                </figure>
                <figure class="box__figure">
                    <img src="images/rav4.png" alt="не загрузилось" class="box__img">
                    <figcaption class="cars__capt">Toyota Rav4</figcaption>
                </figure>
            </section>
        </article>
    </main>
    <footer class="footer">
        <p>©Дмитрий</p>
    </footer>

</body>
</html>