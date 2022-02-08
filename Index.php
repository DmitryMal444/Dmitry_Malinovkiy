<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png">
    <title>SPHS</title>
</head>
<body class="body">
    <header class="header">
        <div class="header__logo">
            <img src="images/logo.png" alt="не загрузилось" class="header__img">
            <p class="header__name">SPHS</p>
        </div>
        <nav class="nav">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
                <span class="span"></span>
            </label>
            <ul class="menu">
                <li class="nav__link"><a href="tableOfM.html" >Таблица</a></li>
                <li class="nav__link"><a href="https://github.com/DmitryMal444/Dmitry_Malinovkiy" >ГитХаб</a></li>
            </ul>
        </nav>
    </header>
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
    <?php
        $a = range(8, 19);
        $b = getdate();
        foreach ($a as $z){
            if ($b['hours'] == $z) {
                echo '<style>
                        body{
                            background-image: none;
                            background-color: white;
                            color: black;
                            }
                        .about__course, .about__header, .about__me, .photo, .line, .box{
                            background-color: white;
                            border: 1px solid black;
                        </style>';
            break;
            }
            else {
                echo '<style>
                        body{
                            background-image: url(images/background.jpg);
                            color: white;
                            }
                        .about__course, .about__header, .about__me, .photo, .line, .box{
                            background-color: black;
                            border: 1px solid darkred;
                        }
                      </style>';
            }
        }
    ?>
</body>
</html>