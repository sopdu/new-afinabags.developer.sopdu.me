<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
/*
use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css?ver=371827");
Asset::getInstance()->addJs("https://api-maps.yandex.ru/2.1/?apikey=0b886222-0a21-49e1-af1e-8dc7946f21ba&lang=ru_RU");
*/
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>
        <?
            use Bitrix\Main\Page\Asset;
            Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/main.css?ver=371827");
            Asset::getInstance()->addJs("https://api-maps.yandex.ru/2.1/?apikey=0b886222-0a21-49e1-af1e-8dc7946f21ba&lang=ru_RU");
        ?>
    </head>
    <body>
        <?$APPLICATION->ShowPanel()?>
        <div class="search-modal">
            <div class="search-modal-container">
                <div class="search-modal-close"></div>
                <div class="search-modal-wrap">
                    <div class="search-modal-wrap-rel">
                        <div class="search-modal-close-icon">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="1.70711" y1="1.29289" x2="31.7067" y2="31.2925" stroke="black" stroke-width="2"/>
                                <line x1="0.754319" y1="31.2929" x2="30.754" y2="1.29327" stroke="black" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="search-modal-wrap-rel-container">
                            <div class="search-modal-title">Поиск</div>
                            <div class="search-input-wrap">
                                <input type="text" class="search-input" placeholder="Введите название сумки">
                                <div class="search-input-loop-icon">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5938 23.4375C19.0303 23.4375 23.4375 19.0303 23.4375 13.5938C23.4375 8.1572 19.0303 3.75 13.5938 3.75C8.1572 3.75 3.75 8.1572 3.75 13.5938C3.75 19.0303 8.1572 23.4375 13.5938 23.4375Z" stroke="#1A1A1A" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20.554 20.5547L26.2493 26.2501" stroke="#1A1A1A" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <div class="search-input-control">
                                    <div class="search-input-clear">
                                        <svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <line x1="1.35355" y1="0.646447" x2="13.3535" y2="12.6464" stroke="#999999"/>
                                            <line x1="0.831017" y1="12.6464" x2="12.831" y2="0.646466" stroke="#999999"/>
                                        </svg>
                                    </div>
                                    <div class="search-input-find">Найти</div>
                                </div>
                            </div>
                            <div class="search-modal-catalog">
                                <div class="search-modal-catalog-title">Новинки</div>
                                <div class="search-modal-catalog-wrap">

                                    <div class="catalog-item">
                                        <div class="catalog-item-wrap">
                                            <div class="catalog-item-label">
                                                <span>NEW</span> <div class="catalog-item-label-triangle"></div>
                                            </div>
                                            <div class="catalog-item-favorite">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 25.3125C15 25.3125 3.28125 18.75 3.28125 10.7813C3.28149 9.37282 3.76952 8.00794 4.66236 6.91866C5.5552 5.82938 6.79774 5.08295 8.17874 4.80627C9.55973 4.52959 10.9939 4.73974 12.2375 5.40099C13.481 6.06224 14.4572 7.13377 15 8.43341C15.5428 7.13377 16.5189 6.06224 17.7625 5.40099C19.0061 4.73974 20.4403 4.52959 21.8213 4.80627C23.2023 5.08295 24.4448 5.82938 25.3376 6.91866C26.2305 8.00794 26.7185 9.37282 26.7188 10.7813C26.7188 18.75 15 25.3125 15 25.3125Z" stroke="#999999" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <div class="catalog-item-image catalog-item-image-slider owl-carousel">
                                                <div class="catalog-item-image-item">
                                                    <img src="./images/catalog-item.jpg" alt="">
                                                </div>
                                                <div class="catalog-item-image-item">
                                                    <img src="./images/catalog-item.jpg" alt="">
                                                </div>
                                                <div class="catalog-item-image-item">
                                                    <img src="./images/catalog-item.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="catalog-item-text">
                                            <div class="catalog-item-text-title">Модель 519 (гладкая)</div>
                                            <div class="catalog-item-text-price">8 999 ₽</div>
                                        </div>
                                    </div>
                                    <div class="catalog-item">
                                        <div class="catalog-item-wrap">
                                            <div class="catalog-item-label">
                                                <span>NEW</span> <div class="catalog-item-label-triangle"></div>
                                            </div>
                                            <div class="catalog-item-favorite">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15 25.3125C15 25.3125 3.28125 18.75 3.28125 10.7813C3.28149 9.37282 3.76952 8.00794 4.66236 6.91866C5.5552 5.82938 6.79774 5.08295 8.17874 4.80627C9.55973 4.52959 10.9939 4.73974 12.2375 5.40099C13.481 6.06224 14.4572 7.13377 15 8.43341C15.5428 7.13377 16.5189 6.06224 17.7625 5.40099C19.0061 4.73974 20.4403 4.52959 21.8213 4.80627C23.2023 5.08295 24.4448 5.82938 25.3376 6.91866C26.2305 8.00794 26.7185 9.37282 26.7188 10.7813C26.7188 18.75 15 25.3125 15 25.3125Z" stroke="#999999" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                            </div>
                                            <div class="catalog-item-image catalog-item-image-slider owl-carousel">
                                                <div class="catalog-item-image-item">
                                                    <img src="./images/catalog-item.jpg" alt="">
                                                </div>
                                                <div class="catalog-item-image-item">
                                                    <img src="./images/catalog-item.jpg" alt="">
                                                </div>
                                                <div class="catalog-item-image-item">
                                                    <img src="./images/catalog-item.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="catalog-item-text">
                                            <div class="catalog-item-text-title">Модель 519 (гладкая)</div>
                                            <div class="catalog-item-text-price">8 999 ₽</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-modal ">
            <div class="menu-modal-container">
                <div class="menu-modal-close"></div>
                <div class="menu-modal-wrap">
                    <div class="menu-modal-wrap-rel">
                        <div class="menu-modal-close-icon">
                            <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="1.70711" y1="1.29289" x2="31.7067" y2="31.2925" stroke="black" stroke-width="2"/>
                                <line x1="0.754319" y1="31.2929" x2="30.754" y2="1.29327" stroke="black" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="menu-modal-wrap-rel-container">

                            <section class="menu-block">
                                <div class="container">
                                    <a href="#" class="menu-block-item">
                                        <div class="menu-block-item__image">
                                            <img src="./images/sumki.png" alt="">
                                        </div>
                                        <div class="menu-block-item__text">Все сумки</div>
                                    </a>
                                    <a href="#" class="menu-block-item">
                                        <div class="menu-block-item__image">
                                            <img src="./images/new.png" alt="">

                                        </div>
                                        <div class="menu-block-item__text">Новинки</div>
                                    </a>
                                    <a href="#" class="menu-block-item">
                                        <div class="menu-block-item__image">
                                            <img src="./images/sumki3.png" alt="">

                                        </div>
                                        <div class="menu-block-item__text">Сумки</div>
                                    </a>
                                    <a href="#" class="menu-block-item">
                                        <div class="menu-block-item__image">
                                            <img src="./images/sumki4.png" alt="">

                                        </div>
                                        <div class="menu-block-item__text">Рюкзаки</div>
                                    </a>
                                    <a href="#" class="menu-block-item">
                                        <div class="menu-block-item__image">
                                            <img src="./images/access.png" alt="">

                                        </div>
                                        <div class="menu-block-item__text">Аксессуары</div>
                                    </a>
                                </div>
                            </section>
                            <div class="menu-modal-list">
                                <div class="menu-modal-list-item">
                                    <div class="menu-modal-list-item__title">Каталог
                                        <span class="menu-modal-list-item__title-icon">
                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.6292 0.750001L7 10.5L1.37083 0.75L12.6292 0.750001Z" stroke="#D5D7DC" stroke-width="0.5"/>
