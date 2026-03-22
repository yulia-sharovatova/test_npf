<!DOCTYPE html>

<html lang="ru" class="bx-core bx-win bx-no-touch bx-retina bx-chrome">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Акционерное общество «Негосударственный пенсионный фонд «Сургутнефтегаз»">
    <link rel="icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/image/favicon.ico">
    <title>АО «НПФ «Сургутнефтегаз»</title>
<?$APPLICATION->ShowHead();?>

<?
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/page.css");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/template.css");
?>



</head>
<body>
	<div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <div class="wrapper">
        <header id="head" class="head" style="top: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-12 header-col-12">
                        <a href="https://npf-sng.ru/" class="nav__link desktop_logo">
                            <img src="<?=SITE_TEMPLATE_PATH?>/image/logo.svg" alt="">
                        </a>
                        <nav class="nav">
                            <a href="https://npf-sng.ru/" class="nav__link adaptive__logo">
                                <img src="<?=SITE_TEMPLATE_PATH?>/image/logo.svg" alt="">
                            </a>
                            <ul class="nav__list nav__list-middle">
                                <li class="nav__item nav__program-li menu__item"><a href="https://npf-sng.ru/fiz-liz/"
                                        class="nav__link nav__open nav__list-link" data-menu-id="program">Программы</a>
                                    <div class="nav__arrow arrow nav__arrow-program" style="transform: rotate(-45deg);">
                                    </div> 
                                </li>
                                <li class="nav__item nav__results-li menu__item"><a href="https://npf-sng.ru/results/"
                                        class="nav__link nav__open nav__list-link" data-menu-id="results">Показатели
                                        деятельности</a>
                                    <div class="nav__arrow arrow nav__arrow-results" style="transform: rotate(-45deg);">
                                    </div> 

                                </li>
                                <li class="nav__item nav__our-clients-li menu__item"><a
                                        href="https://npf-sng.ru/our-clients/"
                                        class="nav__link nav__open nav__list-link"
                                        data-menu-id="our-clients">Клиентам</a>
                                    <div class="nav__arrow arrow nav__arrow-ourClients"
                                        style="transform: rotate(-45deg);"></div> 

                                </li>
                                <li class="nav__item nav__fond-li menu__item"><a href="https://npf-sng.ru/history/"
                                        class="nav__link nav__open nav__list-link" data-menu-id="fond">О Фонде</a>
                                    
                                    <div class="nav__arrow arrow nav__arrow-fond" style="transform: rotate(-45deg);">
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav__list nav__list-right">
                                <li class="nav__item d-flex">
                                    <div class="nav__social-container">
                                        <a href="tel:88002001429" class="nav__phone-number">
                                            8-800-200-14-29
                                        </a>
                                        <div class="nav__social-box">
                                            <div class="nav__social">
                                                <a href="https://vk.com/npfsng" class="nav__link">
                                                    <img src="<?=SITE_TEMPLATE_PATH?>/image/VK.svg" alt="" class="nav__social-img">
                                                </a>
                                            </div>
                                            <div class="nav__social">
                                                <a href="https://npf-sng.ru/#" class="nav__link nav__search nav__open"
                                                    data-menu-id="search">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="26.979"
                                                        height="25.344" viewBox="0 0 26.979 25.344">
                                                        <g fill="none" stroke="#0069aa" stroke-width="2">
                                                            <circle cx="10.5" cy="10.5" r="10.5" stroke="none"></circle>
                                                            <circle cx="10.5" cy="10.5" r="9.5" fill="none"></circle>
                                                        </g>
                                                        <path
                                                            d="M1.466-.045A1.349,1.349,0,0,1,2.887,1.349l-.271,8.64A1.567,1.567,0,0,1,1.1,11.474,1.349,1.349,0,0,1-.317,10.08l.271-8.64A1.567,1.567,0,0,1,1.466-.045Z"
                                                            transform="matrix(0.602, -0.799, 0.799, 0.602, 16.077, 18.184)"
                                                            fill="#0069aa"></path>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="nav__social">
                                                <a href="https://npf-sng.ru/" class="nav__link callback-link">
                                                    <img src="<?=SITE_TEMPLATE_PATH?>/image/headset_blue.svg" alt="" class="nav__social-img"
                                                        width="26.979" height="25.344">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="nav__list nav__list__lastChild">
                                <li
                                    class="nav__last__child nav__item d-flex flex-column align-items-center justify-content-center">
                                    <a href="https://client.npf-sng.ru/"
                                        class="sng__link-medium sng__link-medium--background mb-2 position-relative nav__lastChild-btn"
                                        target="_blank">
                                        Личный кабинет
                                    </a>
                                    <a href="https://npf-sng.ru/contacts" class="nav__link"
                                        data-menu-id="contacts">Обратиться в Фонд</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="burger-menu">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="23" class="burger-open-svg">
                                <path fill="#0069AA" fill-rule="evenodd"
                                    d="M0 1.5A1.5 1.5 0 0 1 1.508 0h26.984a1.5 1.5 0 1 1 0 3H1.508A1.5 1.5 0 0 1 0 1.5zm0 10c0-.828.665-1.5 1.503-1.5h16.994c.83 0 1.503.666 1.503 1.5 0 .828-.665 1.5-1.503 1.5H1.503C.673 13 0 12.334 0 11.5zm22 0c0-.828.668-1.5 1.505-1.5h4.99a1.5 1.5 0 1 1 0 3h-4.99A1.5 1.5 0 0 1 22 11.5zm-22 10A1.5 1.5 0 0 1 1.508 20h26.984a1.5 1.5 0 1 1 0 3H1.508A1.5 1.5 0 0 1 0 21.5z">
                                </path>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="burger-close-svg">
                                <path fill="#0069AA" fill-rule="evenodd"
                                    d="M14.373 10.84l6.724-6.723c.77-.772.773-2.043-.01-2.826l-.7-.7C19.6-.193 18.34-.194 17.56.58l-6.723 6.725L4.114.58c-.778-.776-2.04-.775-2.826.01l-.7.7c-.783.784-.782 2.055-.01 2.827l6.724 6.724-6.724 6.725c-.772.772-.773 2.043.01 2.826l.7.7c.786.787 2.048.788 2.826.01l6.723-6.723L17.56 21.1c.78.777 2.04.776 2.827-.01l.7-.7c.783-.783.78-2.054.01-2.826l-6.724-6.723z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="panel" class="panel hidden" style="top: 132px;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="fond" class="panel__box">
                            <div class="panel__content">
                                <div class="panel__title">
                                    <div class="panel__title-head">
                                        О фонде
                                    </div>
                                    <div class="panel__title-body"></div>
                                </div>
                                <div class="panel__list">
                                    <div class="panel__body panel__body-fond">
                                        <div class="panel__col">
                                            <div class="panel__item"><a href="https://npf-sng.ru/history/"
                                                    class="panel__link">История</a>
                                                <div class="arrow"></div>
                                            </div>
                                            <div class="panel__item"><a href="https://npf-sng.ru/news/"
                                                    class="panel__link">Новости</a>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="panel__col">
                                            <div class="panel__item"><a href="https://npf-sng.ru/allinfo/"
                                                    class="panel__link">Раскрытие информации</a>
                                                <div class="arrow"></div>
                                            </div>
                                            <div class="panel__item"><a href="https://npf-sng.ru/rekvisit/"
                                                    class="panel__link">Официальные реквизиты</a>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="panel__col">
                                            <div class="panel__item"><a href="https://npf-sng.ru/zakon/"
                                                    class="panel__link">Законодательство</a>
                                                <div class="arrow"></div>
                                            </div>
                                            <div class="panel__item"><a href="https://npf-sng.ru/links/"
                                                    class="panel__link">Полезные ссылки</a>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="panel__col">
                                            <div class="panel__item"><a href="https://npf-sng.ru/safety/"
                                                    class="panel__link">Безопасность в цифровом мире</a>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                        <div class="panel__col">
                                            <div class="panel__item"><a href="https://npf-sng.ru/konkurs/"
                                                    class="panel__link">Конкурс</a>
                                                <div class="arrow"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="program" class="panel__box">
                            <div class="panel__content">
                                <div class="panel__title">
                                    <div class="panel__title-head">
                                        Программы
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="results" class="panel__box">
                            <div class="panel__content">
                                <div class="panel__title">
                                    <div class="panel__title-head">
                                        Показатели деятельности
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="our-clients" class="panel__box">
                            <div class="panel__content">
                                <div class="panel__title">
                                    <div class="panel__title-head">
                                        Клиентам
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        
 <section id="main">

    <?
    $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/font-awesome.css");
    ?>
