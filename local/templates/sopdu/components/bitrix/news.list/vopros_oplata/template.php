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
<div class="block-info-pay-content">
    <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <div class="block-info-pay-content-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="block-info-pay-content-item__title">
                <span class="block-info-pay-content-item__title-text"><?=$arItem["NAME"]?></span>
                <div class="block-info-pay-content-item__title-icon">
                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.1962 1L7 10L1.80385 1L12.1962 1Z" stroke="black"/>
                    </svg>
                </div>
            </div>
            <div class="block-info-pay-content-item__block">
                <?=$arItem["PREVIEW_TEXT"]?>
            </div>
        </div>
    <?endforeach;?>
</div>