<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<!-- found-menu-->
<div class="found-menu">
<ul class="found-menu__row">
	<? foreach ($arResult['ITEMS'] as $arItem): ?>
  	<li class="found-menu__item">
  		<a href="<?=$arItem['DETAIL_PAGE_URL'];?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="">
    		<h2 class="found-menu__title"><?=$arItem['NAME'];?></h2>
    	</a>
    </li>
  <? endforeach; ?>
  
</ul>
</div>
<!-- end found-menu-->