<div class="bx-breadcrumb" itemprop="http://schema.org/breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<div class="breadcrumbs">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="breadcrumbs__content"><div class="" id="bx_breadcrumb_0" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
							
							<a class="breadcrumbs__link" href="https://npf-sng.ru/allinfo/" title="Раскрытие информации" itemprop="url">Раскрытие информации</a>
							<meta itemprop="position" content="1">
						</div>
			<div class="" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
				<i class="fa fa-angle-right"></i>
				<span class="breadcrumbs__text" itemprop="name">Устав</span>
				<meta itemprop="position" content="2">
			</div></div></div></div></div></div></div> <div class="sng__section">
	<div class="container sng__container">
		<div class="sng__content">
			<div class="row">
				<div class="col-12">
					<div class="sng__box">
						<div class="sng__header">
							<h1 class="sng__title">
								Устав							</h1>
						</div><h6 class="files__title">Действующая редакция:</h6>
 <div class="files__box">
    <div class="files__list ">
                    <div class="files__item">
                <div class="files__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/image/pdf.svg" class="files__img" alt="Устав АО НПФ Сургутнефтегаз (редакция от 22.04.2024)">
                </div>
                <div class="files__attr">
                    <div class="files__name">
                                                <a href="https://npf-sng.ru/upload/medialibrary/70f/nhquxv9ljr9mb8f9526ij4zj8285axv1.pdf" class="files__link" target="_blank" download="">
                            Устав АО НПФ Сургутнефтегаз (редакция от 22.04.2024)                        </a>

        

                    </div>
                    <div class="files__size">538 Кб</div>
                </div>
            </div>
            </div>
