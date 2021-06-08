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