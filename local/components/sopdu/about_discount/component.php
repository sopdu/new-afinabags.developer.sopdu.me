<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if(!empty($_SESSION["sopdu"]["aboutDiscount"]["email"])){
    echo GetMessage("sopduAboutDiscountTemplateSessionEmail");
}
if(!empty($_POST["624afcde4919170f71516ad0bde9ac84"])){
    if(strpos($_POST["624afcde4919170f71516ad0bde9ac84"], '@') !== false){
        CModule::IncludeModule("iblock");
        $zapros = CIBlockElement::GetList(
            [],
            [
                "IBLOCK_ID" =>  1,
                "NAME"      =>  $_POST["624afcde4919170f71516ad0bde9ac84"]
            ],
            false,
            false,
            ["ID"]
        );
        if($zapros->fetch()){
            $emailBlock = 'Y';
        } else {
            $emailBlock = 'N';
        }
        if(!empty($_SESSION["sopdu"]["aboutDiscount"]["email"])){
            echo GetMessage("sopduAboutDiscountTemplateSessionEmail");
        }
        if($emailBlock == 'N'){
            $_SESSION["sopdu"]["aboutDiscount"]["email"] = $_POST["624afcde4919170f71516ad0bde9ac84"];
            $element = new CIBlockElement;
            $element->Add([
                "IBLOCK_ID" =>  1,
                "NAME"      =>  $_POST["624afcde4919170f71516ad0bde9ac84"]
            ]);
        } else {
            if(empty($_SESSION["sopdu"]["aboutDiscount"]["email"])) {
                echo GetMessage("sopduAboutDiscountTemplateSessionEmail");
            }
        }
    } else {
        echo GetMessage("sopduAboutDiscountTemplateError");
    }
    unset($_POST["624afcde4919170f71516ad0bde9ac84"]);
}
$this->IncludeComponentTemplate();
?>