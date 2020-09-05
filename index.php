<?php



//*********************** Главная страница *************************
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if ($_GET) {
    setcookie("utm_source", $_GET['utm_source'], time() + $period_cookie);
    setcookie("utm_medium", $_GET['utm_medium'], time() + $period_cookie);
    setcookie("utm_term", $_GET['utm_term'], time() + $period_cookie);
    setcookie("utm_content", $_GET['utm_content'], time() + $period_cookie);
    setcookie("utm_campaign", $_GET['utm_campaign'], time() + $period_cookie);
}

if (!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];






?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta property="og:image" content="img/products/sweet-words/1.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Магазин Румбоксов</title>
    <meta content="Развивающий и увлекательный конструктор для детей и взрослых - Roombox" name=description>
    <meta content="Магазин Румбоксов" property=og:title>
    <meta content="Магазин Румбоксов" property=og:site_name>
    <meta content="Развивающий и увлекательный конструктор для детей и взрослых - Roombox" property=og:description>
    <link rel="stylesheet" href="fonts/HouschkaRoundedAlt/stylesheet.css" />
    <link rel="stylesheet" href="fonts/TTNorms/stylesheet.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta property="og:image" content="img/products/sweet-words/1.jpg" />
    <meta property=”og:image” content=”img/products/sweet-words/1.jpg” />
    <!-- для Telegram & WhatsApp -->
    <meta property="og:site_name" content="hobby-roombox.com.ua">
    <meta property="og:url" content="hobby-roombox.com.ua">


    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NTXX9LZ');
    </script>
    <!-- End Google Tag Manager -->
    <meta property="og:image" content="img/products/sweet-words/1.jpg" />
    <link rel=»alternate» hreflang=»uk» href=»https://hobby-roombox.com.ua/ua/ «>

    <link rel=»alternate» hreflang=»ru» href=»https://hobby-roombox.com.ua/index/«> </head> <body class="container-max">
    <div class="header-wrapper" id="top-top">
        <header class="header container">
            <a href="">
                <img src="/img/header/logo.svg" width="150">
            </a>
            <p class="header-text">Инновационный и развивающий <br> хобби-конструктор</p>
            <div class="header-time-work">
                <p class="header-time-work__title">Звоните, мы работаем:</p>
                <p class="header-time-work__text">пн-вс 9:00-20:00</p>
            </div>
            <ul class="header-links">
                <li>
                    <a href="viber://chat?number=+380950031501" class="header-links__item viber">
                        viber
                        <img src="/img/header/header-viber.svg" alt="viber">
                    </a>
                </li>


                <li>
                    <a href="tg://resolve?domain=Hobby_Roombox" class="header-links__item telegram">
                        telegram
                        <img src="/img/header/header-telegram.svg" alt="telegram">
                    </a>
                </li>
                <li>

                <li>


                    <a href="tel:+380930552456" class="header-links__item call">
                        call
                        <img src="/img/header/header-call.svg" alt="call">
                    </a>
                </li>
            </ul>
            <ul class="better-phone">
                <li>
                    <a href="tel:+380930552456" class="header-phone__item">+38 (093) 055-24-56</a>
                </li>
                <li>
                    <a href="tel:+380950042501" class="header-phone__item">+38 (095) 004-25-01 </a>
                </li>
                <!-- <li> 
                    <a href="tel:+380950031501" class="header-phone__item">+38 (095) 004-25-01</a>
                </li>
            -->
                <!-- <ul class="better-links"> 
                        <li>
                            <a href="/ua" class="betterr-links__item telegramm">
                                <img src="/img/header/ukr.svg" alt="telegram">
                            </a>

                        </li>

                        <li> 
                    <a href="/index.php" class="better-links__item telegrammm" >
                        <img src="/img/header/slash.svg" alt="telegram">
                    </a>
                    
                </li>
            
                        <li>
                            <a href="rus" class="better-links__item telegramm">
                                <img src="/img/header/rus.svg" alt="telegram">
                            </a>

                        </li>

                    </ul> -->
        </header>
    </div>
    <section class="main-wrapper">
        <div class="main container">
            <p class="main-text">Построй свою мечту</p>
            <h1 class="main-title"> Развивающий и увлекательный конструктор
                для детей и взрослых</h1>
            <div class="main-slide-container">
                <div class="main-slide">

                    <div class="main-slide__item">
                        <div class="discount">
                            <p class="discount-text">скидки</p>
                            <p class="discount-тumber">42%</p>
                            <p class="discount-item">до</p>
                        </div>
                        <img src="/img/main-slider/first-meet.png" alt="">
                    </div>
                    <div class="main-slide__item">
                        <div class="discount">
                            <p class="discount-text">скидки</p>
                            <p class="discount-тumber">42%</p>
                            <p class="discount-item">до</p>
                        </div>
                        <img src="/img/main-slider/give-you-happiness.png" alt="">
                    </div>
                    <div class="main-slide__item">
                        <div class="discount">
                            <p class="discount-text">скидки</p>
                            <p class="discount-тumber">42%</p>
                            <p class="discount-item">до</p>
                        </div>
                        <img src="/img/main-slider/legend-of-the-blue-sea.png" alt="">
                    </div>
                    <div class="main-slide__item">
                        <div class="discount">
                            <p class="discount-text">скидки</p>
                            <p class="discount-тumber">42%</p>
                            <p class="discount-item">до</p>
                        </div>
                        <img src="/img/main-slider/modern-style.png" alt="">
                    </div>

                    <div class="main-slide__item">
                        <div class="discount">
                            <p class="discount-text">скидки</p>
                            <p class="discount-тumber">42%</p>
                            <p class="discount-item">до</p>
                        </div>
                        <img src="/img/main-slider/sweet-words.png" alt="">
                    </div>
                </div>
            </div>







            <ul class="main-list">
                <li class="main-list__text">
                    Увлекательный для всей семьи
                </li>
                <li class="main-list__text">
                    Развивает фантазию и творческие способности
                </li>
            </ul>
            <div class="main-container">
                <div class="main-container__btn">
                    <a href="#slider-wrapper" class="main-btn anchors">Выбрать румбокс</a>
                </div>

                <div class="main-price">
                    <p class="main-price__text">Цены:</p>
                    <p class="main-price__price">от 679 грн</p>
                </div>
            </div>



            <div class="timer-wrapper">

                <h1 class="tiimer-title">
                    Скидка 10% <br>при заказе<br> от 2ух конструкторов</h1>



                &nbsp;
                <p class="timer-title">предложение действует еще:</p>
                <div id="countdown" class="countdown timer">
                    <div class="countdown-number">
                        <span class="days countdown-time"></span>
                        <span class="countdown-text">Дни</span>
                    </div>
                    <div class="countdown-number">
                        <span class="hours countdown-time"></span>
                        <span class="countdown-text">Часы</span>
                    </div>
                    <div class="countdown-number">
                        <span class="minutes countdown-time"></span>
                        <span class="countdown-text">Мин</span>
                    </div>
                    <div class="countdown-number">
                        <span class="seconds countdown-time"></span>
                        <span class="countdown-text">Сек</span>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="video-wpapper">
        <div class="video container">
            <h2 class="video-title">Румбокс - это:</h2>
            <div class="video-block">

                <div class="video-link">
                    <a href="#" class="js-first-video" data-links="https://youtube.com/embed/dV9_j52jbIo">Посмотреть
                        видео</a>
                    <div class="video-hend"></div>
                </div>
                <p class="video-block__text">Посмотрите короткий <br> видео-обзор</p>

            </div>



    </section>

    <section class="slider-wrapper container">
        <h2 class="slider-wrapper__title" id="slider-wrapper">Выберите Румбокс мечты для вашего ребенка, друзей или
            на подарок</h2>

        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="news-product">новинка</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="simple-life-slider">
                        <img src="/img/products/simple-life/1.jpg" alt="">
                        <img src="/img/products/simple-life/2.jpg" alt="">
                        <img src="/img/products/simple-life/3.jpg" alt="">
                        <img src="/img/products/simple-life/4.jpg" alt="">
                        <img src="/img/products/simple-life/5.jpg" alt="">
                        <img src="/img/products/simple-life/6.jpg" alt="">
                        <img src="/img/products/simple-life/7.jpg" alt="">


                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Одноэтажный румбокс <span>"Simple life"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">28*19*11</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">4/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">22+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">русская</div>
                    </li>

                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">10+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на русском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1450</p>
                            <p>1049 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="40|simple life" data-price="1049"
                        data-name="Одноэтажный дом: simple life" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="top-sales">топ <br> продаж</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="because-of-you-slider">
                        <img src="/img/products/because-of-you/1.jpg" alt="">
                        <img src="/img/products/because-of-you/2.jpg" alt="">
                        <img src="/img/products/because-of-you/3.jpg" alt="">
                        <img src="/img/products/because-of-you/4.JPG" alt="">
                        <img src="/img/products/because-of-you/5.jpg" alt="">
                        <img src="/img/products/because-of-you/6.jpg" alt="">
                        <img src="/img/products/because-of-you/7.jpg" alt="">
                        <img src="/img/products/because-of-you/8.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Одноэтажный румбокс <span>"Because of you"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">17*14*12</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">3/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">18+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">8+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                                <li>Защитный купол от пыли</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1100 </p>
                            <p>699 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="14|because of you " data-yd="Because-of-you"
                        data-price="699" data-name="Одноэтажный дом: BECAUSE OF YOU" class="open-popup btn">заказать
                        со
                        скидкой </a>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="news-product">новинка</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="family-nap-slider">
                        <img src="/img/products/family-nap/1.jpg" alt="">
                        <img src="/img/products/family-nap/2.jpg" alt="">
                        <img src="/img/products/family-nap/3.jpg" alt="">
                        <img src="/img/products/family-nap/4.jpg" alt="">
                        <img src="/img/products/family-nap/5.jpg" alt="">
                        <img src="/img/products/family-nap/6.jpg" alt="">
                        <img src="/img/products/family-nap/7.jpg" alt="">
                        <img src="/img/products/family-nap/8.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Одноэтажный румбокс <span>"Family nap"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">20*14*11</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">3/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">18+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">русская</div>
                    </li>

                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">8+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на русском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1100</p>
                            <p>699 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="41|family nap" data-price="699"
                        data-name="Одноэтажный дом: Family nap" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>



        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="coffee-time-slider">
                        <img src="/img/products/coffee-time/1.jpg" alt="">
                        <img src="/img/products/coffee-time/2.jpg" alt="">
                        <img src="/img/products/coffee-time/3.jpg" alt="">
                        <img src="/img/products/coffee-time/4.jpg" alt="">
                        <img src="/img/products/coffee-time/5.jpg" alt="">
                        <img src="/img/products/coffee-time/6.jpg" alt="">
                        <img src="/img/products/coffee-time/7.jpg" alt="">
                        <img src="/img/products/coffee-time/8.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Одноэтажный румбокс <span>"Coffee time"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">20*16*16</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">Материал: дерево, текстиль, бумага, пластик, LED лампы
                        </div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">3/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">8+</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">18+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1050 </p>
                            <p>679 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="15|coffe time" data-price="679"
                        data-name="Одноэтажный дом: COFFEE TIME" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="top-sales">топ <br> продаж</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="chocolate-shop-slider">
                        <img src="/img/products/chocolate-shop/1.jpg" alt="">
                        <img src="/img/products/chocolate-shop/2.jpg" alt="">
                        <img src="/img/products/chocolate-shop/3.jpg" alt="">
                        <img src="/img/products/chocolate-shop/4.jpg" alt="">
                        <img src="/img/products/chocolate-shop/5.jpg" alt="">
                        <img src="/img/products/chocolate-shop/6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Одноэтажный румбокс <span>"Chocolate shop"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">20*16*16</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">3/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">18+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">украинская</div>
                    </li>
                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">8+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1050 </p>
                            <p>679 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="24|chocolate shop" data-price="679"
                        data-name="Одноэтажный дом: CHOCOLATE SHOP" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="top-sales">топ <br> продаж</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="pink-loft-slider">
                        <img src="/img/products/pink-loft/1.jpg" alt="">
                        <img src="/img/products/pink-loft/2.jpg" alt="">
                        <img src="/img/products/pink-loft/3.jpg" alt="">
                        <img src="/img/products/pink-loft/4.jpg" alt="">
                        <img src="/img/products/pink-loft/5.jpg" alt="">
                        <img src="/img/products/pink-loft/6.jpg" alt="">
                        <img src="/img/products/pink-loft/7.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Двухэтажный румбокс <span>"Pink loft"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">19*15*13 </div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">3/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">18+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">украинская</div>
                    </li>
                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">8+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1200 </p>
                            <p>729 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="16|pink loft" data-price="729"
                        data-name="Одноэтажный дом: PINK LOFT" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="blue-coast-slider">
                        <img src="/img/products/blue-coast/1.jpg" alt="">
                        <img src="/img/products/blue-coast/2.jpg" alt="">
                        <img src="/img/products/blue-coast/3.jpg" alt="">
                        <img src="/img/products/blue-coast/4.jpg" alt="">
                        <img src="/img/products/blue-coast/5.jpg" alt="">
                        <img src="/img/products/blue-coast/6.jpg" alt="">
                        <img src="/img/products/blue-coast/7.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Двухэтажный румбокс <span>"Blue coast"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">19*15*13 </div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">3/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">18+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">украинская</div>
                    </li>
                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">8+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1200 </p>
                            <p>729 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="17|blue coast" data-price="729"
                        data-name="Одноэтажный дом: BLUE COAST" class="open-popup btn">заказать со
                        скидкой</a>

                </div>
            </div>
        </div>





        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="coffee-house-slider">
                        <img src="/img/products/coffee-house/1.jpg" alt="">
                        <img src="/img/products/coffee-house/2.jpg" alt="">
                        <img src="/img/products/coffee-house/3.jpg" alt="">
                        <img src="/img/products/coffee-house/4.jpg" alt="">
                        <img src="/img/products/coffee-house/5.jpg" alt="">
                        <img src="/img/products/coffee-house/6.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Двухэтажный румбокс <span>"Coffee house"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">20*20*18</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">3/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">22+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">украинская</div>
                    </li>
                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">10+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1450 </p>
                            <p>999 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="38|coffee house" data-price=" 999"
                        data-name="Одноэтажный дом: COFFEE HOUSE" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="top-sales">топ <br> продаж</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="modern-style-slider">
                        <img src="/img/products/modern-styles/1.jpg" alt="">
                        <img src="/img/products/modern-styles/2.jpg" alt="">
                        <img src="/img/products/modern-styles/3.jpg" alt="">
                        <img src="/img/products/modern-styles/4.jpg" alt="">
                        <img src="/img/products/modern-styles/5.jpg" alt="">
                        <img src="/img/products/modern-styles/6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Двухэтажный румбокс <span>"Modern style"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">26*20*17</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">4/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">24+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">украинская</div>
                    </li>
                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">10+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1800</p>
                            <p>1249 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="18|modern style" data-price="1249"
                        data-name="Одноэтажный дом: MODERN STYLE" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="news-product">новинка</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="give-you-happiness-slider">
                        <img src="/img/products/give-you-happiness/1.jpg" alt="">
                        <img src="/img/products/give-you-happiness/2.JPG" alt="">
                        <img src="/img/products/give-you-happiness/3.jpg" alt="">
                        <img src="/img/products/give-you-happiness/4.jpg" alt="">
                        <img src="/img/products/give-you-happiness/5.jpg" alt="">
                        <img src="/img/products/give-you-happiness/6.jpg" alt="">
                        <img src="/img/products/give-you-happiness/7.jpg" alt="">
                        <img src="/img/products/give-you-happiness/8.jpg" alt="">

                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Двухэтажный румбокс <span>"Give you happiness"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">26*20*17</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">4/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">24+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">украинская</div>
                    </li>

                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">10+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>1800</p>
                            <p>1249 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="19|give you happiness" data-price="1249"
                        data-name="Одноэтажный дом: GIVE YOU HAPPINESS" class="open-popup btn">заказать со
                        скидкой</a>
                </div>
            </div>
        </div>

        <!-- <div class="product"> 
                <div class="product-img">
                    <div class="slider-container">
                        <div class="prev"></div>
                        <div class="next"></div>
                        <div class="product-slider" id="annas-pink-melody-slider">
                            <img src="/img/products/annas-pink-melody/1.jpg" alt="">
                            <img src="/img/products/annas-pink-melody/2.jpg" alt="">
                            <img src="/img/products/annas-pink-melody/3.jpg" alt="">
                            <img src="/img/products/annas-pink-melody/4.jpg" alt="">
                            <img src="/img/products/annas-pink-melody/5.jpg" alt="">

                            <img src="/img/products/annas-pink-melody/7.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="product-content">
                    <h3 class="product-content__title">Двухэтажный румбокс <span>"ANNA'S PINK MELODY"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Размеры,см:</div>
                            <div class="product-list__included">26*20*17</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материал:</div>
                            <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                        </li>
                        <li>
                            <div class="product-list__name">Сложность</div>
                            <div class="product-list__included">4/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Время сборки:</div>
                            <div class="product-list__included">22+ часов</div>
                        </li>
                        <li>
                            <div class="product-list__name">Инструкция:</div>
                            <div class="product-list__included">украинская</div>
                        </li>

                        <li>
                            <div class="product-list__name">Возраст:</div>
                            <div class="product-list__included">10+</div>
                        </li>
                        <li>
                            <div class="product-list__name">В комплекте:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Инструкция сборки на украинском</li>
                                    <li>Все необходимые инструменты</li>
                                    <li>Освещение: батарейка, провод и выключатель</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Цена сегодня:</p>
                            <div class="block">
                                <p>1350</p>
                                <p>949 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="20|annas pink melody" data-price="949" data-name="Одноэтажный дом: ANNA'S PINK MELODY" class="open-popup btn">заказать со
                            скидкой</a>
                    </div>
                </div>
            </div>