</div><h6 class="files__title">Архив:</h6>
<div class="files__box">
    <div class="files__list ">
                    <div class="files__item">
                <div class="files__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/image/pdf.svg" class="files__img" alt="Устав АО НПФ Сургутнефтегаз (редакция от 10.01.2024)">
                </div>
                <div class="files__attr">
                    <div class="files__name">
                                                <a href="https://npf-sng.ru/upload/medialibrary/3ae/bgdxsf1yfxpfpblybwv76cz1sek408ov.pdf" class="files__link" target="_blank" download="">
                            Устав АО НПФ Сургутнефтегаз (редакция от 10.01.2024)                        </a>

        

                    </div>
                    <div class="files__size">5373 Кб</div>
                </div>
            </div>
            </div>
</div><div class="files__box">
    <div class="files__list ">
                    <div class="files__item">
                <div class="files__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/image/pdf.svg" class="files__img" alt="Устав АО НПФ Сургутнефтегаз (редакция от 15.06.2023)">
                </div>
                <div class="files__attr">
                    <div class="files__name">
                                                <a href="https://npf-sng.ru/upload/medialibrary/adb/jwzjcbc0e10vfd0s0t9qpqgabcs8o6x6.pdf" class="files__link" target="_blank" download="">
                            Устав АО НПФ Сургутнефтегаз (редакция от 15.06.2023)                        </a>

        

                    </div>
                    <div class="files__size">913 Кб</div>
                </div>
            </div>
            </div>
