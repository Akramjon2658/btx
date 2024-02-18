<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Dashboard");
?>
<div id="root">
        <div class="App">
            <div class="mobile__navbar ">
                <div class="mobile__navbar-close"><img src="<?=SITE_TEMPLATE_PATH?>/images/mobile-close.f521cf45.svg"
                        alt="close"></div>
                <div class="mobile__navbar-logo flex-center"><a class="active"><img
                            src="<?=SITE_TEMPLATE_PATH?>/images/logo-yellow.789bce48.svg" alt="logo"></a></div>
                <div class="mobile__navbar-menu">
                    <ul>
                        <li class="flex-center"><a>WORK</a></li>
                        <li class="flex-center"><a>ABOUT</a></li>
                        <li class="flex-center"><a>BLOG</a></li>
                        <li class="flex-center"><a>CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <div class="backdrop "></div>
            <nav class="Navbar extraLargeNavbar">
                <div class="wrapper flex-s-between">
                    <div>
                        <a class="active">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.39c5f3c6.svg" alt="logo" class="pointer">
                        </a>
                    </div>
                    <div class="mobile__menu"><img src="<?=SITE_TEMPLATE_PATH?>/images/mobile-menu.10823520.svg" alt="menu">
                    </div>
                    <div class="desktop__menu">
                        <ul class="flex-s-between">
                            <li><a>WORK</a></li>
                            <li><a>ABOUT</a></li>
                            <li><a>BLOG</a></li>
                            <li><a>CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="hero" id="hero">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-info">
                                <h1 class="weight800 font60">Hello!!!</h1>
                                <h1 class="weight800 font60">We Are Creative Digital Agency.</h1>
                                <p class="font12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doeiusmod
                                    tempor incididunt ut labore et dolore magna aliqua</p>
                                <div class="button"><a class="button-link">SEND MESSAGE</a></div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="hero-image"><img src="<?=SITE_TEMPLATE_PATH?>/images/hero-image.d450d3c1.png"
                                    alt="hero"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="portfolio">
                <div class="wrapper">
                    <div class="row">
                        <div class="big__title">
                            <h2 class="weight800 font60 padding40">WORK SHOWCASE.</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
                            <div class="portfolio__nav">
                                <ul>
                                    <li class="portfolio__nav-active font12">ALL</li>
                                    <li class="font12">BRANDING</li>
                                    <li class="font12">ILLUSTRATIONS</li>
                                    <li class="font12">WEB</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                            <div class="portfolio__filter">
                                <p class="font12">NEWEST FIRST</p><img src="<?=SITE_TEMPLATE_PATH?>/images/arrow.3d45f423.svg"
                                    alt="arrow">
                            </div>
                        </div>
                    </div>
                    
                    <div class="my-masonry-grid">
                        <div class="mint__gallery" style="width: 33.3333%;">
                            <div class="portfolio__box"><img src="<?=SITE_TEMPLATE_PATH?>/images/preview.ffd636c7.png"
                                    alt="project">
                                <div class="portfolio__hover-info flex-center">
                                    <div class="text-center">
                                        <p class="font30 weight800">Lamp</p>
                                        <p class="font12 weight500">branding</p>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__box"><img src="<?=SITE_TEMPLATE_PATH?>/images/preview.3ffe0420.png"
                                    alt="project">
                                <div class="portfolio__hover-info flex-center">
                                    <div class="text-center">
                                        <p class="font30 weight800">Sneakers</p>
                                        <p class="font12 weight500">web</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mint__gallery" style="width: 33.3333%;">
                            <div class="portfolio__box"><img src="<?=SITE_TEMPLATE_PATH?>/images/preview.80aa8657.png"
                                    alt="project">
                                <div class="portfolio__hover-info flex-center">
                                    <div class="text-center">
                                        <p class="font30 weight800">Smartwatch</p>
                                        <p class="font12 weight500">web</p>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__box"><img src="<?=SITE_TEMPLATE_PATH?>/images/preview.d41b337f.png"
                                    alt="project">
                                <div class="portfolio__hover-info flex-center">
                                    <div class="text-center">
                                        <p class="font30 weight800">Label</p>
                                        <p class="font12 weight500">illustrations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mint__gallery" style="width: 33.3333%;">
                            <div class="portfolio__box"><img src="<?=SITE_TEMPLATE_PATH?>/images/preview.71eebd49.png"
                                    alt="project">
                                <div class="portfolio__hover-info flex-center">
                                    <div class="text-center">
                                        <p class="font30 weight800">Speakerphone</p>
                                        <p class="font12 weight500">illustrations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="portfolio__box"><img src="<?=SITE_TEMPLATE_PATH?>/images/preview.2921cad9.png"
                                    alt="project">
                                <div class="portfolio__hover-info flex-center">
                                    <div class="text-center">
                                        <p class="font30 weight800">lemons</p>
                                        <p class="font12 weight500">branding</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-center padding40 row">
                        <div class="button"><a class="button-link">HAVE WORK FOR US?</a></div>
                    </div>
                </div>
            </div>
            <div id="partners">
                <div class="wrapper">
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal"
                        style="cursor: grab;">
                        <div class="swiper-wrapper"
                            style="transition-duration: 0ms; transform: translate3d(-1070px, 0px, 0px);">
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="1" style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner02.d8f2a498.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner03.0d091731.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner04.81292e3c.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner05.d39e28a3.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                data-swiper-slide-index="5" style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner06.a0c63ad5.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner01.1f6de9f0.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner02.d8f2a498.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="2"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner03.0d091731.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="3"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner04.81292e3c.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide" data-swiper-slide-index="4"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner05.d39e28a3.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="5"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner06.a0c63ad5.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-slide-index="0" style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner01.1f6de9f0.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="1" style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner02.d8f2a498.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner03.0d091731.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner04.81292e3c.svg" alt="partner"></div>
                            </div>
                            <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                style="width: 174px; margin-right: 40px;">
                                <div class="partner__box flex-center"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/partner05.d39e28a3.svg" alt="partner"></div>
                            </div>
                        </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
            </div>
            <div id="about">
                <div class="wrapper">
                    <div class="row">
                        <div class="big__title">
                            <h2 class="weight800 font60 padding40">ABOUT US.</h2>
                        </div>
                    </div>
                    <p class="font12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt<br>ut labore et dolore magna aliqua.</p>
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="team__box flex-center"><img src="<?=SITE_TEMPLATE_PATH?>/images/person01.09d2aa97.png"
                                    alt="person">
                                <div class="team__box-info">
                                    <p class="font15 weight800">Luke Skywalker</p>
                                    <p class="font12 weight500">Web designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="team__box flex-center"><img src="<?=SITE_TEMPLATE_PATH?>/images/person02.5ca453ab.png"
                                    alt="person">
                                <div class="team__box-info">
                                    <p class="font15 weight800">Han Solo</p>
                                    <p class="font12 weight500">Graphic Designer</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="team__info flex-center">
                                <div>
                                    <h4 class="font20 weight800">Little About Us</h4>
                                    <p class="font12 weight500">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod temp orincididunt ut labore et dolore magna aliqua.</p>
                                    <p class="font12 weight500">Read More</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="blog" id="blog">
                <div class="wrapper">
                    <div class="row">
                        <div class="big__title">
                            <h2 class="weight800 font60 padding40">OUR BLOG.</h2>
                        </div>
                    </div>
                    <p class="font12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt<br>ut labore et dolore magna aliqua.</p>
                    <div class="padding30">
                        <div class="swiper-container swiper-container-initialized swiper-container-horizontal"
                            style="cursor: grab;">
                            <div class="swiper-wrapper"
                                style="transition-duration: 0ms; transform: translate3d(-1070px, 0px, 0px);">
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                    style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.90cb13f6.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">BLOG TITLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem tabore et dolore magna aliqua
                                                ipsum dolor undo thes.</p>
                                            <p class="font12 weight500">15 May 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                    style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.e0cb1b1c.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">BLOG ARTICLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem tabore et dolore magna aliqua
                                                ipsum dolor undo thes.</p>
                                            <p class="font12 weight500">20 May 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                    data-swiper-slide-index="5" style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.844772d7.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">AWESOME TITLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem tabore et dolore magna aliqua
                                                ipsum dolor undo thes.</p>
                                            <p class="font12 weight500">23 May 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0"
                                    style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.0c16d81f.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">SUPER BLOG ARTICLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem ipsum dolor sit amet,
                                                consectetur undo thes tabore et dolore magna aliqua.</p>
                                            <p class="font12 weight500">21 April 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1"
                                    style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.6ebd08bf.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">AWESOME ARTICLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem ipsum dolor undo thes tabore et
                                                dolore magna aliqua.</p>
                                            <p class="font12 weight500">27 April 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="2"
                                    style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.2dccd3dc.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">SUPER TITLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem tabore et dolore magna aliqua
                                                ipsum dolor undo thes.</p>
                                            <p class="font12 weight500">03 May 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="3"
                                    style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.90cb13f6.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">BLOG TITLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem tabore et dolore magna aliqua
                                                ipsum dolor undo thes.</p>
                                            <p class="font12 weight500">15 May 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" data-swiper-slide-index="4"
                                    style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.e0cb1b1c.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">BLOG ARTICLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem tabore et dolore magna aliqua
                                                ipsum dolor undo thes.</p>
                                            <p class="font12 weight500">20 May 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate-prev" data-swiper-slide-index="5"
                                    style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.844772d7.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">AWESOME TITLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem tabore et dolore magna aliqua
                                                ipsum dolor undo thes.</p>
                                            <p class="font12 weight500">23 May 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                    data-swiper-slide-index="0" style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.0c16d81f.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">SUPER BLOG ARTICLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem ipsum dolor sit amet,
                                                consectetur undo thes tabore et dolore magna aliqua.</p>
                                            <p class="font12 weight500">21 April 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                    data-swiper-slide-index="1" style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.6ebd08bf.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">AWESOME ARTICLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem ipsum dolor undo thes tabore et
                                                dolore magna aliqua.</p>
                                            <p class="font12 weight500">27 April 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                    style="width: 316.667px; margin-right: 40px;">
                                    <div class="blog__box">
                                        <div class="blog__image"><img
                                                src="<?=SITE_TEMPLATE_PATH?>/images/preview.2dccd3dc.png" alt="blog story">
                                            <div class="blog__hover flex-center">
                                                <h4 class="font30 weight800">READ MORE</h4>
                                            </div>
                                        </div>
                                        <div class="blog__info">
                                            <h4 class="font15 weight800">SUPER TITLE!</h4>
                                            <p class="font12 weight500 padding10">Lorem tabore et dolore magna aliqua
                                                ipsum dolor undo thes.</p>
                                            <p class="font12 weight500">03 May 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="contact">
                <div class="wrapper">
                    <div class="row">
                        <div class="big__title">
                            <h2 class="weight800 font60 padding40">CONTACT US.</h2>
                        </div>
                    </div>
                    <p class="font12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt<br>ut labore et dolore magna aliqua.</p>
                    <div class="padding40 row">
                        <div class="col-md-12 col-lg-6">
                            <form id="contact-form">
                                <h4 class="font30 weight800 padding30">Send Us Message.</h4><input type="text"
                                    placeholder="Name" required="" name="name" value=""><input type="email"
                                    placeholder="Email" required="" name="email" value=""><textarea rows="6" cols="50"
                                    placeholder="Message..." required="" name="message"></textarea>
                                <div class="small__button"><button aria-label="send message" type="submit"
                                        value="Send Message">Send Message</button></div>
                            </form>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="flex-center"><img src="<?=SITE_TEMPLATE_PATH?>/images/bg.b74b9f78.png"
                                    alt="contact background"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row center-xs">
                                <div class="col-xs-12 col-lg-3 contact__info">
                                    <div class="contact__info-box">
                                        <div><img src="<?=SITE_TEMPLATE_PATH?>/images/contact-info-icon1.04e4f259.svg"
                                                alt="address"></div>
                                        <div>
                                            <p>1211 Awesome Avenue,</p>
                                            <p>NY USD</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-3 contact__info">
                                    <div class="contact__info-box">
                                        <div><img src="<?=SITE_TEMPLATE_PATH?>/images/contact-info-icon2.df4fdedf.svg"
                                                alt="address"></div>
                                        <div>
                                            <p>+00 123 - 456 -78</p>
                                            <p>+00 987 - 654 -32</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-lg-3 contact__info">
                                    <div class="contact__info-box">
                                        <div><img src="<?=SITE_TEMPLATE_PATH?>/images/contact-info-icon3.3cf93bcf.svg"
                                                alt="address"></div>
                                        <div>
                                            <p>mint@mintmail.com</p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="row center-xs">
                                <div class="col-xs-12 col-lg-1 contact__social"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/facebook.aa1e8c9c.svg" alt="facebook"></div>
                                <div class="col-xs-12 col-lg-1 contact__social"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/twitter.0ecdf21a.svg" alt="Twitter"></div>
                                <div class="col-xs-12 col-lg-1 contact__social"><img
                                        src="<?=SITE_TEMPLATE_PATH?>/images/dribble.db57da79.svg" alt="Dribble"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>