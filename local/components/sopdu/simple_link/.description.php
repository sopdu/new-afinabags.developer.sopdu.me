<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = [
    "NAME"          =>  GetMessage("sopduSimpleLinkDescName"),
    "DESCRIPTION"   =>  GetMessage("sopduSimpleLinkDescDescription"),
    "CACHE_PATH"    =>  'Y',
    "PATH"          =>  [
        "ID"        =>  'sopdu',
        "NAME"      =>  GetMessage("sopduSimpleLinkDescDeveloper"),
    ]
];
?>