</svg>

                            </span></div>
                                    <div class="menu-modal-list-item__list">
                                        <a href="#" class="menu-modal-list-item__list-item">Все сумки</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Новинки</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Сумки</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Рюкзаки</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Аксессуары</a>
                                    </div>
                                </div>
                                <div class="menu-modal-list-item">
                                    <div class="menu-modal-list-item__title">Клиентам
                                        <span class="menu-modal-list-item__title-icon">
                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.6292 0.750001L7 10.5L1.37083 0.75L12.6292 0.750001Z" stroke="#D5D7DC" stroke-width="0.5"/>
</svg>

                            </span></div>
                                    <div class="menu-modal-list-item__list">
                                        <a href="#" class="menu-modal-list-item__list-item">Доставка</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Обмен и возврат</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Оплата</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Вопросы и ответы</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Система лояльности</a>
                                    </div>
                                </div>
                                <div class="menu-modal-list-item">
                                    <div class="menu-modal-list-item__title">AFINA
                                        <span class="menu-modal-list-item__title-icon">
                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12.6292 0.750001L7 10.5L1.37083 0.75L12.6292 0.750001Z" stroke="#D5D7DC" stroke-width="0.5"/>
</svg>

                            </span>
                                    </div>
                                    <div class="menu-modal-list-item__list">
                                        <a href="#" class="menu-modal-list-item__list-item">О бренде</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Новости</a>
                                        <a href="#" class="menu-modal-list-item__list-item">Реквизиты</a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-modal-footer">
                                <div class="menu-modal-footer-top">
                                    <div class="menu-modal-footer-top-item">
                                        <div class="title">Телефон</div>
                                        <div class="value"><a href="tel:+7 000 000-00-00">+7 000 000-00-00</a></div>
                                    </div>
                                    <div class="menu-modal-footer-top-item">
                                        <div class="title">Почта</div>
                                        <div class="value"><a href="mailto:info@afinabags.ru">info@afinabags.ru</a></div>
                                    </div>
                                </div>
                                <div class="menu-modal-footer-social">
                                    <a href="#" class="menu-modal-footer-social-item">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.49981 2.00351C9.29468 2.00351 9.51904 2.00351 10.2482 2.0596C12.0992 2.11569 12.9405 3.01312 12.9966 4.80799C13.0527 5.53716 13.0527 5.70543 13.0527 7.5003C13.0527 9.29517 13.0527 9.51953 12.9966 10.1926C12.9405 11.9875 12.0431 12.8849 10.2482 12.941C9.51904 12.9971 9.35077 12.9971 7.49981 12.9971C5.70494 12.9971 5.48058 12.9971 4.8075 12.941C2.95654 12.8849 2.1152 11.9875 2.05911 10.1926C2.00302 9.46344 2.00302 9.29517 2.00302 7.5003C2.00302 5.70543 2.00302 5.48107 2.05911 4.80799C2.1152 3.01312 3.01263 2.11569 4.8075 2.0596C5.48058 2.00351 5.70494 2.00351 7.49981 2.00351ZM7.49981 0.769531C5.64885 0.769531 5.42449 0.769531 4.75141 0.825621C2.28347 0.9378 0.937312 2.28395 0.825133 4.7519C0.769043 5.42498 0.769043 5.64934 0.769043 7.5003C0.769043 9.35126 0.769043 9.57562 0.825133 10.2487C0.937312 12.7166 2.28347 14.0628 4.75141 14.175C5.42449 14.2311 5.64885 14.2311 7.49981 14.2311C9.35077 14.2311 9.57513 14.2311 10.2482 14.175C12.7162 14.0628 14.0623 12.7166 14.1745 10.2487C14.2306 9.57562 14.2306 9.35126 14.2306 7.5003C14.2306 5.64934 14.2306 5.42498 14.1745 4.7519C14.0623 2.28395 12.7162 0.9378 10.2482 0.825621C9.57513 0.769531 9.35077 0.769531 7.49981 0.769531ZM7.49981 4.02274C5.59276 4.02274 4.02225 5.59325 4.02225 7.5003C4.02225 9.40735 5.59276 10.9779 7.49981 10.9779C9.40686 10.9779 10.9774 9.40735 10.9774 7.5003C10.9774 5.59325 9.40686 4.02274 7.49981 4.02274ZM7.49981 9.74389C6.26584 9.74389 5.25622 8.73427 5.25622 7.5003C5.25622 6.26633 6.26584 5.25671 7.49981 5.25671C8.73379 5.25671 9.7434 6.26633 9.7434 7.5003C9.7434 8.73427 8.73379 9.74389 7.49981 9.74389ZM11.0896 3.1253C10.6408 3.1253 10.3043 3.46184 10.3043 3.91056C10.3043 4.35927 10.6408 4.69581 11.0896 4.69581C11.5383 4.69581 11.8748 4.35927 11.8748 3.91056C11.8748 3.46184 11.5383 3.1253 11.0896 3.1253Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="menu-modal-footer-social-item">
                                        <svg width="18" height="10" viewBox="0 0 18 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.8768 6.27177C15.4126 6.78537 15.9782 7.26855 16.4588 7.83394C16.6711 8.0852 16.872 8.34444 17.0258 8.63603C17.2437 9.05051 17.0464 9.50663 16.6678 9.53137L14.3144 9.53032C13.7075 9.57975 13.2233 9.3399 12.8161 8.93247C12.4903 8.60666 12.1886 8.25992 11.8753 7.92311C11.7468 7.78547 11.6124 7.65594 11.4518 7.55354C11.1306 7.34884 10.8517 7.4115 10.6681 7.74043C10.4811 8.07501 10.4387 8.44545 10.4203 8.8183C10.3951 9.36232 10.2276 9.50535 9.67098 9.53026C8.48138 9.58533 7.35238 9.40866 6.30355 8.81951C5.37887 8.30015 4.66185 7.56692 4.03772 6.73687C2.82262 5.12058 1.89204 3.34451 1.0557 1.5187C0.867443 1.10734 1.00513 0.88653 1.46747 0.878694C2.23518 0.864044 3.00281 0.865097 3.77144 0.877641C4.08347 0.882132 4.29003 1.05781 4.41052 1.3472C4.82588 2.34983 5.33413 3.30375 5.97208 4.18795C6.14198 4.42334 6.31522 4.65877 6.56188 4.82445C6.83479 5.0079 7.04258 4.9471 7.17096 4.64864C7.25242 4.4594 7.28811 4.25556 7.30647 4.0529C7.3673 3.3556 7.37531 2.65947 7.26864 1.96462C7.20314 1.53096 6.95434 1.25022 6.51355 1.16817C6.28862 1.12633 6.3221 1.04415 6.43101 0.918123C6.62015 0.700752 6.79807 0.56543 7.15272 0.56543H9.81236C10.2311 0.646549 10.324 0.831212 10.3814 1.2448L10.3836 4.14505C10.3791 4.30515 10.4651 4.78031 10.7589 4.88627C10.994 4.96172 11.149 4.77706 11.2901 4.63071C11.9268 3.96723 12.3813 3.18311 12.7873 2.37117C12.9675 2.01415 13.1225 1.64339 13.2726 1.27292C13.3839 0.998034 13.5584 0.862774 13.8738 0.868751L16.4336 0.870982C16.5095 0.870982 16.5863 0.872066 16.6598 0.884424C17.0911 0.956592 17.2094 1.13875 17.0761 1.55224C16.8662 2.20098 16.4578 2.74162 16.0585 3.28473C15.6316 3.86458 15.175 4.42461 14.7517 5.0079C14.3627 5.54064 14.3936 5.80912 14.8768 6.27177Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="menu-modal-footer-social-item">
                                        <svg width="19" height="15" viewBox="0 0 19 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.6316 2.43384L14.6316 2.43387L14.6411 2.4346C15.2421 2.48083 15.5603 2.59487 15.7355 2.69923C15.8791 2.78478 16.0058 2.90892 16.1268 3.18306C16.2637 3.49297 16.3806 3.97054 16.4545 4.71984C16.5277 5.46108 16.5514 6.37858 16.5514 7.52958C16.5514 8.68038 16.5277 9.60313 16.4544 10.3509C16.3803 11.1073 16.263 11.5931 16.1249 11.9087C16.0021 12.1894 15.8762 12.3088 15.743 12.3871C15.5792 12.4834 15.2721 12.5917 14.6793 12.6221L14.6729 12.6225C12.0378 12.7689 6.12121 12.7692 3.47228 12.6234C2.88114 12.5764 2.56675 12.4634 2.39308 12.3599C2.24949 12.2744 2.12274 12.1502 2.00173 11.8761C1.86492 11.5662 1.74801 11.0886 1.67404 10.3393C1.60087 9.59809 1.57715 8.68059 1.57715 7.52958C1.57715 6.37858 1.60087 5.46108 1.67404 4.71984C1.74801 3.97054 1.86492 3.49297 2.00173 3.18306C2.12274 2.90892 2.24949 2.78478 2.39308 2.69923C2.56823 2.59487 2.88652 2.48083 3.48748 2.4346L3.48748 2.43463L3.497 2.43384C6.11024 2.21607 12.0183 2.21607 14.6316 2.43384ZM0.0771484 7.52958C0.0771484 12.1729 0.451612 13.8955 3.37243 14.1202C6.06857 14.2699 12.06 14.2699 14.7561 14.1202C17.677 13.9704 18.0514 12.1729 18.0514 7.52958C18.0514 2.88623 17.677 1.1637 14.7561 0.939017C12.06 0.714338 6.06857 0.714338 3.37243 0.939017C0.451612 1.1637 0.0771484 2.88623 0.0771484 7.52958ZM7.5405 10.1638C7.20805 10.33 6.81689 10.0883 6.81689 9.71659V5.3432C6.81689 4.97151 7.20805 4.72976 7.5405 4.89598L11.9139 7.08268C12.2824 7.26694 12.2824 7.79284 11.9139 7.97711L7.5405 10.1638Z" fill="white"/>
                                        </svg>
                                    </a>
                                    <a href="#" class="menu-modal-footer-social-item">
                                        <svg width="7" height="15" viewBox="0 0 7 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.92989 5.25769H0.359375V7.50128H1.92989V14.232H4.54741V7.50128H6.43202L6.64143 5.25769H4.54741V4.30416C4.54741 3.79935 4.65211 3.57499 5.12326 3.57499H6.64143V0.770508H4.65211C2.76749 0.770508 1.92989 1.66794 1.92989 3.35064V5.25769Z" fill="white"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>