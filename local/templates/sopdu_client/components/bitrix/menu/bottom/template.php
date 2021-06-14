<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <div class="footer-content-top-menu__list">
        <?foreach($arResult as $arItem):?>
            <a href="<?=$arItem["LINK"]?>" class="footer-content-top-menu__list-item"><?=$arItem["TEXT"]?></a>
        <?endforeach;?>
    </div>
<?endif?>