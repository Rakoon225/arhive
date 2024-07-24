<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<? /*foreach ($arResult as $arItem)
{
	echo '<pre>';
	print_r($arItem);
	echo '</pre>';
}*/
?>

<ul class="menu">

<? foreach ($arResult as $arItem): ?>
	<? if ($previous_level && $previous_level > $arItem["DEPTH_LEVEL"]): ?>
			</ul>
		</div>
	<? endif; ?>
	<? if ($arItem['IS_PARENT'] == 1 && $arItem['DEPTH_LEVEL'] == 1 && $arItem['LINK'] == '/catalog/') continue;
	if ($arItem['IS_PARENT'] != 1): ?>
		<li><a href="<?=$arItem['LINK'];?>#top"><?=$arItem['TEXT'];?></a></li>
	<? else: ?>
		<li class="js-menu-toggle"><a href="<?=$arItem['LINK'];?>#top"><?=$arItem['TEXT']; ?>
		    <svg>
		      <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-up"></use>
		    </svg></a>
		  <!-- dropdown-->
		  <div class="dropdown">
		    <ul>
	<? endif; ?>
	<? $previous_level = $arItem['DEPTH_LEVEL']; ?>
<? endforeach; ?>

</ul>

<?endif?>