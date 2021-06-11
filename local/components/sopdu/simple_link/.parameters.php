<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true)die();
$arComponentParameters = [
    "GROUPS"        =>  [
        "sopduSimpleLinkParamSetting"   =>  [
            "NAME"  => GetMessage("sopduSimpleLinkParamSetting")
        ],
        "sopduSimpleLinkParamItem"      =>  [
            "NAME"  =>  GetMessage("sopduSimpleLinkParamItem")
        ]
    ],
    "PARAMETERS"    =>  [
        "ACTIVE"    =>  [
            "PARENT"    =>  'sopduSimpleLinkParamSetting',
            "NAME"      =>   GetMessage("sopduSimpleLinkParamActive"),
            "REFRESH"   =>  'N',
            "TYPE"      =>  'CHECKBOX',
            "DEFAULT"   =>  'Y'
        ],
        "TEXT"      =>  [
            "PARENT"    =>  'sopduSimpleLinkParamItem',
            "NAME"      =>  GetMessage("sopduSimpleLinkParamText"),
            "REFRESH"   =>  'N',
            "TYPE"      =>  'STRING'
        ],
        "LINK"      =>  [
            "PARENT"    =>  'sopduSimpleLinkParamItem',
            "NAME"      =>  GetMessage("sopduSimpleLinkParamLink"),
            "REFRESH"   =>  'N',
            "TYPE"      =>  'STRING'
        ]
    ]
];
?>