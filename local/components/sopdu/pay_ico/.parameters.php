<?php
    if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
    $arComponentParameters = [
        "GROUPS"        =>  [
            "sopduPayIcoParamSetting"   =>  [
                "NAME"  =>  GetMessage("sopduPayIcoParamSetting")
            ],
            "sopduPayIcoParamPaySystem" =>  [
                "NAME"  =>  GetMessage("sopduPayIcoParamPaySystem")
            ]
        ],
        "PARAMETERS"    =>  [
            "ACTIVE"        =>  [
                "PARENT"    =>  'sopduPayIcoParamSetting',
                "NAME"      =>   GetMessage("sopduPayIcoParamActive"),
                "REFRESH"   =>  'N',
                "TYPE"      =>  'CHECKBOX',
                "DEFAULT"   =>  'Y'
            ],
            "VISA"          =>  [
                "PARENT"    =>  'sopduPayIcoParamPaySystem',
                "NAME"      =>   GetMessage("sopduPayIcoParamVisa"),
                "REFRESH"   =>  'N',
                "TYPE"      =>  'CHECKBOX',
                "DEFAULT"   =>  'Y'
            ],
            "MASTERCARD"    =>  [
                "PARENT"    =>  'sopduPayIcoParamPaySystem',
                "NAME"      =>   GetMessage("sopduPayIcoParamMastercard"),
                "REFRESH"   =>  'N',
                "TYPE"      =>  'CHECKBOX',
                "DEFAULT"   =>  'Y'
            ],
            "APPLEPAY"      =>  [
                "PARENT"    =>  'sopduPayIcoParamPaySystem',
                "NAME"      =>   GetMessage("sopduPayIcoParamApplepay"),
                "REFRESH"   =>  'N',
                "TYPE"      =>  'CHECKBOX',
                "DEFAULT"   =>  'Y'
            ],
            "GOOGLEPAY"     =>  [
                "PARENT"    =>  'sopduPayIcoParamPaySystem',
                "NAME"      =>   GetMessage("sopduPayIcoParamGooglepay"),
                "REFRESH"   =>  'N',
                "TYPE"      =>  'CHECKBOX',
                "DEFAULT"   =>  'Y'
            ]
        ]
    ];
?>