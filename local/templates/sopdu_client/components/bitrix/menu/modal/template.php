<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="menu-modal-list-item__list">
        <?foreach($arResult as $arItem):?>
            <a href="<?=$arItem["LINK"]?>" class="menu-modal-list-item__list-item"><?=$arItem["TEXT"]?></a>
        <?endforeach;?>
    </div>
<?endif?>