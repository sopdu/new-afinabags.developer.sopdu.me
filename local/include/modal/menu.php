<? require_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<? require_once ($_SERVER["DOCUMENT_ROOT"]."/local/class/sopdu.php");?>
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
                            <?/*
                            <div class="menu-modal-list-item__list">
                                <a href="#" class="menu-modal-list-item__list-item">О бренде</a>
                                <a href="#" class="menu-modal-list-item__list-item">Новости</a>
                                <a href="#" class="menu-modal-list-item__list-item">Реквизиты</a>
                            </div>
                            */?>
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "modal", Array(
                                "COMPONENT_TEMPLATE" => "bottom",
                                    "ROOT_MENU_TYPE" => "bottom_afina",	// Тип меню для первого уровня
                                    "MENU_CACHE_TYPE" => "N",	// Тип кеширования
                                    "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
                                    "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
                                    "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
                                    "MAX_LEVEL" => "1",	// Уровень вложенности меню
                                    "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
                                    "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
                                    "DELAY" => "N",	// Откладывать выполнение шаблона меню
                                    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
                                ),
                                false
                            );?>
                        </div>
                    </div>
                    <div class="menu-modal-footer">
                        <div class="menu-modal-footer-top">
                            <div class="menu-modal-footer-top-item">
                                <div class="title">Телефон</div>
                                <div class="value">
                                    <a href="<?=sopdu::phone($_SERVER["DOCUMENT_ROOT"].'/local/include/phone.php')?>">
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            ".default",
                                            array(
                                                "COMPONENT_TEMPLATE" => ".default",
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => "/local/include/phone.php",
                                                "EDIT_TEMPLATE" => "standard.php"
                                            ),
                                            false
                                        );?>
                                    </a>
                                </div>
                            </div>
                            <div class="menu-modal-footer-top-item">
                                <div class="title">Почта</div>
                                <div class="value">
                                    <a href="mailto:<?require ($_SERVER["DOCUMENT_ROOT"].'/local/include/email.php')?>">
                                        <?$APPLICATION->IncludeComponent(
                                            "bitrix:main.include",
                                            ".default",
                                            array(
                                                "COMPONENT_TEMPLATE" => ".default",
                                                "AREA_FILE_SHOW" => "file",
                                                "PATH" => "/local/include/email.php",
                                                "EDIT_TEMPLATE" => "standard.php"
                                            ),
                                            false
                                        );?>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?$APPLICATION->IncludeComponent("sopdu:solocal_link", "modal", Array(
                            "ACTIVE" => "Y",	// Компонет включен
                                "FACEBOOK" => "#",	// Ссылка на Fscebook
                                "INSTAGRAM" => "#",	// Ссылка на Instagram
                                "VK" => "#",	// Ссылка на VK
                                "YOUTUBE" => "#",	// Ссылка на YouTube
                            ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>