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
<section class="extra-news">
    <div class="extra-news-wrap">
        <div class="extra-news-title">Еще новости</div>
        <div class="extra-news-content">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="extra-news-content-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="extra-news-content-item__image">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>" />
                    </div>
                    <div class="extra-news-content-item__title"><?=$arItem["NAME"]?></div>
                    <div class="extra-news-content-item__date"><?=$arItem["DATE_ACTIVE_FROM"]?></div>
                </a>
            <?endforeach;?>
        </div>
    </div>
</section>