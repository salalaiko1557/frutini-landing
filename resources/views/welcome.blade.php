<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Frutini</title>
        <link rel="shortcut icon" href="{{ asset('images/main/icon.png') }}" type="image/png">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet" type="text/css" >
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '952684235115201'); 
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=952684235115201&ev=PageView&noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
    </head>
    <body>
    <!-- HEADER SECTION -->

    <header class="main-header">
     <!-- DESKTOP HEADER NAV -->    
        <aside id="navigate-dsktp" class="navigate d-none d-lg-flex"> 
            <span class="nav-logo">
                <img src="{{ asset('svg/logos/logo-01.svg') }}" alt="">
            </span>
            <nav class="main-menu">
                <a href="#about" class="nav-item">Про нас</a>
                <a href="#product" class="nav-item">Продукт</a>
                <a href="#economy" class="nav-item">Економiка</a>
                <a href="#risk" class="nav-item">Ризики</a>
                <a href="#customers" class="nav-item">Клієнти</a>
                <a href="#contacts" class="nav-item">Контакты</a>
            </nav>
            <section class="header-number">
                <a href="https://www.instagram.com/frutini_official_ua/?hl=ru" target="_blank">
                    <img src="{{ asset('svg/icons/icon-instagram.svg') }}" alt="instagaram">
                </a>
                <a href="tel:+380509105844">
                    <img src="{{ asset('svg/icons/icon-viber.svg') }}">
                    <span>+38 (050) 910-58-44</span>
                </a>
            </section>
        </aside>
        <div id="navigate-dsktp-call-3" class="header-btn-wrapper d-none d-lg-flex">
            <button class="primary-green header-btn">Замовити дзвінок</button>
        </div>
         <!-- DESKTOP HEADER NAV END -->    
         <!-- DEVICE HEADER NAV -->
         <aside id="navigate-dvc" class="device-navigate d-flex d-lg-none">
           <button id="open-mobile-menu" class="burger-menu">
                <img src="{{ asset('svg/icons/icon-menu.svg') }}">
           </button>
           <span class="nav-logo">
                <img src="{{ asset('svg/logos/logo-01.svg') }}" alt="">
            </span>
            <button class="burger-menu">
                <a href="tel:+380509105844">
                    <img src="{{ asset('svg/icons/icon-phone-call.svg') }}">
                </a>
            </button>
         </aside>
         <section class="mobile-menu-content d-none">
            <div class="menu-nav-dublate device-navigate">
                <button id="close-mobile-menu" class="burger-menu">
                    <img src="{{ asset('svg/icons/icon-arrow-left.svg') }}">
                </button>
                <span class="nav-logo">
                    <img src="{{ asset('svg/logos/logo-01.svg') }}" alt="">
                </span>
                <button class="burger-menu menu-call">
                    <img src="{{ asset('svg/icons/icon-phone-call.svg') }}">
                </button>
            </div>
            <ul class="mobile-menu-content-items">
                <li><a href="#about" class="nav-item">Про нас</a></li>
                <li><a href="#product" class="nav-item">Продукт</a></li>
                <li><a href="#economy" class="nav-item">Економiка</a></li>
                <li><a href="#risk" class="nav-item">Ризики</a></li>
                <li><a href="#customers" class="nav-item">Клієнти</a></li>
                <li><a href="#contacts" class="nav-item">Контакты</a></li>
            </ul>
            <section class="mobile-menu-content-contacts header-number">
                <span>
                    <img src="{{ asset('svg/icons/icon-viber.svg') }}">
                    <a href="tel:+380509105844">+38 (050) 910-58-44</a>
                </span>
                <button id="navigate-dsktp-call-1" class="primary-white">Замовити дзвінок</button>
            </section>
           <div class="mobile-menu-content-socials">
               <a href="https://www.instagram.com/frutini_official_ua/?hl=ru" target="_blank">
                   <span>Instagram</span>
                   <img src="{{ asset('svg/icons/icon-instagram.svg') }}" alt="instagaram">
               </a>
               <a href="https://www.facebook.com/Frutini.ua" target="_blank">
                   <span>Facebook</span>
                   <img src="{{ asset('svg/icons/icon-facebook.svg') }}" alt="instagaram">
               </a>
           </div>
         </section>
         <!-- DEVICE HEADER NAV END -->      
        <aside class="main-wrapper">
            <section class="main-info col-12 col-lg-6">
                <div class="main-info-img">
                    <img src="{{ asset('svg/logos/logo-02.svg') }}" alt="">
                </div>
                <h1>Натуральна пастила від виробника</h1>
                <button id="navigate-dsktp-call-2" class="primary-white">Замовити продукцію</button>
            </section>
            <section class="main-logo col-12 col-lg-6">
            <div class="main-logo-img">
                <img src="{{ asset('images/main/img-main.png') }}" alt="">
            </div>
            </section>
        </aside>
        <aside class="main-header-down-desktop">
                <a href="#about">
                    <img class="d-none d-lg-flex" src="{{ asset('svg/icons/icon-mouse.svg') }}" alt="">
                    <img class="mt-4 d-flex d-lg-none" src="{{ asset('svg/icons/icon-chevrons-down.svg') }}" alt="">
                </a>
        </aside>

    </header>
    <!-- HEADER SECTION END -->
    <!-- ABOUT SECTION END -->
    <section class="main-about" id="about">
        <h3 class="section-title-about">Про нас</h3>
        <aside class="main-about-content">
            <aside class="main-about-dev-slider-wrapper d-flex d-lg-none">
                <div class="about-device-slider">
                    <div class="device-slider-item">
                        <img src="{{ asset('images/about-us/img-about-us-01.jpg') }}" alt="investing">
                    </div>
                    <div class="device-slider-item">
                        <img src="{{ asset('images/about-us/img-about-us-02.jpg') }}" alt="investing">
                    </div>
                    <div class="device-slider-item">
                        <img src="{{ asset('images/about-us/img-about-us-03.jpg') }}" alt="investing">
                    </div>
                    <div class="device-slider-item">
                        <img src="{{ asset('images/about-us/img-about-us-04.jpg') }}" alt="investing">
                    </div>
                </div>
            </aside>
            <aside class="main-about-content-data d-none d-lg-flex col-lg-6">
                <article>
                    <p>Завод Frutini - виробник натуральної пастили з 5-ти річною історією.</p>
                    <p>Наша прогресивна команда з 60 осіб щодня прикладає зусилля, що б радувати клієнтів смачним, натуральним, якісним продуктом національного виробництва.</p>
                    <p>Запорукою успішного розвитку виробництва є ефективний менеджмент компанії, який дозволяє робити роботу якісно і вчасно, а також, глибокий інтерес до потреб споживача, який стимулює нас створювати нові розробки, патенти, що в свою чергу є запорукою підтримки високого попиту на продукт.</p>
                    <p>Маркетингові рішення для партнерів дозволяють зробити наш продукт двигуном обсягів продажів для багатьох закладів.</p>
                </article>
            </aside>
            <aside class="main-about-content-data-device d-flex d-lg-none col-12">
                <article id="readmore-article">
                    <p>Завод Frutini - виробник натуральної пастили з 5-ти річною історією.</p>
                    <p>Наша прогресивна команда з 60 осіб щодня прикладає зусилля, що б радувати клієнтів смачним, натуральним, якісним продуктом національного виробництва.</p>
                    <p>Запорукою успішного розвитку виробництва є ефективний менеджмент компанії, який дозволяє робити роботу якісно і вчасно, а також, глибокий інтерес до потреб споживача, який стимулює нас створювати нові розробки, патенти, що в свою чергу є запорукою підтримки високого попиту на продукт.</p>
                    <p>Маркетингові рішення для партнерів дозволяють зробити наш продукт двигуном обсягів продажів для багатьох закладів.</p>
                </article>
            </aside>
            <aside class="main-about-slider-wrapper d-none d-lg-flex col-lg-6">
                <div id="slider"> 
                    <div class="dp-wrap"> 
                        <div id="dp-slider">

                            <div class="dp_item" data-class="1" data-position="1">
                                <div class="dp-img">
                                <img class="img-fluid" src="{{ asset('images/about-us/img-about-us-01.jpg') }}" alt="investing">
                                </div>
                            </div>

                            <div class="dp_item" data-class="2" data-position="2">
                                <div class="dp-img">
                                <img class="img-fluid" src="{{ asset('images/about-us/img-about-us-02.jpg') }}" alt="investing">
                                </div>
                            </div>

                            <div class="dp_item" data-class="3" data-position="3">
                                <div class="dp-img">
                                <img class="img-fluid" src="{{ asset('images/about-us/img-about-us-03.jpg') }}" alt="investing">
                                </div>
                            </div>

                            <div class="dp_item" data-class="4" data-position="4">
                                <div class="dp-img">
                                <img class="img-fluid" src="{{ asset('images/about-us/img-about-us-04.jpg') }}" alt="investing">
                                </div>
                            </div>
                        </div>
                        <ul id="dp-dots">
                        <li data-class="1" class="active"></li>
                        <li data-class="2"></li>
                        <li data-class="3"></li>
                        <li data-class="4"></li>
                        </ul>
                    </div>
                </div>
            </aside>    
    </section>
    <section class="main-product" id="product">
        <h3 class="section-title">Продукт</h3>
        <p>Для створення пастили Frutini, добірні фрукти, ягоди та цитрусові збиваються в пюре, яке далі сушиться, пресується, нарізається на шари і присипається цукровою пудрою.</p>
        <ul class="products-list d-none d-lg-flex">
            <li>
                <img src="{{ asset('svg/icons/icon-medal.svg') }}" alt="">
                <p>Сертифікація відповідності стандартам <b>ДСТУ, СЕС</b>.</p>
            </li>
            <li>
                <img src="{{ asset('svg/icons/icon-diet.svg') }}" alt="">
                <p>Багатий вітамінами продукт без консервантів і барвників - найкраща альтернатива цукеркам, відмінно підійде дітям.</p>
            </li>
            <li>
                <img src="{{ asset('svg/icons/icon-biology.svg') }}" alt="">
                <p>Завдяки сучасній технології обробки продукту, вдалося зберегти всі поживні речовини, які роблять ці ласощі безцінним для здоров'я.</p>
            </li>
            <li>
                <img src="{{ asset('svg/icons/icon-molecular.svg') }}" alt="">
                <p>Важливим компонентом складу є клітковина, що міститься у фруктово-ягідному компоненті. Не містить глютен.</p>
            </li>
            <li>
                <img src="{{ asset('svg/icons/icon-time.svg') }}" alt="">
                <p>Тривалий термін придатності за рахунок висушування продукту.</p>
            </li>
        </ul>
        <aside class="products-device-slider-wrapper d-flex d-lg-none">
            <ul class="product-device-slider">
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-medal.svg') }}" alt="">
                    <p>Сертифікація відповідності стандартам <b>ДСТУ, СЕС</b>.</p>
                </li>
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-diet.svg') }}" alt="">
                    <p>Багатий вітамінами продукт без консервантів і барвників - найкраща альтернатива цукеркам, відмінно підійде дітям.</p>
                </li>
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-biology.svg') }}" alt="">
                    <p>Завдяки сучасній технології обробки продукту, вдалося зберегти всі поживні речовини, які роблять ці ласощі безцінним для здоров'я.</p>
                </li>
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-molecular.svg') }}" alt="">
                    <p>Важливим компонентом складу є клітковина, що міститься у фруктово-ягідному компоненті. Не містить глютен.</p>
                </li>
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-time.svg') }}" alt="">
                    <p>Тривалий термін придатності за рахунок висушування продукту.</p>
                </li>
            </ul>
        </aside>
        <button id="navigate-dsktp-call-4" class="primary-green products-btn">Замовити продукцію</button>
    </section>
    <section class="main-goods">
        <h3 class="section-title-goods">Асортимент</h3>
            <ul class="main-goods-content d-none d-lg-flex">
                {{-- ITEM 1 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/polunica.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-polunica">Полуниця</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, полуниця, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>336 кКал</li>
                                <li>0,8г</li>
                                <li>89г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 1 END --}}
                {{-- ITEM 2 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/abricos.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-abricos">Абрикос</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, абрикос, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>328 кКал</li>
                                <li>0,6г</li>
                                <li>87г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 2 END --}}
                {{-- ITEM 3 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/jabluko.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-jabluko">Яблуко</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>336 кКал</li>
                                <li>0,6г</li>
                                <li>89г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 3 END --}}
                {{-- ITEM 4 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/grusha.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-grusha">Груша</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, груша, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>322 кКал</li>
                                <li>0,5г</li>
                                <li>86г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 4 END --}}
                {{-- ITEM 5 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/vishnya.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-vishnya">Вишня</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, вишня, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>335 кКал</li>
                                <li>0,5г</li>
                                <li>89г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 5 END --}}
                {{-- ITEM 6 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/sliva.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-sliva">Слива</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, слива, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>321 кКал</li>
                                <li>0,7г</li>
                                <li>85г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 6 END --}}
                {{-- ITEM 7 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/garbuz.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-garbuz">Гарбуз</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, гарбуз, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>328 кКал</li>
                                <li>0,6г</li>
                                <li>87г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 7 END --}}
                {{-- ITEM 8 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/malina.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-malina">Малина</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, малина, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>336 кКал</li>
                                <li>0,8г</li>
                                <li>89г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 8 END --}}
                {{-- ITEM 9 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/apelsin.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-apelsin">Апельсин</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, aпельсин, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>336 кКал</li>
                                <li>0,5г</li>
                                <li>89г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 9 END --}}
                {{-- ITEM 10 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/limon-imbir.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-limon-imbir">Лимон-імбир</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, лимон, iмбир, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>337 кКал</li>
                                <li>0,7г</li>
                                <li>89г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 10 END --}}
                {{-- ITEM 11 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/smorodina.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-smorodina">Смородина</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, смородина чорна, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>334 кКал</li>
                                <li>0,6г</li>
                                <li>88г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 11 END --}}
                {{-- ITEM 12 START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/morkva.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-morkva">Морква</h4>
                        <div class="main-goods-content-item-content-details">
                            <ul class="main-goods-content-item-content-details-titles">
                                <li>Склад:</li>
                                <li>Вага:</li>
                                <li>Харч. цінність:</li>
                                <li>Білки:</li>
                                <li>Вуглеводи:</li>
                            </ul>
                            <ul class="main-goods-content-item-content-details-content">
                                <li>Яблуко, морква, цукор</li>
                                <li>20г <span>+/-2г</span></li>
                                <li>336 кКал</li>
                                <li>0,6г</li>
                                <li>88г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 12 END --}}
            </ul>
            <ul class="main-goods-content-device d-flex d-lg-none">
                {{-- ITEM 1 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/polunica.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-polunica">Полуниця</h4>
                        <div class="main-goods-content-item-content-details-device">
                            <ul class="main-goods-content-item-content-device">
                                <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                <li class="main-goods-content-item-content-details-content-data">Яблуко, полуниця, цукор</li>
                                <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                <li class="main-goods-content-item-content-details-content-data">336 кКал</li>
                                <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                <li class="main-goods-content-item-content-details-content-data">0,8г</li>
                                <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                <li class="main-goods-content-item-content-details-content-data">89г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 1 mob END --}}
                {{-- ITEM 2 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/abricos.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-abricos">Абрикос</h4>
                        <div class="main-goods-content-item-content-details-device">
                            <ul class="main-goods-content-item-content-device">
                                <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                <li class="main-goods-content-item-content-details-content-data">Яблуко, абрикос, цукор</li>
                                <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                <li class="main-goods-content-item-content-details-content-data">328 кКал</li>
                                <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                <li class="main-goods-content-item-content-details-content-data">0,6г</li>
                                <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                <li class="main-goods-content-item-content-details-content-data">87г</li>
                            </ul>
                        </div>
                    </div>
                </li>
                {{-- ITEM 2 mob END --}}
                {{-- ITEM 3 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/jabluko.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-jabluko">Яблуко</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">336 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,6г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">89г</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- ITEM 3 mob END --}}
                {{-- ITEM 4 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/grusha.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-grusha">Груша</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, груша, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">322 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,5г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">86г</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- ITEM 4 mob END --}}
                {{-- ITEM 5 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/vishnya.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-vishnya">Вишня</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, вишня, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">335 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,5г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">89г</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                {{-- ITEM 5 mob END --}}
                {{-- ITEM 6 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/sliva.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-sliva">Слива</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, слива, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">335 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,7г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">85г</li>
                                </ul>
                            </div>
                    </div>
                </li>
                {{-- ITEM 6 mob END --}}
                {{-- ITEM 7 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/garbuz.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-garbuz">Гарбуз</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, гарбуз, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">328 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,6г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">87г</li>
                                </ul>
                            </div>
                        
                    </div>
                </li>
                {{-- ITEM 7 mob END --}}
                {{-- ITEM 8 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/malina.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-malina">Малина</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, малина, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">336 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,8г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">89г</li>
                                </ul>
                            </div>
                    </div>
                </li>
                {{-- ITEM 8 mob END --}}
                {{-- ITEM 9 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/apelsin.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-apelsin">Апельсин</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, aпельсин, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">336 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,5г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">89г</li>
                                </ul>
                            </div>
                    </div>
                </li>
                {{-- ITEM 9 mob END --}}
                {{-- ITEM 10 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/limon-imbir.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-limon-imbir">Лимон-імбир</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, лимон, iмбир, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">337 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,7г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">89г</li>
                                </ul>
                            </div>
                    </div>
                </li>
                {{-- ITEM 10 mob END --}}
                {{-- ITEM 11 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/smorodina.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-smorodina">Смородина</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, смородина чорна, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">334 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,6г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">88г</li>
                                </ul>
                            </div>
                    </div>
                </li>
                {{-- ITEM 11 mob END --}}
                {{-- ITEM 12 mob START --}}
                <li class="main-goods-content-item">
                    <div class="main-goods-content-item-img">
                        <img src="{{ asset('images/goods/morkva.png') }}" alt="">
                    </div>
                    <span class="main-goods-content-item-delimiter"></span>
                    <div class="main-goods-content-item-content">
                        <h4 class="main-goods-content-item-content-title-morkva">Морква</h4>
                        <div class="main-goods-content-item-content-details-device">
                                <ul class="main-goods-content-item-content-device">
                                    <li class="main-goods-content-item-content-details-content-title">Склад:</li>
                                    <li class="main-goods-content-item-content-details-content-data">Яблуко, морква, цукор</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вага:</li>
                                    <li class="main-goods-content-item-content-details-content-data">20г <span>+/-2г</span></li>
                                    <li class="main-goods-content-item-content-details-content-title">Харч. цінність:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">336 кКал</li>
                                    <li class="main-goods-content-item-content-details-content-title">Білки:</li>
                                    <li class="main-goods-content-item-content-details-content-data">0,6г</li>
                                    <li class="main-goods-content-item-content-details-content-title">Вуглеводи:</li>                                
                                    <li class="main-goods-content-item-content-details-content-data">88г</li>
                                </ul>
                            </div>
                    </div>
                </li>
                {{-- ITEM 12 mob END --}}
            </ul>
    </section>
    <section class="main-economy" id="economy"> 
        <h3 class="section-title-economy">Економічна вигода виробу</h3>
        <ul class="main-economy-content d-none d-lg-flex">
            <li class="main-economy-content-item one-slide">
                <span></span>
                <h4>60%</h4>
                <section class="main-economy-content-item-data">
                    <h5>Маржинальність 60%+</h5>
                    <p>Понад 60 відсотків націнки для роздрібних продавців цукерки</p>
                </section>
            </li>
            <li class="main-economy-content-item two-slide">
                <span></span>
                <h4>300</h4>
                <section class="main-economy-content-item-data">
                    <h5>300 цукерок</h5>
                    <p>В середньому, 300 цукерок продає, кожен заклад в місяць, при наявності декорації</p>
                </section>
            </li>
            <li class="main-economy-content-item three-slide">
                <span></span>
                <h4>2</h4>
                <section class="main-economy-content-item-data">
                    <h5>2 тисячі</h5>
                    <p>Більше 2 тисяч кав'ярень та магазинів по Україні вже заробляють на пастилі Frutini</p>
                </section>
            </li>
            <li class="main-economy-content-item four-slide">
                <span></span>
                <h4>1</h4>
                <section class="main-economy-content-item-data">
                    <h5>1 мільйон</h5>
                    <p>Більше 1 мільйона цукерок виробляється щомісяця</p>
                </section>
            </li>
        </ul>

        <ul class="main-economy-content-device d-flex d-lg-none">
            <li class="main-economy-content-item-device one-slide-device">
                <h4>60%</h4>
                <h5>Маржинальність 60%+</h5>
                <p>Понад 60 відсотків націнки для роздрібних продавців цукерки</p>
            </li>
            <li class="main-economy-content-item-device two-slide-device">
                <h4>300</h4>
                <h5>300 цукерок</h5>
                <p>В середньому, 300 цукерок продає, кожен заклад в місяць, при наявності декорації</p>
            </li>
            <li class="main-economy-content-item-device three-slide-device">
                <h4>2</h4>
                <h5>2 тисячі</h5>
                <p>Більше 2 тисяч кав'ярень та магазинів по Україні вже заробляють на пастилі Frutini</p>
            </li>
            <li class="main-economy-content-item-device four-slide-device">
                <h4>1</h4>
                <h5>1 мільйон</h5>
                <p>Більше 1 мільйона цукерок виробляється щомісяця</p>
            </li>
        </ul>
    </section>
    
    <section class="main-risks" id="risk">
        <h3 class="section-title-risks">Ризики</h3>
        <div class="main-risks-data col-lg-12 d-none d-lg-flex">
            <div class="main-risks-content d-none d-lg-flex col-lg-6">
                <p>Ми зробили відмінний продукт, який продається без будь-яких сумнівів. І ось чому:</p>
                <aside class="main-risks-content-lists d-none d-lg-flex">
                    <ul class="main-risks-content-list-frst">
                        <li>
                            <h4>01. Довговічність</h4>
                            <p>Термін придатності продукту 6 міс. Термін реалізації партії становить 1 міс.</p>
                        </li>
                        <li>
                            <h4>03. Дизайн упаковки</h4>
                            <p>Продукт має індивідуальну упаковку, яка зберігає м'якість, смакові властивості.</p>
                        </li>
                        <li>
                            <h4>05. Фірмовий стиль</h4>
                            <p>Декорація привертає масу уваги і дозволяє продавати великий обсяг продукції, щомісячно.</p>
                        </li>
                    </ul>
                    <ul class="main-risks-content-list-scnd">
                        <li>
                            <h4>02. Стійкість</h4>
                            <p>Фізичні особливості цукерки допомагають їй витримувати високу температуру, вологість, тиск.</p>
                        </li>
                        <li>
                            <h4>04. Технологічність</h4>
                            <p>Вага і ціна ідеально підходять для кав'ярень, продуктових магазинів, крамниць еко-продукції, дитячих закладів, аптек і не тільки.</p>
                        </li>
                    </ul>
                </aside>
                <p class="d-none d-lg-block">Будьте впевнені, наш продукт приносить закладам прибуток. Ознайомитися з відгуками можна в нашому інстаграмі.                   
                    <span>
                        <a href="https://www.instagram.com/frutini_official_ua/?hl=ru" target="_blank">
                            <img src="{{ asset('svg/icons/icon-instagram.svg') }}" alt="instagaram">
                        </a>
                    </span>
                </p>
            </div>
            <div class="main-risks-slider d-none d-lg-flex col-lg-6">
                <div class="risks-desktop-slider">
                    <img src="{{ asset('images/risks/img-risks-01.jpg') }}" alt="">
                    <img src="{{ asset('images/risks/img-risks-02.jpg') }}" alt="">
                    <img src="{{ asset('images/risks/img-risks-03.jpg') }}" alt="">
                    <img src="{{ asset('images/risks/img-risks-04.jpg') }}" alt="">
                </div>
            </div>  
        </div>
        <aside class="main-risks-content-lists-device">
            <ul class="main-risks-content-list-device-slider d-flex d-lg-none col-12">
                <li>
                    <h4>01. Довговічність</h4>
                    <p>Термін придатності продукту 6 міс. Термін реалізації партії становить 1 міс.</p>
                </li>
                <li>
                    <h4>02. Стійкість</h4>
                    <p>Фізичні особливості цукерки допомагають їй витримувати високу температуру, вологість, тиск.</p>
                </li>
                <li>
                    <h4>03. Дизайн упаковки</h4>
                    <p>Продукт має індивідуальну упаковку, яка зберігає м'якість, смакові властивості.</p>
                </li>
                <li>
                    <h4>04. Технологічність</h4>
                    <p>Вага і ціна ідеально підходять для кав'ярень, продуктових магазинів, крамниць еко-продукції, дитячих закладів, аптек і не тільки.</p>
                </li>
                <li>
                    <h4>05. Фірмовий стиль</h4>
                    <p>Декорація привертає масу уваги і дозволяє продавати великий обсяг продукції, щомісячно.</p>
                </li>
            </ul>
        </aside>
    </section>
    <section class="main-customers" id="customers">
        <h3 class="section-title-customers">Наші клієнти</h3>
        <aside class="main-customers-content d-none d-lg-flex">
            <ul>
                <li>
                    <img src="{{ asset('images/customers/1.png') }}" alt="">
                    <span>Кав'ярні</span>
                </li>
                <li>
                    <img src="{{ asset('images/customers/2.png') }}" alt="">
                    <span>Дитячі заклади</span>
                </li>
                <li>
                    <img src="{{ asset('images/customers/3.png') }}" alt="">
                    <span>Лавки еко продукції</span>
                </li>
                <li>
                    <img src="{{ asset('images/customers/4.png') }}" alt="">
                    <span>Магазини сухофруктів</span>
                </li>
                <li>
                    <img src="{{ asset('images/customers/5.png') }}" alt="">
                    <span>Аптеки</span>
                </li>
            </ul>
        </aside>
        <aside class="main-customers-content-device d-lg-none d-flex">
            <ul>
                <li class="main-customers-content-device-item">
                    <img src="{{ asset('images/customers/1.png') }}" alt="">
                    <span>Кав'ярні</span>
                </li>
                <li class="main-customers-content-device-item">
                    <img src="{{ asset('images/customers/2.png') }}" alt="">
                    <span>Дитячі заклади</span>
                </li>
                <li class="main-customers-content-device-item">
                    <img src="{{ asset('images/customers/3.png') }}" alt="">
                    <span>Лавки еко продукції</span>
                </li>
                <li class="main-customers-content-device-item">
                    <img src="{{ asset('images/customers/4.png') }}" alt="">
                    <span>Магазини сухофруктів</span>
                </li>
                <li class="main-customers-content-device-item">
                    <img src="{{ asset('images/customers/5.png') }}" alt="">
                    <span>Аптеки</span>
                </li>
            </ul>
        </aside>
    </section>
    <section class="main-confidence">
        <h3 class="section-title-confidence">Ви все ще не впевнені?</h3>
        <aside class="main-confidence-content">
            <p>Переконайтеся в якості нашої роботи і продукції в соціальних мережах:</p>
            <div class="main-confidence-content-socials">
                <a href="https://www.instagram.com/frutini_official_ua/?hl=ru" target="_blank">
                    <span>Instagram</span>
                    <img src="{{ asset('svg/icons/icon-instagram.svg') }}" alt="instagaram">
                </a>
                <a href="https://www.facebook.com/Frutini.ua" target="_blank">
                    <span>Facebook</span>
                    <img src="{{ asset('svg/icons/icon-facebook.svg') }}" alt="facebook">
                </a>
            </div>
        </aside>
    </section>  
    <section class="main-contacts" id="contacts">
        <aside class="main-contacts-data col-lg-4 col-12">
            <ul>
                <li>
                    <h4>Адреса:</h4>
                    <span>м. Київ, Бориспільська 9</span>
                </li>
                <li>
                    <h4>Телефон:</h4>
                    <a href="tel:+380509105844">+38 (050) 910-58-44</a> 
                    <img src="{{ asset('svg/icons/icon-viber.svg') }}">
                </li>
            </ul>
            <button id="navigate-dsktp-call-5" class="main-contacts-btn primary-white">Замовити продукцію</button>
        </aside>
        <aside class="main-contacts-map col-lg-8 col-12">
            <img src="{{ asset('images/contacts/img-map.png') }}" alt="">
        </aside>
    </section> 
    <section class="main-footer-desktop d-lg-flex d-none">
        <span>© Copyright</span>
        <img src="{{ asset('images/main/logo-footer.png') }}" alt="">
        <span>All rights reserved.</span>
    </section> 
    <section class="main-footer-device d-lg-none d-flex">
        <img src="{{ asset('images/main/logo-footer.png') }}" alt="">    
        <span>© Copyright - All rights reserved.</span>
    </section> 

    <!-- CALLBACK FORM POPUP -->      

    <section class="main-form-popup-telephone-hide-wrapper">
        <form id="contact_us" method="post" action="javascript:void(0)">
            @csrf
            <i id="close-callback-form">X</i>
            <h3>Зворотний дзвінок</h3>
            <p>Для здійснення зворотного дзвінка вкажіть Ваше ім'я та номер телефону</p>
            
            <div class="group-input-form">
                <label for="formGroupExampleInput">Введіть ім'я та прізвище:</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Iван Iванов">
            </div>
            <div class="group-input-form">
                <label for="email">Введіть E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="example@email.com">
            </div>      
            <div class="group-input-form">
                <label for="mobile_number">Введіть номер телефону для зворотного дзвінка:</label>
                <input type="number" max="999999999999" name="mobile_number" class="form-control" id="mobile_number" placeholder="099-999-99-99" maxlength="10">
            </div>
            <div class="group-input-form">
                <label for="mobile_number_mesenger">Введіть номер для отримання прайс-листа на месенджер:</label>
                <aside>
                    <select class="select-msngrs" name="name_msngrs" id="name_msngrs">
                        <option>Viber</option>
                        <option>Telegram</option>
                        <option>WhatsApp</option>
                    </select>
                    <input type="number" max="999999999999" name="mobile_number_mesenger" class="form-control" id="mobile_number_mesenger" placeholder="099-999-99-99" maxlength="10">
                </aside>
            </div>
            <div class="group-input-form">
                <label for="partner_type">Оберiть тип партнера</label>
                <aside>
                    <select class="select-msngrs" name="partner_type" id="partner_type">
                        <option>Експорт</option>
                        <option>Дистриб'ютор</option>
                        <option>Мережа магазинів</option>
                        <option>Магазин/кав'ярня/дитячий заклад</option>
                        <option>Інтернет-магазин</option>
                        <option>Для себе</option>
                        <option>Інше</option>
                    </select>
                </aside>
            </div>
            <div class="alert alert-success d-none" id="msg_div">
                    <span id="res_message"></span>
            </div>
            <span>Натискаючи кнопку підтвердити, ви також даєте згоду на обробку Ваших персональних даних</span>
                <button type="submit" id="send_form" class="primary-white">Підтвердити</button>
        </form>
    </section>

    <!-- CALLBACK FORM POPUP END -->      
    </body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/readmore-js@2.2.1/readmore.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  

    
    <script src="{{ asset('js/slider/slider.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</html>




