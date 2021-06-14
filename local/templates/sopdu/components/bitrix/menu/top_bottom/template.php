<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<div class="header-bottom">
<ul class="header-bottom__list">

<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
    <li class="header-bottom__list-item">
        <a href="<?=$arItem["LINK"]?>" class="header-bottom__list-link">
            <span><?=$arItem["TEXT"]?></span>
        </a>
    </li>
	<?/*if($arItem["SELECTED"]):?>
		<li><a href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif*/?>
	
<?endforeach?>

</ul>
</div>
<?endif?>

