<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<!-- category-->
<div class="category">
	<div class="category__row category__row--half">
		<? foreach ($arResult['ITEMS'] as $arItem): ?>
		  <div class="category__item">
		    <!-- card-->
		    <a class="card card--lg" href="<?=$arItem['DETAIL_PAGE_URL'];?>">
		      <div class="card__header">
		        <div class="card__img">
		        	
		        	<? $img = CFILE::GetPath(current($arItem['PROPERTIES']['MORE_PHOTO']['VALUE'])); ?>
		        	<img src="<?=$img;?>" alt="">

		        </div>
		        <? if ($arItem['PROPERTIES']['DOCS']['VALUE'] == 'Готовы'): ?>
			        <div class="card__label">
			          <svg>
			            <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#check_icon"></use>
			          </svg><span>документы готовы</span>
			        </div>
		    	<? endif; ?>
		    	
		    	<?
		            if ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'])
		            {
		              $discount_percent = floor(100 - ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] * 100 / $arItem['PROPERTIES']['PRICE']['VALUE']));
		            }
		          ?>

		        <? if ($discount_percent): ?>
		        	<div class="card__discont"><span><?=$discount_percent; ?>%</span></div>
		        	<div class="card__time"><span><?=discount_date_end($arItem['PROPERTIES']['DISCOUNT_END']['VALUE']);?></span></div>
		        <? endif; ?>
		        <div class="card__info">               
		        	<span><?=$arItem['PROPERTIES']['PLOSHAD']['VALUE'];?> сот</span>
		        	<span><?=$arItem['PROPERTIES']['RAZMER']['VALUE'];?></span>
		        </div>
		      </div>
		      <div class="card__footer">
		        <div class="card__land">
		          <p><?=$arItem['NAME'];?></p>
		        </div>
		        <div class="card__price"> 
		        	<? if ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] > 0): ?>
						<p><?=number_format($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ');?> <span>&#8381;</span></p>
						<p><?=number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ');?> &#8381;</p>
					<? else: ?>
						<p><?=number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ');?> &#8381;</p>
					<? endif; ?>
		        </div>
		      </div>
		  	</a>
		    <!-- end card-->
		  </div>
		<? endforeach; ?>
	</div>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>
<!-- end category-->

<script type="text/javascript">
  ymaps.ready(init);

  function init(){
      // Создание карты.
      var myMap = new ymaps.Map("map", {
        center: [55.76, 37.64],
        zoom: 7
    });
    
    <? foreach ($arResult['ITEMS'] as $arItem): ?>
    	<? $coords = $arItem['PROPERTIES']['MAP']['VALUE']; ?>
      var myGeoObject = new ymaps.GeoObject({
          geometry: {
            type: "Point", // тип геометрии - точка
            coordinates: [<?=$coords; ?>] // координаты точки
          },
          properties: {
          	hintContent: '<?=$arItem['NAME'];?>',
          	balloonContent: '<b><?=$arItem['NAME'];?></b><br/><b>Цена:</b><?=($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] ? number_format($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ') : number_format($arItem['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' '));?> руб.<br/><a href="<?=$arItem['DETAIL_PAGE_URL'];?>">Подробнее</a>'
          }
      });
		// Размещение геообъекта на карте.
      myMap.geoObjects.add(myGeoObject); 
  	<? endforeach; ?>

  }
</script>