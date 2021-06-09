<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if(!empty($_POST)){
    echo '<pre>'; print_r($_POST); '</pre>';
}

$this->IncludeComponentTemplate();
?>