-->
        <!-- first meet -->
        <!-- <div class="product">  
            <div class="product-img">
                <div class="slider-container">
                    <div class="news-product">новинка</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="first-meet-slider">
                        <img src="/img/products/first-meet/1.JPG" alt="">
                        <img src="/img/products/first-meet/2.JPG" alt="">
                        <img src="/img/products/first-meet/3.JPG" alt="">
                        <img src="/img/products/first-meet/4.JPG" alt="">
                        <img src="/img/products/first-meet/5.JPG" alt="">
                        <img src="/img/products/first-meet/6.JPG" alt="">
                        <img src="/img/products/first-meet/7.JPG" alt="">
                        <img src="/img/products/first-meet/8.JPG" alt="">
                        <img src="/img/products/first-meet/9.JPG" alt="">
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Двухэтажный румбокс <span>"first meet"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">23*18*19</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">5/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">26+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">украинская</div>
                    </li>

                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">12+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>2300</p>
                            <p>1549 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="39|First meet" data-price="1549" data-name="Одноэтажный дом: first meet" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>
-->

        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="news-product">новинка</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="pink-cafe-slider">
                        <img src="/img/products/pink-cafe/1.jpg" alt="">
                        <img src="/img/products/pink-cafe/2.jpg" alt="">
                        <img src="/img/products/pink-cafe/3.jpg" alt="">
                        <img src="/img/products/pink-cafe/4.jpg" alt="">
                        <img src="/img/products/pink-cafe/5.jpg" alt="">
                        <img src="/img/products/pink-cafe/6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Двухэтажный румбокс <span>«Pink cafe» </span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">31*21*20</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">5/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">36+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">русская</div>
                    </li>

                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">14+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на русском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>2400</p>
                            <p>1649 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="42|pink cafe" data-price="1649"
                        data-name="Одноэтажный дом: pink cafe" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>

        <div class="product">
            <div class="product-img">
                <div class="slider-container">

                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="legend-of-the-blue-sea-slider">
                        <img src="/img/products/legend-of-the-blue-sea/1.jpg" alt="">
                        <img src="/img/products/legend-of-the-blue-sea/2.jpg" alt="">
                        <img src="/img/products/legend-of-the-blue-sea/3.jpg" alt="">
                        <img src="/img/products/legend-of-the-blue-sea/4.jpg" alt="">
                        <img src="/img/products/legend-of-the-blue-sea/5.jpg" alt="">
                        <img src="/img/products/legend-of-the-blue-sea/6.jpg" alt="">
                        <img src="/img/products/legend-of-the-blue-sea/7.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Двухэтажный румбокс <span>"Legend of the blue sea"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">35*22*22</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">5/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">36+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">украинская</div>
                    </li>

                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">14+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>2350</p>
                            <p>1599 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="28|legend of the blue sea" data-price="1599"
                        data-name="Одноэтажный дом: LEGEND OF THE BLUE SEA" class="open-popup btn">заказать со
                        скидкой</a>
                </div>
            </div>
        </div>
        <div class="product">
            <div class="product-img">
                <div class="slider-container">
                    <div class="top-sales">топ <br> продаж</div>
                    <div class="prev"></div>
                    <div class="next"></div>
                    <div class="product-slider" id="sweet-words-slider">
                        <img src="/img/products/sweet-words/1.jpg" alt="">
                        <img src="/img/products/sweet-words/2.jpg" alt="">
                        <img src="/img/products/sweet-words/3.JPG" alt="">
                        <img src="/img/products/sweet-words/4.JPG" alt="">
                        <img src="/img/products/sweet-words/5.JPG" alt="">
                        <img src="/img/products/sweet-words/6.JPG" alt="">
                        <img src="/img/products/sweet-words/7.JPG" alt="">

                    </div>
                </div>
            </div>
            <div class="product-content">
                <h3 class="product-content__title">Двухэтажный румбокс <span>"sweet words"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Размеры,см:</div>
                        <div class="product-list__included">32*22*22</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материал:</div>
                        <div class="product-list__included">дерево, текстиль, бумага, пластик, LED лампы</div>
                    </li>
                    <li>
                        <div class="product-list__name">Сложность</div>
                        <div class="product-list__included">5/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Время сборки:</div>
                        <div class="product-list__included">36+ часов</div>
                    </li>
                    <li>
                        <div class="product-list__name">Инструкция:</div>
                        <div class="product-list__included">украинская</div>
                    </li>

                    <li>
                        <div class="product-list__name">Возраст:</div>
                        <div class="product-list__included">14+</div>
                    </li>
                    <li>
                        <div class="product-list__name">В комплекте:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Инструкция сборки на украинском</li>
                                <li>Все необходимые инструменты</li>
                                <li>Освещение: батарейка, провод и выключатель</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Цена сегодня:</p>
                        <div class="block">
                            <p>2450</p>
                            <p>1649 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="21|sweet words" data-price="1649"
                        data-name="Одноэтажный дом: SWEET WORDS" class="open-popup btn">заказать со скидкой</a>
                </div>
            </div>
        </div>

        <section class="reasons-wrapper">
            <h2 class="reasons-title">3 причины, почему вы будете в восторге от сборки Румбокса </h2>
            <ul class="reasons-list container">
                <li>
                    <div class="reasons-list__icon reasons-list__first">
                        <img src="" data-leazy="/img/reasons/1.png" class="lazy-img" alt="">
                    </div>
                    <h3 class="reasons-list__title">Развитие креативного мышления и мелкой моторики</h3>
                    <p class="reasons-list__text">Сборка румбокса не только увлекательна, но и полезна: развивает
                        пространственное, креативное и творческое мышление, а также фантазию, координацию движений,
                        усидчивость и воображение</p>
                </li>
                <li>
                    <div class="reasons-list__icon reasons-list__second">
                        <img src="" data-leazy="/img/reasons/2.png" class="lazy-img" alt="">
                    </div>
                    <h3 class="reasons-list__title">Интересное и полезное времяпровождение всей семьей</h3>
                    <p class="reasons-list__text">Вам всегда будет чем заняться с вашим ребенком. Румбокс сплотит
                        всю
                        семью
                        и вы весело проведёте время вместе</p>


                </li>
                <li>
                    <div class="reasons-list__icon reasons-list__three">
                        <img src="" data-leazy="/img/reasons/3.png" class="lazy-img" alt="">
                    </div>
                    <h3 class="reasons-list__title">Потрясающая детализация</h3>
                    <p class="reasons-list__text">Все детали интерьера как настоящие и поражают воображение. Каждый
                        румбокс
                        максимально реалистичен и отражает все детали быта, даже самые мелкие</p>
                </li>
            </ul>
        </section>


    </section>
    <section class="revievs-wrapper">
        <div class="revievs contaiiner">
            <h2 class="revievs-title">Более 1470 довольных клиентов уже приобрели Румбокс:</h2>
            <section>
                <div class="video container">
                    <div class="viideo-block">
                        <div class="video-link">
                            <a href="#" class="js-second-video"
                                data-links="https://youtube.com/embed/eZbGxh1B9_U">Посмотреть
                                видео</a>
                        </div>
                        <p class="video-block__text">Посмотрите видео<br> отзывы наших клиентов</p>
                    </div>

            </section>
        </div>
    </section>

    <section class="form-wrapper">


        <div class="form-block container">



            <p class="form-block__des">ДЛЯ ЗАКАЗА - ОСТАВЬТЕ ЗАЯВКУ И<BR> НАШ МЕНЕДЖЕР СВЯЖЕТСЯ С ВАМИ В БЛИЖАЙШЕЕ
                ВРЕМЯ</p>

            <div class="trimer-wrapper">

                <h1 class="triimer-title">
                    Скидка 10% <br>при заказе<br> от 2ух конструкторов</h1>



                &nbsp;
                <p class="trimer-title">предложение действует еще:</p>
                <div id="clock2" class="clock2 tiimer">
                    <div class="clock2-number">
                        <span class="days clock2-time"></span>
                        <span class="clock2-text">Дни</span>
                    </div>
                    <div class="clock2-number">
                        <span class="hours clock2-time"></span>
                        <span class="clock2-text">Часы</span>
                    </div>
                    <div class="clock2-number">
                        <span class="minutes clock2-time"></span>
                        <span class="clock2-text">Мин</span>
                    </div>
                    <div class="clock2-number">
                        <span class="seconds clock2-time"></span>
                        <span class="clock2-text">Сек</span>
                    </div>
                </div>

            </div>

            <form action="/" method="post" class="form">
                <input type="hidden" name="utm_source"
                    value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>">
                <input type="hidden" name="utm_medium"
                    value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>">
                <input type="hidden" name="utm_campaign"
                    value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''; ?>">
                <input type="hidden" name="utm_content"
                    value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : ''; ?>">
                <input type="hidden" name="utm_term"
                    value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>">
                <input type="text" name="name" placeholder="Ваше имя:" class="input" required>
                <input type="tel" name="phone" id="phone-2" placeholder="Ваш телефон:" class="input" required>
                <label class="select">
                    <select name="order" class="input" required>
                        <option value="">Выберите набор:</option>
                        <option value="40|sIMPLE LIFE 1049">"SIMPLE LIFE" - 1049 грн</option>
                        <option value="14|bECAUSE OF YOU 699">"BECAUSE OF YOU" - 699 грн</option>
                        <option value="41|fAMILY NAP 699">"FAMILY NAP" - 699 грн</option>
                        <option value="15|cOFFEE TIME 679">"COFFEE TIME" - 679 грн</option>
                        <option value="24|cHOCOLATE SHOP 679">"CHOCOLATE SHOP" - 679 грн</option>
                        <option value="16|pINK LOFT 729">"PINK LOFT" - 729 грн</option>

                        <option value="17|bLUE COAST 729">"BLUE COAST" - 729 грн</option>
                        <option value="38|coffee house 999">"COFFEE HOUSE" - 999 грн</option>
                        <option value="18|mODERN STYLE 1249">"MODERN STYLE" - 1249 грн</option>
                        <option value="19|gIVE YOU 1249">"GIVE YOU HAPPINESS" - 1249 грн
                        </option>
                        <!-- <option value="20|aNNA'S PINK MELODY 949">"ANNA'S PINK MELODY" - 949 грн 
                            </option> -->
                        <!-- <option value="39|fIRST MEET 1549">"FIRST MEET" - 1549 грн</option> -->
                        <option value="42|pINK CAFE 1649">"PINK CAFE" - 1649 грн</option>
                        <option value="28|lEGEND OF THE BLUE SEA 1599">"LEGEND OF THE BLUE SEA" - 1599
                            грн</option>
                        <option value="21|sWEET WORDS 1649">"SWEET WORDS" - 1649 грн</option>
                    </select>
                </label>
                <button type="submit" class="form-btn">заказать со скидкой</button>
            </form>
        </div>
    </section>
    <footer class="footer container">
        <div class="footer-block">
            <div class="logotip">
                <a href="#top-top">
                    <img src="/img/header/logo.svg" width="150">
                </a>
            </div>
            <li>
                <a href="tel:+380930552456" class="footer-phone__item">+38 (093) 055-24-56 </a>
            </li>
            <li>
                <a href="tel:+380950042501" class="footer-phone__item">+38 (095) 004-25-01 </a>
            </li>
            </ul>
            <div class="footer-contacts">
                <a href="mailto:official.dream.houses@gmail.com">official.dream.houses@gmail.com</a>
                <p>пн-вс 9:00-20:00</p>
            </div>
            <ul class="footer-links">
                <li>
                    <a href="https://www.facebook.com/hobby.dream.houses/"
                        class="footer-links__item faceboock">faceboook</a>
                </li>
                <li>
                    <a href="https://www.instagram.com/hobby.roombox/"
                        class="footer-links__item instagram">instagram</a>
                </li>
            </ul>
        </div>
        <ul class="footer-documents">
            <li>
                <a href="documents/privacy-policy.pdf" class="footer-documents__item">Политика конфиденциальнсти</a>
            </li>
            <li>
                <a href="documents/public-offer-agreement.pdf" class="footer-documents__item">Публичная оферта</a>
            </li>
            <li>
                <a href="documents/return-policy.pdf" class="footer-documents__item">Возврат</a>
            </li>
        </ul>
    </footer>

    <div class="popup-wrapper" data-pupap="close">
        <div class="popup">
            <span class="close-popup" data-pupap="close">
                <div data-pupap="close"></div>
            </span>
            <h2 class="popup-title">Заказать румбокс</h2>
            <h3 class="popup-name"></h3>
            <p class="popup-text">Заполните форму и нажмите кнопку «Заказать», мы с Вами свяжемся в ближайшее время
            </p>

            <form action="/" method="post" id="" class="popap-form js-popap-form">
                <input type="hidden" name="frId" value="because-of-you">
                <input type="hidden" name="price" value="0">
                <input type="hidden" name="utm_source"
                    value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>">
                <input type="hidden" name="utm_medium"
                    value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>">
                <input type="hidden" name="utm_campaign"
                    value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''; ?>">
                <input type="hidden" name="utm_content"
                    value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : ''; ?>">
                <input type="hidden" name="utm_term"
                    value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>">
                <input type="text" name="name" placeholder="Введите имя и фамилию" class="popup-input" required>
                <input type="tel" name="phone" id="phone-1" placeholder="Введите Телефон" class="popup-input" required>
                <button type="submit" class="popup-btn">заказать</button>
            </form>

        </div>
    </div>

    <div class="modal-overlay js-modal-overlay" data-close="close"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="js/jqvery.js"></script>
    <script src="js/jquery.inputmask.min.js"></script>
    <script src="js/siema.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/lazy-load.js"></script>
    <script src="js/main.js"></script>
    <script src="js/popup.js"></script>
    <script src="js/anchors.js"></script>
    <script src="js/timer.js"></script>
    <script src="js/send.js"></script>
    <script src="js/clock2.js"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTXX9LZ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->









    </body>

</html>