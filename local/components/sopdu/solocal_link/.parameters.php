<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$arComponentParameters = [
    "GROUPS"        =>  [
        "sopduSolocalLinkParamSetting"  =>  [
            "NAME"  =>  GetMessage("sopduSolocalLinkParamSetting")
        ],
        "sopduSolocalLinkParamItem"     =>  [
            "NAME"  =>  GetMessage("sopduSolocalLinkParamItem")
        ],
    ],
    "PARAMETERS"    =>  [
        "ACTIVE"    =>  [
            "PARENT"    =>  'sopduSolocalLinkParamSetting',
            "NAME"      =>   GetMessage("sopduSolocakLinkParamActive"),
            "REFRESH"   =>  'N',
            "TYPE"      =>  'CHECKBOX',
            "DEFAULT"   =>  'Y'
        ],
        "INSTAGRAM" =>  [
            "PARENT"    =>  'sopduSolocalLinkParamItem',
            "NAME"      =>  GetMessage("sopduSolocalLinkParamInstagram"),
            "REFRESH"   =>  'N',
            "TYPE"      =>  'STRING'
        ],
        "VK"        =>  [
            "PARENT"    =>  'sopduSolocalLinkParamItem',
            "NAME"      =>  GetMessage("sopduSolocalLinkParamVk"),
            "REFRESH"   =>  'N',
            "TYPE"      =>  'STRING'
        ],
        "YOUTUBE"   =>  [
            "PARENT"    =>  'sopduSolocalLinkParamItem',
            "NAME"      =>  GetMessage("sopduSolocalLinkParamYoutube"),
            "REFRESH"   =>  'N',
            "TYPE"      =>  'STRING'
        ],
        "FACEBOOK"  =>  [
            "PARENT"    =>  'sopduSolocalLinkParamItem',
            "NAME"      =>  GetMessage("sopduSolocalLinkParamFacebook"),
            "REFRESH"   =>  'N',
            "TYPE"      =>  'STRING'
        ]
    ]
];
?>