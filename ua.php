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
    <meta property=”og:image” content=”img/products/sweet-words/1.jpg” />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дом мечты для вас и вашего ребенка</title>
    <meta content="Развивающий и увлекательный конструктор для детей и взрослых - Roombox" name=description>
    <meta content="Дом мечты для вас и вашего ребенка" property=og:title>
    <meta content="Развивающий и увлекательный конструктор для детей и взрослых - Roombox" property=og:description>
    <link rel="stylesheet" href="fonts/HouschkaRoundedAlt/stylesheet.css" />
    <link rel="stylesheet" href="fonts/TTNorms/stylesheet.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <meta property="og:image" content="img/products/sweet-words/1.jpg" />
    <meta property=”og:image” content=”img/products/sweet-words/1.jpg” />
    <!– для Telegram & WhatsApp –>
        <meta property="og:site_name" content="img/products/sweet-words/1.jpg">
        <meta property="og:url" content="img/products/sweet-words/1.jpg">


        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
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
        <meta property=”og:image” content=”img/products/sweet-words/1.jpg” />

        <link rel=»alternate» hreflang=»uk» href=»https://hobby-roombox.com.ua/ua/ «>

        <link rel=»alternate» hreflang=»ru» href=»https://hobby-roombox.com.ua/index/«> </head> <body class="container-max">
        <div class="header-wrapper">
            <header class="header container">
                <a href="">
                    <img src="/img/header/logo.svg" width="150">
                </a>
                <p class="header-text">Інноваційний та розвиваючий <br> хобі-конструктор</p>
                <div class="header-time-work">
                    <p class="header-time-work__title">Телефонуйте, ми працюємо:</p>
                    <p class="header-time-work__text">пн-нд 9:00-20:00</p>
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
                    <!-- <li> 
                    <a href="tel:+380950031501" class="header-phone__item">+38 (095) 004-25-01</a>
                </li>
            -->
                    <ul class="better-links">
                        <li>
                            <a href="/ua" class="betterr-links__item telegramm">
                                <img src="/img/header/ukr.svg" alt="telegram">
                            </a>

                        </li>

                        <!-- <li> 
                    <a href="/index.php" class="better-links__item telegrammm" >
                        <img src="/img/header/slash.svg" alt="telegram">
                    </a>
                    
                </li>
            -->
                        <li>
                            <a href="rus" class="better-links__item telegramm">
                                <img src="/img/header/rus.svg" alt="telegram">
                            </a>

                        </li>

                    </ul>
            </header>
        </div>
        <section class="main-wrapper">
            <div class="main container">
                <p class="main-text">
                    Побудуй свою мрію</p>
                <h1 class="main-title">Розвиваючий і захоплюючій конструктор для дітей та дорослих</h1>
                <div class="main-slide-container">
                    <div class="main-slide">

                        <div class="main-slide__item">
                            <div class="discount">
                                <p class="discount-text">Знижки</p>
                                <p class="discount-тumber">42%</p>
                                <p class="discount-item">до</p>
                            </div>
                            <img src="/img/main-slider/first-meet.png" alt="">
                        </div>
                        <div class="main-slide__item">
                            <div class="discount">
                                <p class="discount-text">Знижки</p>
                                <p class="discount-тumber">42%</p>
                                <p class="discount-item">до</p>
                            </div>
                            <img src="/img/main-slider/give-you-happiness.png" alt="">
                        </div>
                        <div class="main-slide__item">
                            <div class="discount">
                                <p class="discount-text">Знижки</p>
                                <p class="discount-тumber">42%</p>
                                <p class="discount-item">до</p>
                            </div>
                            <img src="/img/main-slider/legend-of-the-blue-sea.png" alt="">
                        </div>
                        <div class="main-slide__item">
                            <div class="discount">
                                <p class="discount-text">Знижки</p>
                                <p class="discount-тumber">42%</p>
                                <p class="discount-item">до</p>
                            </div>
                            <img src="/img/main-slider/modern-style.png" alt="">
                        </div>

                        <div class="main-slide__item">
                            <div class="discount">
                                <p class="discount-text">Знижки</p>
                                <p class="discount-тumber">42%</p>
                                <p class="discount-item">до</p>
                            </div>
                            <img src="/img/main-slider/sweet-words.png" alt="">
                        </div>
                    </div>
                </div>







                <ul class="main-list">
                    <li class="main-list__text">
                        Захоплюючий для всієї родини
                    </li>
                    <li class="main-list__text">
                        Розвиває фантазію і творчі здібності
                    </li>
                </ul>
                <div class="main-container">
                    <div class="main-container__btn">
                        <a href="#slider-wrapper" class="main-btn anchors">Обрати румбокс</a>
                    </div>

                    <div class="main-price">
                        <p class="main-price__text">Ціни:</p>
                        <p class="main-price__price">від 679 грн</p>
                    </div>
                </div>




                <div class="timer-wrapper">

                    <h1 class="tiimer-title">
                        Знижка 10% <br>
                        при замовленні<br> від 2-ох конструкторів</h1>
                    &nbsp;
                    <p class="timer-title">ПРОПОЗИЦІЯ ДІЄ ЩЕ:</p>
                    <div id="countdown" class="countdown timer">
                        <div class="countdown-number">
                            <span class="days countdown-time"></span>
                            <span class="countdown-text">
                                Дні</span>
                        </div>
                        <div class="countdown-number">
                            <span class="hours countdown-time"></span>
                            <span class="countdown-text">Години</span>
                        </div>
                        <div class="countdown-number">
                            <span class="minutes countdown-time"></span>
                            <span class="countdown-text">
                                Хвил</span>
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
                <h2 class="video-title">Приголомшлива деталізація</h2>
                <div class="video-block">

                    <div class="video-link">
                        <a href="#" class="js-first-video" data-links="https://www.youtube.com/embed/CsK1PpTXChU">Посмотріти
                            відео</a>
                        <div class="video-hend"></div>
                    </div>
                    <p class="video-block__text">подивіться короткий <br> відео-огляд</p>

                </div>
                <h2 class="set-title">У комплект входить:</h2>
                <ul class="set-list">
                    <li>
                        <div class="set-list__icon">
                            <img src="/img/set/1.png" alt="">
                        </div>
                        <h3 class="set-list__text">Детальна <span> інструкція українською або російською мовою (в залежності
                                від моделі)</span>
                            з описом та послідовністю збірки</h3>
                    </li>
                    <li>
                        <div class="set-list__icon">
                            <img src="/img/set/2.png" alt="">
                        </div>
                        <h3 class="set-list__text">Підстава, стіни, текстильні, дерев'яні та пластикові <span>предмети
                                інтер'єру</span></h3>
                    </li>
                    <li>
                        <div class="set-list__icon">
                            <img src="/img/set/3.png" alt="">
                        </div>
                        <h3 class="set-list__text"><span>Освітлення:</span> LED-світлодіоди, вмикач, провідні матеріали,
                            батарейки</h3>
                    </li>
                    <li>
                        <div class="set-list__icon">
                            <img src="/img/set/4.png" alt="">
                        </div>
                        <h3 class="set-list__text"><span>Все необхідне для збирання:</span> ножиці, лінійка, пінцет,
                            канцелярський ніж, трафарети, клеї</h3>
                    </li>
                </ul>
            </div>
        </section>

        <section class="slider-wrapper container" id="slider-wrapper">
            <h2 class="slider-wrapper__title">Оберіть Румбокс мрії для вашої дитини, друзів або на подарунок</h2>

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
                    <h3 class="product-content__title">Одноповерховий румбокс <span>"Simple life"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">28*19*11</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">4/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">22+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">російська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">10+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1450</p>
                                <p>1049 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="40|simple life ukr" data-price="1049" data-name="Одноэтажный дом: simple life" class="open-popup btn">Замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Одноповерховий румбокс <span>"BECAUSE OF YOU"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">17*14*12</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">3/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included"> 18+ години</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">українська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">8+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1100</p>
                                <p>699 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="14|because of you ukr " data-yd="Because-of-you" data-price="699" data-name="Одноэтажный дом: BECAUSE OF YOU" class="open-popup btn">заказать со
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
                    <h3 class="product-content__title">Одноповерховий румбокс <span>"Family nap"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">20*14*11</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">3/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">Час збірки 18+ години</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">російська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">8+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1100</p>
                                <p>699 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="41|family nap ukr" data-price="699" data-name="Одноэтажный дом: Family nap" class="open-popup btn">замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Одноповерховий румбокс <span>"Coffee time"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">20*16*16</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">3/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included"> 18+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">українська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">8++</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1050</p>
                                <p>679 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="15|coffe time ukr" data-price="679" data-name="Одноэтажный дом: COFFEE TIME" class="open-popup btn">замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Одноповерховий румбокс <span>"Chocolate shop"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">20*16*16</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">3/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">18+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">українська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">8+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1050</p>
                                <p>679 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="24|chocolate shop ukr" data-price="679" data-name="Одноэтажный дом: CHOCOLATE SHOP" class="open-popup btn">замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Одноповерховий румбокс <span>"Pink loft"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">19*15*13</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">3/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">18+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">українська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">8+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1200</p>
                                <p>729 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="16|pink loft ukr" data-price="729" data-name="Одноэтажный дом: PINK LOFT" class="open-popup btn">замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Одноповерховий румбокс <span>"Blue coast"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">19*15*13</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">3/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">18+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">українська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">8++</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1200</p>
                                <p>729 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="17|blue coast ukr" data-price="729" data-name="Одноэтажный дом: BLUE COAST" class="open-popup btn">заказать со
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
                    <h3 class="product-content__title">Двоповерховий румбокс <span>"Coffe house"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">20*20*18</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">3/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">22+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">українська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">10+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1450</p>
                                <p>999 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="38|coffee house ukr" data-price=" 999" data-name="Одноэтажный дом: COFFEE HOUSE" class="open-popup btn">замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Двоповерховий румбокс <span>"Modern style"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">26*20*17</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">4/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">24+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">російська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">10+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1800</p>
                                <p>1249 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="18|modern style ukr" data-price="1249" data-name="Одноэтажный дом: MODERN STYLE" class="open-popup btn">замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Двоповерховий румбокс <span>"Give you happiness"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">26*20*17</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">4/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">24+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">російська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">10+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1800</p>
                                <p>1249 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="19|give you happiness ukr" data-price="1249" data-name="Одноэтажный дом: GIVE YOU HAPPINESS" class="open-popup btn">замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Двоповерховий румбокс <span>"annas pink melody"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">26*20*17</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">4/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">22+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">українська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">10+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>1350</p>
                                <p>949 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="20|annas pink melody ukr" data-price="949" data-name="Одноэтажный дом: ANNA'S PINK MELODY" class="open-popup btn">замовити зі знижкою</a>
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
                <h3 class="product-content__title">Одноповерховий румбокс <span>"First meet"</span></h3>
                <ul class="product-list">
                    <li>
                        <div class="product-list__name">Розміри, см:</div>
                        <div class="product-list__included">28*19*11</div>
                    </li>
                    <li>
                        <div class="product-list__name">Материіал:</div>
                        <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                    </li>
                    <li>
                        <div class="product-list__name">Складність</div>
                        <div class="product-list__included">4/5</div>
                    </li>
                    <li>
                        <div class="product-list__name">Час збірки:</div>
                        <div class="product-list__included">18+ годин</div>
                    </li>
                    <li>
                        <div class="product-list__name">Інструкція:</div>
                        <div class="product-list__included">російська</div>
                    </li>

                    <li>
                        <div class="product-list__name">Вік:</div>
                        <div class="product-list__included">10+</div>
                    </li>
                    <li>
                        <div class="product-list__name">У комплекті:</div>
                        <ul class="product-list__included">
                            <ul>
                                <li>Інструкція збірки російською</li>
                                <li> Всі необхідні інструменти</li>
                                <li>Освітлення: батарейка, дріт і вимикач</li>
                            </ul>
                        </ul>
                    </li>
                </ul>
                <div class="product-price">
                    <div class="price">
                        <p class="price-today">Ціна сьогодні</p>
                        <div class="block">
                            <p>1450</p>
                            <p>1049 <span>грн</span></p>
                        </div>
                    </div>
                    <a href="#" onclick="return false" data-id="39|First meet ukr" data-price="1549" data-name="Одноэтажный дом: first meet" class="open-popup btn">замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Двоповерховий румбокс <span>«Pink cafe» </span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">31*21*20</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">5/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">36+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">русская</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">14+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li>Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>2400</p>
                                <p>1649 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="42|pink cafe ukr" data-price="1649" data-name="Одноэтажный дом: pink cafe" class="open-popup btn">Замовити зі знижкою</a>
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
                    <h3 class="product-content__title">Двоповерховий румбокс <span>"Legend of the blue sea"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">25*22*22</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">5/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">36+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">українська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">14+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>2350</p>
                                <p>1599 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="28|legend of the blue sea ukr" data-price="1599" data-name="Одноэтажный дом: LEGEND OF THE BLUE SEA" class="open-popup btn">заказать со
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
                    <h3 class="product-content__title">Двоповерховий румбокс <span>"Sweet words"</span></h3>
                    <ul class="product-list">
                        <li>
                            <div class="product-list__name">Розміри, см:</div>
                            <div class="product-list__included">32*22*22</div>
                        </li>
                        <li>
                            <div class="product-list__name">Материіал:</div>
                            <div class="product-list__included">дерево, текстиль, папір, пластик, LED лампи</div>
                        </li>
                        <li>
                            <div class="product-list__name">Складність</div>
                            <div class="product-list__included">5/5</div>
                        </li>
                        <li>
                            <div class="product-list__name">Час збірки:</div>
                            <div class="product-list__included">36+ годин</div>
                        </li>
                        <li>
                            <div class="product-list__name">Інструкція:</div>
                            <div class="product-list__included">українська</div>
                        </li>

                        <li>
                            <div class="product-list__name">Вік:</div>
                            <div class="product-list__included">14+</div>
                        </li>
                        <li>
                            <div class="product-list__name">У комплекті:</div>
                            <ul class="product-list__included">
                                <ul>
                                    <li>Інструкція збірки російською</li>
                                    <li> Всі необхідні інструменти</li>
                                    <li>Освітлення: батарейка, дріт і вимикач</li>
                                </ul>
                            </ul>
                        </li>
                    </ul>
                    <div class="product-price">
                        <div class="price">
                            <p class="price-today">Ціна сьогодні</p>
                            <div class="block">
                                <p>2450</p>
                                <p>1649 <span>грн</span></p>
                            </div>
                        </div>
                        <a href="#" onclick="return false" data-id="21|sweet words ukr" data-price="1649" data-name="Одноэтажный дом: SWEET WORDS" class="open-popup btn">замовити зі знижкою</a>
                    </div>
                </div>
            </div>

            <section>
                <h2 class="reasons-title">3 причини, чому ваша дитина буде в захваті від збірки Рубмокc</h2>
                <ul class="reasons-list container">
                    <li>
                        <div class="reasons-list__icon reasons-list__first">
                            <img src="" data-leazy="/img/reasons/1.png" class="lazy-img" alt="">
                        </div>
                        <h3 class="reasons-list__title">Розвиток креативного мислення та дрібної моторики</h3>
                        <p class="reasons-list__text">Збірка румбокса не тільки цікава, але й корисна: розвиває просторове,
                            креативне і творче мислення, а також фантазію, координацію рухів, посидючість та уяву
                        </p>
                    </li>
                    <li>
                        <div class="reasons-list__icon reasons-list__second">
                            <img src="" data-leazy="/img/reasons/2.png" class="lazy-img" alt="">
                        </div>
                        <h3 class="reasons-list__title">Цікаве, а саме головне, корисне проведення часу всією родиною</h3>
                        <p class="reasons-list__text">Вам завжди буде чим зайнятися з дитиною. Румбокс згуртує всю сім'ю і
                            ви весело проведете час разом</p>


                    </li>
                    <li>
                        <div class="reasons-list__icon reasons-list__three">
                            <img src="" data-leazy="/img/reasons/3.png" class="lazy-img" alt="">
                        </div>
                        <h3 class="reasons-list__title">Приголомшлива деталізація</h3>
                        <p class="reasons-list__text">Усі деталі інтер'єру як справжні і вражають уяву. Кожен румбокс
                            максимально реалістичний і відображає всі деталі побуту, навіть найдрібніші</p>
                    </li>
                </ul>
            </section>


        </section>
        <section class="revievs-wrapper">
            <div class="revievs container">
                <h2 class="revievs-title">Більше 1470 задоволених батьків вже придбали Румбокс</h2>
                <ul class="revievs-list">
                    <li>
                        <div class="">
                            <img src="" data-leazy="/img/reviews/1.png" class="lazy-img" alt="">
                        </div>
                        <div class="revievs-list__content">
                            <h3>"...это невероятно! Ребенок просто счастлив"</h3>
                            <p>На День Рождения нашей Аринки решили с мужем вместо обычных конструкторов подарить ей этот
                                прекрасный Румбокс. Выбрали двухэтажный))</p>
                            <p>Думали, что она сама справится, но пришлось подключиться. И скажу честно, это били
                                невероятные несколько вечеров, когда мы всей семьей весело проводили время, помогали друг
                                другу и в результате создали чудо - домик в миниатюре</p>
                            <p>А еще он светится, и служит прекрасным ночничком)).</p>

                        </div>
                        <div class="revievs-list-name">
                            <h3>Анна Шевченко</h3>
                            <p>Киев, 37 лет</p>
                        </div>
                    </li>
                    <li>
                        <div class="">
                            <img src="" data-leazy="/img/reviews/2.png" class="lazy-img" alt="">
                        </div>
                        <div class="revievs-list__content">
                            <h3>"... подарок уникальный"</h3>
                            <p>Долго не могла найти что подарить другу. </p>
                            <p>Подарок получился уникальный, заинтересовал, кстати, не только именинника! </p>
                            <p>Спасибо что решили мою проблему с подарками для людей не важно какого возраста!</p>

                        </div>
                        <div class="revievs-list-name">
                            <h3>Анастасия Смулка</h3>
                            <p>Ирпень, 29 лет</p>
                        </div>
                    </li>
                    <li>
                        <div class="">
                            <img src="" data-leazy="/img/reviews/3.png" class="lazy-img" alt="">
                        </div>
                        <div class="revievs-list__content">
                            <h3>"... з дитинства люблю гратись і клеїти"</h3>
                            <p>Побачила рекламу в інсті, не втрималась і замовила. Тепер це моє нове хобі. Збираю не
                                поспішаючи, розтягую задоволення так сказати.</p>
                            <p>Особливо подобається деталізація. Все ніби справжнє))) ліжечка, шафи, кухня, ліхтарики.
                                Большое вам спасибо!!))</p>
                            <p>Це найкращій подарунок для себе</p>

                        </div>
                        <div class="revievs-list-name">
                            <h3>Олена Фещенко</h3>
                            <p>Киев, 26 лет</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="roombox container">
            <div class="revievs container">
                <h2 class="slider-wrapper__title">Румбокс -це</h2>
                <ul class="roombox-list">
                    <li>
                        <div class="roombox-list__icon">
                            <img src="" data-leazy="/img/roombox/1.png" class="lazy-img" alt="">
                        </div>
                        <h3 class="roombox-list__title">Захоплююча та розвиваюча гра для всієї родини</h3>
                    </li>
                    <li>
                        <div class="roombox-list__icon">
                            <img src="" data-leazy="/img/roombox/2.png" class="lazy-img" alt="">
                        </div>
                        <h3 class="roombox-list__title">Гарантовано якісні матеріали від виробника</h3>
                    </li>
                    <li>
                        <div class="roombox-list__icon">
                            <img src="" data-leazy="/img/roombox/3.png" class="lazy-img" alt="">
                        </div>
                        <h3 class="roombox-list__title">Чудовий та оригінальний подарунок для дітей і дорослих за найкращою
                            ціною</h3>
                    </li>
                </ul>
                <div class="video-block">
                    <div class="video-link">
                        <a href="#" class="js-second-video" data-links="https://www.youtube.com/embed/xKoxJgaA918">Посмотреть
                            видео</a>
                    </div>
                    <p class="video-block__text">подивіться короткий <br> відео-огляд</p>
                </div>
        </section>
        <section class="form-wrapper">
            <div class="form-block container">
                <p class="form-block__text">Будинок мрії для Вас та Вашої дитини</p>
                <h2 class="form-block__title">Розвиваючий і захоплюючій конструктор для дітей та дорослих</h2>
                <p class="form-block__des">Для замовлення - залиште заявку і наш менеджер зв'яжеться з вами

                    <br>найближчим часом</p>
                <form action="/" method="post" class="form">
                    <input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : ''; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>">
                    <input type="text" name="name" placeholder="Ваше ім’я:" class="input" required>
                    <input type="tel" name="phone" id="phone-2" placeholder="Ваш телефон:" class="input" required>
                    <label class="select">
                        <select name="order" class="input" required>
                            <option value="">Оберіть набір:</option>
                            <option value="40|sIMPLE LIFE ukr 1049">"SIMPLE LIFE" - 1049 грн</option>
                            <option value="14|bECAUSE OF YOU ukr 699">"BECAUSE OF YOU" - 699 грн</option>
                            <option value="41|fAMILY NAP ukr 699">"FAMILY NAP" - 699 грн</option>
                            <option value="15|cOFFEE TIME ukr 679">"COFFEE TIME" - 679 грн</option>
                            <option value="24|cHOCOLATE SHOP ukr 679">"CHOCOLATE SHOP" - 679 грн</option>
                            <option value="16|pINK LOFT ukr 729">"PINK LOFT" - 729 грн</option>
                            <option value="17|bLUE COAST ukr 729">"BLUE COAST" - 729 грн</option>
                            <option value="38|cOFFEE HOUSE ukr 999">"COFFEE HOUSE" - 999 грн</option>
                            <option value="18|mODERN STYLE ukr 1249">"MODERN STYLE" - 1249 грн</option>
                            <option value="19|gIVE YOU HAPPINESS ukr 1249">"GIVE YOU HAPPINESS" - 1249 грн
                            </option>
                            <!-- <option value="20|aNNA'S PINK MELODY ukr 949">"ANNA'S PINK MELODY" - 949 грн 
                            </option>  -->
                            <!-- <option value="39|fIRST MEET ukr 1549">"FIRST MEET" - 1549 грн</option> -->
                            <option value="42|pINK CAFE ukr 1649">"PINK CAFE" - 1649 грн</option>
                            <option value="28|lEGEND OF THE BLUE SEA ukr 1599">"LEGEND OF THE BLUE SEA" - 1599
                                грн</option>
                            <option value="21|sWEET WORDS ukr 1649">"SWEET WORDS" - 1649 грн</option>
                        </select>
                    </label>
                    <button type="submit" class="form-btn">замовити зі знижкою</button>
                </form>
            </div>
        </section>
        <footer class="footer container">
            <div class="footer-block">
                <a href="#slider-wrapper">
                    <img src="/img/header/logo.svg" width="150">
                </a>
                <ul class="footer-phone">
                    <li>
                        <a href="tel:+380930552456" class="footer-phone__item">+38 (093) 055-24-56 </a>
                    </li>
                    <li>
                        <a href="tel:+380950042501" class="footer-phone__item">+38 (095) 004-25-01 </a>
                    </li>
                </ul>
                <div class="footer-contacts">
                    <a href="mailto:official.dream.houses@gmail.com">official.dream.houses@gmail.com</a>
                    <p>пн-нд 9:00-20:00</p>
                </div>
                <ul class="footer-links">
                    <li>
                        <a href="https://www.facebook.com/hobby.dream.houses/" class="footer-links__item faceboock">faceboook</a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/hobby.roombox/" class="footer-links__item instagram">instagram</a>
                    </li>
                </ul>
            </div>
            <ul class="footer-documents">
                <li>
                    <a href="documents/privacy-policy.pdf" class="footer-documents__item">Політика конфіденційності</a>
                </li>
                <li>
                    <a href="documents/public-offer-agreement.pdf" class="footer-documents__item">Публічна оферта</a>
                </li>
                <li>
                    <a href="documents/return-policy.pdf" class="footer-documents__item">Умови повернення</a>
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
                <p class="popup-text">Заполните форму и нажмите кнопку «Заказать», мы с Вами свяжемся в ближайшее время</p>

                <form action="/" method="post" id="" class="popap-form js-popap-form">
                    <input type="hidden" name="frId" value="because-of-you">
                    <input type="hidden" name="price" value="0">
                    <input type="hidden" name="utm_source" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : ''; ?>">
                    <input type="hidden" name="utm_medium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ''; ?>">
                    <input type="hidden" name="utm_campaign" value="<?php echo isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ''; ?>">
                    <input type="hidden" name="utm_content" value="<?php echo isset($_GET['utm_content']) ? $_GET['utm_content'] : ''; ?>">
                    <input type="hidden" name="utm_term" value="<?php echo isset($_GET['utm_term']) ? $_GET['utm_term'] : ''; ?>">
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
        <script src="js/intlTelInput.js"></script>
        <script src="js/utils.js"></script>
        <script src="js/slider.js"></script>
        <script src="js/lazy-load.js"></script>
        <script src="js/main.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/anchors.js"></script>
        <script src="js/timer.js"></script>
        <script src="js/send.js"></script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTXX9LZ" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->









        </body>

</html>