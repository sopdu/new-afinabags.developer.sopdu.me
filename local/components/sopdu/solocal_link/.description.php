<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$arComponentDescription = [
    "NAME"          =>  GetMessage("sopduSolocalLinkDescName"),
    "DESCRIPTION"   =>  GetMessage("sopduSolocalLinkDescDescription"),
    "CACHE_PATH"    =>  'Y',
    "PATH"          =>  [
        "ID"        =>  'sopdu',
        "NAME"      =>  GetMessage("sopduSolocalLinkDescDeveloper"),
    ]
];
?>