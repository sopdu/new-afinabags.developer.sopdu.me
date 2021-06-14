<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="breadcrumbs news-breadcrumbs">
    <div class="container">
        <a href="#" class="breadcrumbs-mobile-return">
            <div class="breadcrumbs-mobile-return__icon">
                <svg width="9" height="9" viewBox="0 0 9 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.59375 4.5L1.40625 4.5" stroke="#999999" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.9375 7.03125L1.40625 4.5L3.9375 1.96875" stroke="#999999" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
            <div class="breadcrumbs-mobile-return__text"><span>Назад</span></div>
        </a>
    </div>
</div>
<section class="news">
    <div class="container">
        <div class="news-header">
            <h1 class="news-title"><?=strip_tags($APPLICATION->GetTitle())?></h1>
            <ul class="breadcrumbs-list">
                <li class="breadcrumbs-item">
                    <a href="/" class="breadcrumbs-link"><span>Главная</span></a>
                </li>
                <li class="breadcrumbs-item">
                    <a href="/hews/" class="breadcrumbs-link"><span>Новости</span></a>
                </li>
            </ul>
        </div>
        <div class="news-content">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="news-content-item">
                <div class="news-content-item__image">
                    <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>">
                </div>
                <div class="news-content-item__title"><?=$arItem["NAME"]?></div>
                <div class="news-content-item__date"><?=$arItem["ACTIVE_FROM"]?></div>
            </a>
        <?endforeach;?>
        </div>
    </div>
</section>