</div><div class="files__box">
    <div class="files__list ">
                    <div class="files__item">
                <div class="files__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/image/pdf.svg" class="files__img" alt="Устав АО " НПФ="" Сургутнефтегаз"="" (редакция="" от="" 24.12.2019)"="">
                </div>
                <div class="files__attr">
                    <div class="files__name">
                                                <a href="https://npf-sng.ru/upload/medialibrary/3f5/xu0o6o4ejob9fh0b8qxattp47g6avj2p.pdf" class="files__link" target="_blank" download="">
                            Устав АО "НПФ Сургутнефтегаз" (редакция от 24.12.2019)                        </a>

        

                    </div>
                    <div class="files__size">1350 Кб</div>
                </div>
            </div>
            </div>
</div><div class="files__box">
    <div class="files__list ">
                    <div class="files__item">
                <div class="files__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/image/pdf.svg" class="files__img" alt="Устав АО НПФ Сургутнефтегаз (редакция от 25.07.2018)">
                </div>
                <div class="files__attr">
                    <div class="files__name">
                                                <a href="https://npf-sng.ru/upload/medialibrary/285/gipdnxf4d4pxwcr56bvr5xni90gunc0x.pdf" class="files__link" target="_blank" download="">
                            Устав АО НПФ Сургутнефтегаз (редакция от 25.07.2018)                        </a>

        

                    </div>
                    <div class="files__size">1585 Кб</div>
                </div>
            </div>
            </div>
</div><div class="files__box">
    <div class="files__list ">
                    <div class="files__item">
                <div class="files__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/image/pdf.svg" class="files__img" alt="Устав АО «НПФ «Сургутнефтегаз» (редакция от 08.05.2015)">
                </div>
                <div class="files__attr">
                    <div class="files__name">
                                                <a href="https://npf-sng.ru/upload/medialibrary/64e/nlca5j15eddexks0oyf8c861s0w3daj0.pdf" class="files__link" target="_blank" download="">
                            Устав АО «НПФ «Сургутнефтегаз» (редакция от 08.05.2015)                        </a>

        

                    </div>
                    <div class="files__size">8523 Кб</div>
                </div>
            </div>
            </div>
</div><div class="files__box">
    <div class="files__list ">
                    <div class="files__item">
                <div class="files__icon">
                    <img src="<?=SITE_TEMPLATE_PATH?>/image/pdf.svg" class="files__img" alt="Устав ОАО «НПФ «Сургутнефтегаз»">
                </div>
                <div class="files__attr">
                    <div class="files__name">
                                                <a href="https://npf-sng.ru/upload/medialibrary/f92/pxdvzlnqjtc2vti8oegcxm9c6q8hgl5p.pdf" class="files__link" target="_blank" download="">
                            Устав ОАО «НПФ «Сургутнефтегаз»                        </a>

        

                    </div>
                    <div class="files__size">4924 Кб</div>
                </div>
            </div>
            </div>
</div>                    </div>
				</div>
			</div>
		</div>
		 <div class="sng__right">

    <a href="https://npf-sng.ru/fiz-liz/dogovor-main/" class="banner-1">
        <div class="banner-1__box">
            <img src="<?=SITE_TEMPLATE_PATH?>/image/edit.svg" alt="" class="banner-1__img">
            <div class="banner-1__text">Как стать клиентом Фонда?</div>
            <div class="banner-1__icon"></div>
        </div>
    </a>

	<a href="https://npf-sng.ru/our-clients/ops-to-pds/" class="banner-1">
        <div class="banner-1__box">
            <img src="<?=SITE_TEMPLATE_PATH?>/image/cash5.svg" alt="" class="banner-1__img">
            <div class="banner-1__text">Как перевести пенсионные накопления ОПС в ПДС и получить единовременно?</div>
            <div class="banner-1__icon"></div>
        </div>
    </a>

    <a href="https://npf-sng.ru/pens-calc/" class="banner-1">
        <div class="banner-1__box">
            <img src="<?=SITE_TEMPLATE_PATH?>/image/calculator.svg" alt="" class="banner-1__img">
            <div class="banner-1__text">Калькулятор накоплений</div>
            <div class="banner-1__icon"></div>
        </div>
    </a>


</div>
	</div>
</div></section>

