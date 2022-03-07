<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="img/icons/profile_user_account_icon_190938.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header(чердак) -->
    <div class="header">

        <h1 class="header-title">Дмитрий Ложкин<?php echo('hello') ?></h1>

        <p class="header-subtitle">фрилансер, веб-разработчик, создатель сайтов</p>

        <div class="header-arrow">
            <a href="#portfolio">
                <img src="./img/header/arrow.png" alt="arrow">
            </a>
        </div>

    </div>
    <!-- portfolio(портфолио) -->
    <div id="portfolio" class="portfolio">

        <div class="container">

            <h2 class="portfolio-header">Портфолио</h2>
            <!-- portfolio-cards-wrapper -->
            <div class="portfolio-cards-wrapper">

                <!-- card -->
                <div class="card">
                    <a href=""><img class="card-img" src="./img/icons/1.jpg" alt="многостраничный сайт"></a>
                    <h3 class="card-title">Многостраничный сайт</h3>
                    <p>Верстка многостраничного сайта</p>
                </div>
                <!-- //card -->
                <!-- card -->
                <div class="card">
                    <a href="https://dmitry1ie.github.io/computer_lesson/"><img class="card-img" src="./img/icons/2.PNG"
                            alt="сайт компании"></a>
                    <h3 class="card-title">Сайт комапнии</h3>
                    <p>Верстка многостраничного сайта</p>
                </div>
                <!-- //card -->
                <!-- card -->
                <div class="card">
                    <a href="https://dmitry1ie.github.io/IT-Studio/"><img class="card-img" src="./img/icons/3.PNG"
                            alt="личный блог"></a>
                    <h3 class="card-title">Сайт комапнии</h3>
                    <p>Верстка многостраничного сайта</p>
                </div>
                <!-- //card -->
                <!-- card -->
                <div class="card">
                    <a href="https://dmitry1ie.github.io/BonBon/"><img class="card-img" src="./img/icons/4.PNG"
                            alt="интернет магазин"></a>
                    <h3 class="card-title">Интернет магазин</h3>
                    <p>Верстка многостраничного сайта</p>
                </div>
                <!-- //card -->

            </div>
            <!-- //portfolio-cards-wrapper -->
        </div>

    </div>
    <!-- footer(подвал) -->
    <div class="footer">

        <div class="container">
            <div class="footer-row">
                <div class="footer-copyright footer-col">
                    <div class="footer-copyright-name">Дмитрий Ложкин</div>
                    <p>HTML верстка и разработка сайтов</p>
                </div>
                <!-- footer-icons -->
                <div class="footer-icons footer-col">
                    <p>Мои профили в социальных сетях:</p>
                    <div class="footer-icons-row">
                        <a href="https://vk.com/dmitry1ie">
                            <img src="./img/icons/Vector-f-1.svg" alt="">
                        </a>
                        <a href="https://www.instagram.com/dmitry1ie/">
                            <img src="./img/icons/instagram.svg" alt="">
                        </a>
                        <a href="https://github.com/DMITRY1IE">
                            <img src="./img/icons/github_logo_icon_147285.svg" alt="">
                        </a>
                    </div>
                </div>
                <!-- //footer-icons -->
                <div class="footer-contacts footer-col">
                    <a href="https://vk.com/dmitry1ie" class="footer-button">Связаться Вконтакте</a>
                    <p>Напишите мне, чтобы узнать стоимость верстки вашего проекта</p>
                </div>

            </div>

        </div>

    </div>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>