<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section class="news-page">
    <div class="container">
        <div class="news-page-wrap">
            <div class="news-page-header">
                <h1 class="news-page-title"><?=$arResult["NAME"]?></h1>
                <ul class="breadcrumbs-list">
                    <li class="breadcrumbs-item">
                        <a href="/" class="breadcrumbs-link"><span>Главная</span></a>
                    </li>
                    <li class="breadcrumbs-item">
                        <a href="/news/" class="breadcrumbs-link"><span>Новости</span></a>
                    </li>
                    <li class="breadcrumbs-item">
                        <a href="#" class="breadcrumbs-link"><span><?=$arResult["NAME"]?></span></a>
                    </li>
                </ul>
            </div>
            <div class="news-page-slider owl-carousel">
                <?if(!empty($arResult["PREVIEW_PICTURE"]["SRC"])):?>
                    <div class="news-page-slider-item">
                        <img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arResult["PREVIEW_PICTURE"]["ALT"]?>">
                    </div>
                <?endif;?>
                <?if(!empty($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"][0])):?>
                    <?foreach ($arResult["PROPERTIES"]["MORE_PHOTO"]["VALUE"] as $morePhoto):?>
                        <div class="news-page-slider-item">
                            <img src="<?=CFile::GetPath($morePhoto)?>" alt="<?=$arResult["NAME"]?>">
                        </div>
                    <?endforeach;?>
                <?endif;?>
            </div>
            <?if($arResult["PROPERTIES"]["NEW_BAGS"]["VALUE_XML_ID"] == 'Y'):?>
                <div class="news-page-slider-description">Фото новых сумок афина</div>
            <?endif;?>
            <div class="news-page-content">
                <?=$arResult["DETAIL_TEXT"]?>
            </div>
            <div class="news-page-content-date"><?=$arResult["ACTIVE_FROM"]?></div>
        </div>
    </div>
</section>
<?$APPLICATION->IncludeComponent("bitrix:news.list", "rand", Array(
    "COMPONENT_TEMPLATE" => ".default",
    "IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
    "IBLOCK_ID" => "9",	// Код информационного блока
    "NEWS_COUNT" => "4",	// Количество новостей на странице
    "SORT_BY1" => "RAND",	// Поле для первой сортировки новостей
    "SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    "FILTER_NAME" => "",	// Фильтр
    "FIELD_CODE" => array(	// Поля
        0 => "",
        1 => "ID",
        2 => "CODE",
        3 => "XML_ID",
        4 => "NAME",
        5 => "TAGS",
        6 => "SORT",
        7 => "PREVIEW_TEXT",
        8 => "PREVIEW_PICTURE",
        9 => "DETAIL_TEXT",
        10 => "DETAIL_PICTURE",
        11 => "DATE_ACTIVE_FROM",
        12 => "ACTIVE_FROM",
        13 => "DATE_ACTIVE_TO",
        14 => "ACTIVE_TO",
        15 => "SHOW_COUNTER",
        16 => "SHOW_COUNTER_START",
        17 => "IBLOCK_TYPE_ID",
        18 => "IBLOCK_ID",
        19 => "IBLOCK_CODE",
        20 => "IBLOCK_NAME",
        21 => "IBLOCK_EXTERNAL_ID",
        22 => "DATE_CREATE",
        23 => "CREATED_BY",
        24 => "CREATED_USER_NAME",
        25 => "TIMESTAMP_X",
        26 => "MODIFIED_BY",
        27 => "USER_NAME",
        28 => "",
    ),
    "PROPERTY_CODE" => array(	// Свойства
        0 => "",
        1 => "NEW_BAGS",
        2 => "LINK1",
        3 => "LINK2",
        4 => "",
    ),
    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
    "PARENT_SECTION" => "",	// ID раздела
    "PARENT_SECTION_CODE" => "",	// Код раздела
    "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
    "DISPLAY_DATE" => "N",	// Выводить дату элемента
    "DISPLAY_NAME" => "N",	// Выводить название элемента
    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
    "PAGER_TITLE" => "Новости",	// Название категорий
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "SET_STATUS_404" => "N",	// Устанавливать статус 404
    "SHOW_404" => "N",	// Показ специальной страницы
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
),
    false
);?>