<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Frutini </title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet" type="text/css" >


        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
                <a href="#about" class="nav-item">О нас</a>
                <a href="#product" class="nav-item">Продукт</a>
                <a href="#economy" class="nav-item">Экономика</a>
                <a href="#risk" class="nav-item">Риски</a>
                <a href="#customers" class="nav-item">Клиенты</a>
                <a href="#contacts" class="nav-item">Контакты</a>
            </nav>
            <section class="header-number">
                <a href="tel:+38050915844">
                    <img src="{{ asset('svg/icons/icon-viber.svg') }}">
                    <span>+38 (050) 91-58-44</span>
                </a>
            </section>
        </aside>
        <div id="navigate-dsktp-call-3" class="header-btn-wrapper d-none d-lg-flex">
            <button class="primary-green header-btn">Заказать звонок</button>
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
                <a href="tel:+38050915844">
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
                <li><a href="#about" class="nav-item">О нас</a></li>
                <li><a href="#product" class="nav-item">Продукт</a></li>
                <li><a href="#economy" class="nav-item">Экономика</a></li>
                <li><a href="#risk" class="nav-item">Риски</a></li>
                <li><a href="#customers" class="nav-item">Клиенты</a></li>
                <li><a href="#contacts" class="nav-item">Контакты</a></li>
            </ul>
            <section class="mobile-menu-content-contacts header-number">
                <span>
                    <img src="{{ asset('svg/icons/icon-viber.svg') }}">
                    <a href="tel:+38050915844">+38 (050) 91-58-44</a>
                </span>
                <button id="navigate-dsktp-call-1" class="primary-white">Заказать звонок</button>
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
                <h1>Натуральная пастила от производителя</h1>
                <button id="navigate-dsktp-call-2" class="primary-white">Заказать продукцию</button>
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
        <h3 class="section-title-about">О нас</h3>
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
                    <p>Завод Frutini – производитель натуральной пастилы с 5-ти летней историей.</p>
                    <p>Наша прогрессивная команда из 60 человек ежедневно прикладывает усилия, что бы радовать клиентов вкусным, натуральным, качественным продуктом национального производства.</p>
                    <p>Залогом успешного развития производства является эффективный менеджмент компании, который позволяет делать работу качественно и вовремя, а так же глубокий интерес к нуждам потребителя, который стимулирует нас создавать новые разработки, патенты, что в свою очередь является залогом поддержки высокого спроса на продукт.</p>
                    <p>Маркетинговые решения для партнеров позволяют сделать наш продукт двигателем объемов продаж для многих заведений.</p>
                </article>
            </aside>
            <aside class="main-about-content-data-device d-flex d-lg-none col-12">
                <article id="readmore-article">
                    <p>Завод Frutini – производитель натуральной пастилы с 5-ти летней историей.</p>
                    <p>Наша прогрессивная команда из 60 человек ежедневно прикладывает усилия, что бы радовать клиентов вкусным, натуральным, качественным продуктом национального производства.</p>
                    <p>Залогом успешного развития производства является эффективный менеджмент компании, который позволяет делать работу качественно и вовремя, а так же глубокий интерес к нуждам потребителя, который стимулирует нас создавать новые разработки, патенты, что в свою очередь является залогом поддержки высокого спроса на продукт.</p>
                    <p>Маркетинговые решения для партнеров позволяют сделать наш продукт двигателем объемов продаж для многих заведений.</p>
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
        <p>Для создания пастилы Frutini, отборные фрукты, ягоды и цитрусовые взбиваются в пюре, которое далее сушится, прессуется, нарезается на слои и присыпается сахарной  пудрой.</p>
        <ul class="products-list d-none d-lg-flex">
            <li>
                <img src="{{ asset('svg/icons/icon-medal.svg') }}" alt="">
                <p>Сертификация соответствия стандартам <b>ДСТУ, СЕС</b>.</p>
            </li>
            <li>
                <img src="{{ asset('svg/icons/icon-diet.svg') }}" alt="">
                <p>Богатый витаминами продукт без консервантов и красителей, лучшая альтернатива конфетам, отлично подойдёт для детей.</p>
            </li>
            <li>
                <img src="{{ asset('svg/icons/icon-biology.svg') }}" alt="">
                <p>Благодаря современной технологии обработки продукта, удалось сохранить все питательные вещества, делающие это лакомство бесценным для здоровья</p>
            </li>
            <li>
                <img src="{{ asset('svg/icons/icon-molecular.svg') }}" alt="">
                <p>Важным компонентом состава является клетчатка, содержащаяся во фруктово-ягодном компоненте. Не содержит глютен</p>
            </li>
            <li>
                <img src="{{ asset('svg/icons/icon-time.svg') }}" alt="">
                <p>Длительный срок годности за счет высушивания продукта.</p>
            </li>
        </ul>
        <aside class="products-device-slider-wrapper d-flex d-lg-none">
            <ul class="product-device-slider">
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-medal.svg') }}" alt="">
                    <p>Сертификация соответствия стандартам <b>ДСТУ, СЕС</b>.</p>
                </li>
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-diet.svg') }}" alt="">
                    <p>Богатый витаминами продукт без консервантов и красителей, лучшая альтернатива конфетам, отлично подойдёт для детей.</p>
                </li>
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-biology.svg') }}" alt="">
                    <p>Благодаря современной технологии обработки продукта, удалось сохранить все питательные вещества, делающие это лакомство бесценным для здоровья</p>
                </li>
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-molecular.svg') }}" alt="">
                    <p>Важным компонентом состава является клетчатка, содержащаяся во фруктово-ягодном компоненте. Не содержит глютен</p>
                </li>
                <li class="product-device-slider-item">
                    <img src="{{ asset('svg/icons/icon-time.svg') }}" alt="">
                    <p>Длительный срок годности за счет высушивания продукта.</p>
                </li>
            </ul>
        </aside>
        <button id="navigate-dsktp-call-4" class="primary-green products-btn">Заказать продукцию</button>
    </section>
    <section class="main-economy" id="economy"> 
        <h3 class="section-title-economy">Экономическая выгода изделия</h3>
        <ul class="main-economy-content d-none d-lg-flex">
            <li class="main-economy-content-item one-slide">
                <span></span>
                <h4>60%</h4>
                <section class="main-economy-content-item-data">
                    <h5>Маржинальность 60%+</h5>
                    <p>Более 60 процентов наценки для розничных продавцов конфеты</p>
                </section>
            </li>
            <li class="main-economy-content-item two-slide">
                <span></span>
                <h4>300</h4>
                <section class="main-economy-content-item-data">
                    <h5>300 конфет</h5>
                    <p>В среднем, 300 конфет продает, каждое заведение в месяц, при наличии декорации</p>
                </section>
            </li>
            <li class="main-economy-content-item three-slide">
                <span></span>
                <h4>2</h4>
                <section class="main-economy-content-item-data">
                    <h5>2 тысячи</h5>
                    <p>Более 2 тысяч кофеен по Украине уже зарабатывают  на пастиле Frutini</p>
                </section>
            </li>
            <li class="main-economy-content-item four-slide">
                <span></span>
                <h4>1</h4>
                <section class="main-economy-content-item-data">
                    <h5>1 миллион</h5>
                    <p>Более 1 миллиона конфет производится ежемесячно</p>
                </section>
            </li>
        </ul>

        <ul class="main-economy-content-device d-flex d-lg-none">
            <li class="main-economy-content-item-device one-slide-device">
                <h4>60%</h4>
                <h5>Маржинальность 60%+</h5>
                <p>Более 60 процентов id="navigate-dsktp-call-3"наценки для розничных продавцов конфеты</p>
            </li>
            <li class="main-economy-content-item-device two-slide-device">
                <h4>300</h4>
                <h5>300 конфет</h5>
                <p>В среднем, 300 конфет продает, каждое заведение в месяц, при наличии декорации</p>
            </li>
            <li class="main-economy-content-item-device three-slide-device">
                <h4>2</h4>
                <h5>2 тысячи</h5>
                <p>Более 2 тысяч кофеен по Украине уже зарабатывают  на пастиле Frutini</p>
            </li>
            <li class="main-economy-content-item-device four-slide-device">
                <h4>1</h4>
                <h5>1 миллион</h5>
                <p>Более 1 миллиона конфет производится ежемесячно</p>
            </li>
        </ul>
    </section>
    
    <section class="main-risks" id="risk">
        <h3 class="section-title-risks">Риски</h3>
        <div class="main-risks-data col-lg-12 d-none d-lg-flex">
            <div class="main-risks-content d-none d-lg-flex col-lg-6">
                <p>Мы сделали отличный продукт, который продается без каких-либо сомнений. И вот почему:</p>
                <aside class="main-risks-content-lists d-none d-lg-flex">
                    <ul class="main-risks-content-list-frst">
                        <li>
                            <h4>01. Долговечность</h4>
                            <p>Срок годности продукта 6 мес. Срок реализации партии составляет 1 мес.</p>
                        </li>
                        <li>
                            <h4>03. Дизайн упаковки</h4>
                            <p>Продукт имеет индивидуальную упаковку, которая сохраняет мягкость, вкусовые свойства.</p>
                        </li>
                        <li>
                            <h4>05. Фирменный стиль</h4>
                            <p>Декорация привлекает массу внимания и позволяет продавать хороший объем продукции.</p>
                        </li>
                    </ul>
                    <ul class="main-risks-content-list-scnd">
                        <li>
                            <h4>02. Стойкость</h4>
                            <p>Физические особенности конфеты помогают ей выдерживать высокую температуру, влажность, давление</p>
                        </li>
                        <li>
                            <h4>04. Технологичность</h4>
                            <p>Вес и цена идеально подходят  для кофеен, продуктовых магазинов, лавок эко-продукции, детских заведений, аптек и не только.</p>
                        </li>
                    </ul>
                </aside>
                <p class="d-none d-lg-flex">Будьте уверены, наш продукт приносит заведениям прибыль. Ознакомиться с отзывами можно в нашем инстаграме.</p>
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
                    <h4>01. Долговечность</h4>
                    <p>Срок годности продукта 6 мес. Срок реализации партии составляет 1 мес.</p>
                </li>
                <li>
                    <h4>02. Стойкость</h4>
                    <p>Физические особенности конфеты помогают ей выдерживать высокую температуру, влажность, давление</p>
                </li>
                <li>
                    <h4>03. Дизайн упаковки</h4>
                    <p>Продукт имеет индивидуальную упаковку, которая сохраняет мягкость, вкусовые свойства.</p>
                </li>
                <li>
                    <h4>04. Технологичность</h4>
                    <p>Вес и цена идеально подходят  для кофеен, продуктовых магазинов, лавок эко-продукции, детских заведений, аптек и не только.</p>
                </li>
                <li>
                    <h4>05. Фирменный стиль</h4>
                    <p>Декорация привлекает массу внимания и позволяет продавать хороший объем продукции.</p>
                </li>
            </ul>
        </aside>
    </section>
    <section class="main-customers" id="customers">
        <h3 class="section-title-customers">Наши клиенты</h3>
        <aside class="main-customers-content d-none d-lg-flex">
            <ul>
                <li>
                    <img src="{{ asset('images/customers/1.png') }}" alt="">
                    <span>Кофейни</span>
                </li>
                <li>
                    <img src="{{ asset('images/customers/2.png') }}" alt="">
                    <span>Детские заведения</span>
                </li>
                <li>
                    <img src="{{ asset('images/customers/3.png') }}" alt="">
                    <span>Лавки эко продукции</span>
                </li>
                <li>
                    <img src="{{ asset('images/customers/4.png') }}" alt="">
                    <span>Магазины сухофруктов</span>
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
                    <span>Кофейни</span>
                </li>
                <li class="main-customers-content-device-item">
                    <img src="{{ asset('images/customers/2.png') }}" alt="">
                    <span>Детские заведения</span>
                </li>
                <li class="main-customers-content-device-item">
                    <img src="{{ asset('images/customers/3.png') }}" alt="">
                    <span>Лавки эко продукции</span>
                </li>
                <li class="main-customers-content-device-item">
                    <img src="{{ asset('images/customers/4.png') }}" alt="">
                    <span>Магазины сухофруктов</span>
                </li>
                <li class="main-customers-content-device-item">
                    <img src="{{ asset('images/customers/5.png') }}" alt="">
                    <span>Аптеки</span>
                </li>
            </ul>
        </aside>
    </section>
    <section class="main-confidence">
        <h3 class="section-title-confidence">Вы всё еще не уверены?</h3>
        <aside class="main-confidence-content">
            <p>Убедитесь в качестве нашей работы и продукции в социальных сетях:</p>
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
                    <h4>Адрес:</h4>
                    <span>г. Киев, Бориспольская 9</span>
                </li>
                <li>
                    <h4>Телефон:</h4>
                    <a href="tel:+380509105844">+38 (050) 910-58-44</a> 
                    <img src="{{ asset('svg/icons/icon-viber.svg') }}">
                </li>
            </ul>
            <button id="navigate-dsktp-call-5" class="main-contacts-btn primary-white">Заказать продукцию</button>
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
            <h3>Обратный звонок</h3>
            <p>Для совершения обратного звонка укажите Ваше имя и номер телефона</p>
            
            <div class="group-input-form">
                <label for="formGroupExampleInput">Введите имя и фамилию:</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Иван Иванов">
            </div>
            <div class="group-input-form">
                <label for="email">Введите E-mail</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="example@email.com">
            </div>      
            <div class="group-input-form">
                <label for="mobile_number">Введите номер телефона для обратного звонка:</label>
                <input type="number" max="999999999999" name="mobile_number" class="form-control" id="mobile_number" placeholder="099-999-99-99" maxlength="10">
            </div>
            <div class="group-input-form">
                <label for="mobile_number_mesenger">Введите номер телефона для связи через месенджер:</label>
                <aside>
                    <select class="select-msngrs" name="name_msngrs" id="name_msngrs">
                        <option>Viber</option>
                        <option>Telegram</option>
                        <option>WhatsApp</option>
                    </select>
                    <input type="number" max="999999999999" name="mobile_number_mesenger" class="form-control" id="mobile_number_mesenger" placeholder="099-999-99-99" maxlength="10">
                </aside>
                </div>
            <div class="alert alert-success d-none" id="msg_div">
                    <span id="res_message"></span>
            </div>
            <span>Нажимая кнопку подтвердить, вы также даёте согласие на обработку Ваших персональных данных </span>
                <button type="submit" id="send_form" class="primary-white">Подтвердить</button>
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
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</html>




