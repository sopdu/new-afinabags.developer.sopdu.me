<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if($arParams["ACTIVE"] == 'Y'){
    $arResult = [];
    switch ('Y'){
        case $arParams["APPLEPAY"]:
            $arResult["ApplePay"] = 'Y';
        case $arParams["GOOGLEPAY"]:
            $arResult["GooglePay"] = 'Y';
        case $arParams["MASTERCARD"]:
            $arResult["MasterCard"] = 'Y';
        case $arParams["VISA"]:
            $arResult["Visa"] = 'Y';
    }
    $this->IncludeComponentTemplate();
}
?>