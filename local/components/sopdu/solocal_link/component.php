<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if($arParams["ACTIVE"] == 'Y'){
    $arResult = [
        "FACEBOOK"  =>  $arParams["FACEBOOK"],
        "INSTAGRAM" =>  $arParams["INSTAGRAM"],
        "VK"        =>  $arParams["VK"],
        "YOUTUBE"   =>  $arParams["YOUTUBE"]
    ];
    $this->IncludeComponentTemplate();
}
?>