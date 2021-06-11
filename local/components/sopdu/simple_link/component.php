<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if($arParams["ACTIVE"] == 'Y'){
    if(empty($arParams["TEXT"])){
        echo GetMessage("errorText");
    } else {
        $arResult["TEXT"] = $arParams["TEXT"];
    }
    if(empty($arParams["LINK"])){
        echo GetMessage("errorLink");
    } else {
        $arResult["LINK"] = $arParams["LINK"];
    }
    if(!empty($arParams["TEXT"]) and !empty($arParams["LINK"])){
        $this->IncludeComponentTemplate();
    }
}
?>