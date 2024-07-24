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
<!-- product-->
  <div class="product">
    <div class="container">
      <div class="product__row">
        <div class="product__left">
          <h1 class="product__title"><?=$arResult['NAME'];?></h1>
          <p class="product__id">ID объекта: <span><?=$arResult['PROPERTIES']['OBJECT_ID']['VALUE'];?></span></p>
          <!-- product-info-->
          <div class="product-info">
            <div class="product-info__item"><span class="product-info__label">Площадь:</span>
              <p class="product-info__value"><?=$arResult['PROPERTIES']['PLOSHAD']['VALUE'];?> сот</p>
            </div>
            <div class="product-info__item"><span class="product-info__label">Размер:</span>
              <p class="product-info__value"><?=$arResult['PROPERTIES']['RAZMER']['VALUE'];?> м</p>
            </div>
          </div>
          <!-- end product-info-->
          <!-- finance-->
          <div class="finance">
            <div class="finance__left">
            	<?
	            if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'])
	            {
	              $discount_percent = floor(100 - ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] * 100 / $arResult['PROPERTIES']['PRICE']['VALUE']));
	            }
	          ?>
	          <? if ($discount_percent): ?>
	              <!-- discount-->
	              <div class="discount">
	                <div class="discount__qnt"><span><?=$discount_percent;?>%</span></div>
	                <div class="discount__time"><span><?=discount_date_end($arResult['PROPERTIES']['DISCOUNT_END']['VALUE']);?></span></div>
	              </div>
	              	<!-- end discount-->
          		<? endif; ?>
              <div class="finance__price"> 
                <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
	              <p><?=number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ');?> <span>&#8381;</span></p>
	              <p><?=number_format($arResult['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ');?> &#8381;</p>
	            <? else: ?>
	              <p><?=number_format($arResult['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' ');?> &#8381;</p>
	            <? endif; ?>
              </div>
            </div>
            <?
            	$is_credit = $arResult['PROPERTIES']['CREDIT']['VALUE'];
            	$is_matkap = $arResult['PROPERTIES']['MATKAP']['VALUE'];
            	$is_ipoteka = $arResult['PROPERTIES']['IPOTEKA']['VALUE'];
            ?>
            <div class="finance__right">
              <!-- f-howpay-->
              <ul class="f-howpay">
                <li<?=($is_credit == 'Нет' ? ' class="disabled"' : '');?>>
                  <svg>
                    <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#three_coin"></use>
                  </svg><span>кредит</span>
                </li>
                <li<?=($is_ipoteka == 'Нет' ? ' class="disabled"' : '');?>>
                  <svg>
                    <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#clock_coin"></use>
                  </svg><span>Ипотека</span>
                </li>
                <li<?=($is_matkap == 'Нет' ? ' class="disabled"' : '');?>>
                  <svg>
                    <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#moms_capital"></use>
                  </svg><span>Материнский капитал</span>
                </li>
              </ul>
              <!-- end f-howpay-->
            </div>
          </div>
          <!-- end finance-->
        </div>
        <div class="product__right">
          <!-- product-carousel-->
          <div class="product-carousel">
          	<? foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $arPhoto): ?>
        		<? $img = CFILE::GetPath($arPhoto); ?>
            	<div class="item"><img src="<?=$img;?>" alt=""></div>
            <? endforeach; ?>
          </div>
          <!-- end product-carousel-->
        </div>
      </div>
    </div>
  </div>
  <!-- end product-->
  <!-- desc-->
  <div class="desc">
    <div class="container">
      <div class="desc__row">
        <div class="desc__left">
          <!-- params-->
          <div class="params">
            <div class="params__item"><span>Подъездные пути         </span><span><?=$arResult['PROPERTIES']['PODEZD']['VALUE'];?></span></div>
            <div class="params__item"><span>Документы   </span><span><?=$arResult['PROPERTIES']['DOCS']['VALUE'];?></span></div>
            <div class="params__item"><span>Свет</span><span><?=$arResult['PROPERTIES']['SVET']['VALUE'];?></span></div>
            <div class="params__item"><span>Собственников   </span><span><?=$arResult['PROPERTIES']['OWNER']['VALUE'];?></span></div>
            <div class="params__item"><span>Газ</span><span><?=$arResult['PROPERTIES']['GAZ']['VALUE'];?></span></div>
            <div class="params__item"><span>Обременение </span><span><?=$arResult['PROPERTIES']['OBREMENENIE']['VALUE'];?></span></div>
            <div class="params__item"><span>Вода</span><span><?=$arResult['PROPERTIES']['VODA']['VALUE'];?></span></div>
          </div>
          <!-- end params-->
        </div>
        <div class="desc__right">
          <h2 class="desc__title">О земельном участке</h2>
          <div class="desc__text"> 
            <p><?=$arResult['DETAIL_TEXT'];?></p>

            <?/*<div class="desc__full">
              <p>Современные технологии достигли такого уровня, что базовый вектор развития, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поэтапного и последовательного развития общества. В целом, конечно, высокое качество позиционных исследований способствует подготовке и реализации вывода текущих активов. Принимая во внимание показатели успешности, высококачественный прототип будущего проекта способствует повышению качества дальнейших направлений развития.</p>
            </div>
          </div><a class="desc__full-toggle" href="#">
            <svg>
              <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#up-arrow"></use>
            </svg><span>Полное описание проекта дома</span></a>*/?>
        </div>
      </div>
    </div>
  </div>
  <!-- end desc-->
  <!-- callback-->
  <div class="callback">
    <div class="container">
      <div class="callback__inner">
        <div class="callback__row">
          <div class="callback__left">
            <p class="callback__title">Купить землю</p>
            <p class="callback__text">Оставьте ваш телефон и мы вместе построим дом вашей мечты.</p>
          </div>
          <div class="callback__center">
            <div class="callback__desc">
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#smartphone_2"></use>
              </svg>
              <p>Перезвоните мне. <br>обсудим дом моей мечты.</p>
            </div>
          </div>
          <div class="callback__right">
            <!-- callback-form-->
            <form class="callback-form" action="">
              <div class="callback-form__inputs">
                <input class="phone" type="tel" name="phone" placeholder="+7 (000) 000 - 00-00">
                <!-- callback-time-->
                <div class="callback-time">
                  <div class="callback-time__left">   
                    <input class="time" type="number" name="hour_start" step="1" min="0" max="23" placeholder="00">
                    <input class="time" type="number" name="minute_start" step="1" min="0" max="59" placeholder="00">
                  </div>
                  <div class="callback-time__right">
                    <input class="time" type="number" name="house_end" step="1" min="0" max="23" placeholder="00">
                    <input class="time" type="number" name="minute_end" step="1" min="0" max="59" placeholder="00">
                  </div>
                </div>
                <!-- end callback-time-->
              </div>
              <input type="hidden" name="object_id" value="<?=$arResult['PROPERTIES']['OBJECT_ID']['VALUE'];?>" />
              <button class="callback-form__btn" type="submit"> <img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/arrow-right-white.png" alt=""><span>отправить</span></button>
            </form>
            <!-- end callback-form-->
          </div>
        </div>
        <!-- callback-success-->
        <div class="callback-success">
          <div class="callback-success__wrap">
            <p class="callback-success__title">Отправлено</p>
            <p class="callback-success__text">Спасибо, ваше письмо отправлено. Мы постараемся связаться с вами как можно скорее для осуществления вашей мечты. </p>
          </div>
        </div>
        <!-- end callback-success-->
      </div>
    </div>
  </div>
  <!-- end callback-->
  <!-- parcel-map-->
  <div class="parcel-map">
    <div class="container">
      <h2 class="parcel-map__title">Земельный участок на карте</h2>
    </div>
    	<div class="parcel-map__map" id="map">
    		
    	</div>
  </div>
  <!-- end parcel-map -->
  <!-- gallery-->
  <div class="gallery">
    <div class="container">
      <ul class="gallery__nav tabs-nav">
        <li class="active"><a href="#tab1">Планы</a></li>
        <li>/</li>
        <li><a href="#tab2">Фото</a></li>
      </ul>
    </div>
    <div class="gallery__content">
      <div class="gallery__tab tab active" id="tab1">
        <div class="gallery__row">
        	<? foreach ($arResult['PROPERTIES']['PLANS']['VALUE'] as $arPhoto): ?>
        		<? 
        			$img = CFILE::GetPath($arPhoto);
        		?>
          		<div class="gallery__item gallery__item--full"><img src="<?=$img;?>" alt=""></div>
          	<? endforeach; ?>
        </div>
      </div>
      <div class="gallery__tab tab" id="tab2">
        <div class="gallery__row">
        	<? foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $arPhoto): ?>
        		<? $img = CFILE::GetPath($arPhoto); ?>
          		<div class="gallery__item gallery__item--full"><img src="<?=$img;?>" alt=""></div>
          	<? endforeach; ?>
          
        </div>
      </div>
    </div>
  </div>
  <!-- end gallery-->

  <? $coords = $arResult['PROPERTIES']['MAP']['VALUE']; ?>
  <script type="text/javascript">
  ymaps.ready(init);

  function init(){
      // Создание карты.
      var myMap = new ymaps.Map("map", {
        center: [<?=$coords;?>],
        zoom: 8
    });
    
      var myGeoObject = new ymaps.GeoObject({
          geometry: {
            type: "Point", // тип геометрии - точка
            coordinates: [<?=$coords; ?>] // координаты точки
          },
          properties: {
          	hintContent: '<?=$arResult['NAME'];?>',
          	balloonContent: '<b><?=$arResult['NAME'];?></b><br/><b>Цена:</b><?=($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] ? number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ') : number_format($arResult['PROPERTIES']['PRICE']['VALUE'], 0, '.', ' '));?> руб.'
          }
      });
		// Размещение геообъекта на карте.
      myMap.geoObjects.add(myGeoObject); 

  }
</script>