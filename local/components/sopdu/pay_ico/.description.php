<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = [
    "NAME"          =>  GetMessage("sopduPayIcoDescName"),
    "DESCRIPTION"   =>  GetMessage("sopduPayIcoDescDescription"),
    "CACHE_PATH"    =>  'Y',
    "PATH"          =>  [
        "ID"        =>  'sopdu',
        "NAME"      =>  GetMessage("sopduPayIcoDescDeveloper"),
    ]
];
?>