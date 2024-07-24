<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<!-- catalog-->
<div class="catalog">
	<div class="container">
		<? foreach ($arResult['ITEMS'] as $arItem): ?>
		  	<a class="catalog__section" href="<?=$arItem['DETAIL_PAGE_URL'];?>">
			    <div class="catalog__info">
			    	<? if ($arItem['PROPERTIES']['TIME_READING']['VALUE']): ?>
			      		<div class="catalog__dur"><span><?=$arItem['PROPERTIES']['TIME_READING']['VALUE'];?></span></div>
			      	<? endif; ?>
			      <h2 class="catalog__title"><?=$arItem['NAME'];?></h2>
			      <div class="catalog__desc">
			        <?=$arItem['~PREVIEW_TEXT'];?>
			      </div>
			    </div>
			    <div class="catalog__img"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt=""></div>
			</a>
	    <? endforeach; ?>
	  
	  	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<?=$arResult["NAV_STRING"]?>
		<?endif;?>

	</div>
</div>
<!-- end catalog-->
