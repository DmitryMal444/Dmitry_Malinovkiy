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
            <li class="nav__link"><a class="nav__item" href="index.php" >На главную</a></li>
            <li class="nav__link"><a class="nav__item" href="tableOfM.php" >Таблица</a></li>
            <li class="nav__link"><a class="nav__item" href="homework.php" >Домашка</a></li>
            <li class="nav__link"><a class="nav__item" href="task.php" >Задачи</a></li>
            <li class="nav__link"><a class="nav__item" href="authorization.php" >ВОЙТИ</a></li>
            <form action="" class="nav__link">
                <?php
                    if (session_id() == $_COOKIE['PHPSESSID']){
                        foreach ($_COOKIE as $color){
                            echo '<style> body{background-color:'.$color.'; background-image: none;}</style>';
                        }
                    }
                ?>
                <label for="co">Цвет</label>
                <input type="color" list="colors" id="co" name="color" />
                <datalist id="colors">
                    <option value="#aa4235" >
                    <option value="#008000" >
                    <option value="#ff0000" >
                </datalist>
                <input type="submit">
            </form>
        </ul>

    </nav>
</header>
