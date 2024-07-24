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
<? 
  foreach ($arResult['SECTIONS'] as $arSection): 
    if ($arSection['ELEMENT_CNT'] < 1) continue; 
?>
<div class="catalog">
 <div class="container">
	<div class="catalog__section">
        <div class="catalog__info">
          <div class="catalog__qnt"><span><?=$arSection['ELEMENT_CNT'];?></span></div>
          <h2 class="catalog__title"><?=$arSection['NAME'];?></h2>
          <div class="catalog__desc">
            <?=$arSection['DESCRIPTION'];?>
          </div>
        </div>
        <? if ($arResult['HOUSES'][$arSection['ID']]): ?>
        <div class="catalog__gallery">
          <!-- catalog-carousel-->
          <div class="catalog-carousel">
          	<? foreach ($arResult['HOUSES'][$arSection['ID']] as $arObject): ?>
            <div class="item"> 
              <!-- card--><a class="card card--lg" href="<?=$arObject['DETAIL_PAGE_URL'];?>">
                <div class="card__header">
                  <div class="card__img">
                    <? $img = CFILE::GetPath(current($arObject['PROPS']['MORE_PHOTO'])); ?>
                    <img src="<?=$img;?>" alt="">
                  </div>
                  <div class="card__label">
                    <svg>
                      <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#check_icon"></use>
                    </svg><span>Цена / Качество  </span>
                  </div>
	                <? if ($arObject['DISCOUNT_PERCENT']): ?>
	                  	<div class="card__discont"><span><?=$arObject['DISCOUNT_PERCENT'];?>%</span></div>
	                  	<div class="card__time"><span><?=$arObject['DISCOUNT_END'];?></span></div>
	              	<? endif; ?>
                  <div class="card__info">               <span><?=$arObject['PROPS']['PLOSHAD'];?> м&sup2;</span><span><?=$arObject['PROPS']['ETAZHNOST'];?></span><span><?=$arObject['PROPS']['SIZE'];?></span></div>
                </div>
                <div class="card__footer">
                  <div class="card__name">
                    <p><?=$arObject['PROPS']['ARTICLE'];?></p>
                    <p><?=$arObject['NAME'];?></p>
                  </div>
                  <div class="card__price"> 
                  	<? if ($arObject['PROPS']['PRICE_DISCOUNT']): ?>
                  		<p><?=number_format($arObject['PROPS']['PRICE_DISCOUNT'], 0, '.', ' ');?> <span>&#8381;</span></p>
	                    <p><?=number_format($arObject['PROPS']['PRICE_STANDART'], 0, '.', ' ');?> &#8381;</p>
                  	<? else: ?>
                  		<p><?=number_format($arObject['PROPS']['PRICE_STANDART'], 0, '.', ' ');?> &#8381;</p>
                  	<? endif; ?>


                    
                  </div>
                </div></a>
              <!-- end card-->
            </div>
        	<? endforeach; ?>
          </div>
          <!-- end catalog-carousel-->
        </div>
    	<? endif; ?>
        <div class="catalog__footer"><a class="catalog__btn" href="<?=$arSection['SECTION_PAGE_URL'];?>"><img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/arrow-right-white-lg.png" alt=""><span>все ваши бани</span></a></div>
      </div>
<? endforeach; ?>