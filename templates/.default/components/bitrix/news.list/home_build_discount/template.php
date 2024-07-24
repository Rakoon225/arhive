<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="promo__footer">
  <div class="tab js-houses active">
    <!-- promo-carousel-->
    <div class="promo-carousel">
    	<? foreach ($arResult['ITEMS'] as $arItem): ?>
    		<?
	            if ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'])
	            {
	              $discount_percent = floor(100 - ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] * 100 / $arItem['PROPERTIES']['PRICE_STANDART']['VALUE']));
	            }
	          ?>
	      <div class="item"> 
	        <!-- card--><a class="card" href="<?=$arItem['DETAIL_PAGE_URL'];?>">
	          <div class="card__header">
              <? $img = CFILE::GetPath(current($arItem['PROPERTIES']['MORE_PHOTO']['VALUE'])); ?>
	            <div class="card__img"><img src="<?=$img;?>" alt=""></div>
	            <div class="card__label">
	              <svg>
	                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#check_icon"></use>
	              </svg><span>Цена / Качество  </span>
	            </div>
	            <? if ($discount_percent > 0): ?>
		            <div class="card__discont"><span><?=$discount_percent;?>%</span></div>
		            <div class="card__time"><span><?=discount_date_end($arItem['PROPERTIES']['DISCOUNT_END']['VALUE']);?></span></div>
		        <? endif; ?>
	            <div class="card__info">
	                <span><?=$arItem['PROPERTIES']['PLOSHAD']['VALUE']; ?> м&sup2;</span>
	                <span><?=$arItem['PROPERTIES']['ETAZHNOST']['VALUE'];?></span>
	                <span><?=$arItem['PROPERTIES']['SIZE']['VALUE'];?></span>
	            </div>
	          </div>
	          <div class="card__footer">
	            <div class="card__name">
	              <p><?=$arItem['PROPERTIES']['ARTICLE']['VALUE'];?></span></p>
	              <p><?=$arItem['NAME'];?></p>
	            </div>
	            <div class="card__price"> 
	              	<? if ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
		              <p><?=number_format($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ');?> <span>&#8381;</span></p>
		              <p><?=number_format($arItem['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ');?> &#8381;</p>
		            <? else: ?>
		              <p><?=number_format($arItem['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ');?> &#8381;</p>
		            <? endif; ?>
	            </div>
	          </div>
          </a>
	        <!-- end card-->
	      </div>
      	<? endforeach; ?>
    </div>
    <!-- end promo-carousel--><a class="promo__btn" href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/arrow-right-white-md.png" alt=""><span>Все дома</span></a>
  </div>

  <div class="tab js-bathhouses">
    <!-- promo-carousel-->
    <div class="promo-carousel">
      <div class="item"> 
        <!-- card--><a class="card" href="#">
          <div class="card__header">
            <div class="card__img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/img2.jpg" alt=""></div>
            <div class="card__label">
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#check_icon"></use>
              </svg><span>Цена / Качество  </span>
            </div>
            <div class="card__discont"><span>09%</span></div>
            <div class="card__time"><span>25/13:45:54</span></div>
            <div class="card__info">               <span>120 м&sup2;</span><span>1 + М</span><span>10 х 8</span></div>
          </div>
          <div class="card__footer">
            <div class="card__name">
              <p>ДМ-К-<span>07</span></p>
              <p>Дом из бруса</p>
            </div>
            <div class="card__price"> 
              <p>3 150 000 <span>&#8381;</span></p>
              <p>3 290 000 &#8381;</p>
            </div>
          </div></a>
        <!-- end card-->
      </div>
      <div class="item"> 
        <!-- card--><a class="card" href="#">
          <div class="card__header">
            <div class="card__img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/img3.jpg" alt=""></div>
            <div class="card__label">
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#check_icon"></use>
              </svg><span>Цена / Качество  </span>
            </div>
            <div class="card__discont"><span>12%</span></div>
            <div class="card__time"><span>25/13:45:54</span></div>
            <div class="card__info">               <span>210 м&sup2;</span><span>1 + М</span><span>10 х 8</span></div>
          </div>
          <div class="card__footer">
            <div class="card__name">
              <p>ДМ-К-<span>41</span></p>
              <p>Каменный дом</p>
            </div>
            <div class="card__price"> 
              <p>4 650 000 <span>&#8381;</span></p>
              <p>4 970 000 &#8381;</p>
            </div>
          </div></a>
        <!-- end card-->
      </div>
      <div class="item"> 
        <!-- card--><a class="card" href="#">
          <div class="card__header">
            <div class="card__img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/img1.jpg" alt=""></div>
            <div class="card__label">
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#check_icon"></use>
              </svg><span>Цена / Качество  </span>
            </div>
            <div class="card__discont"><span>07%</span></div>
            <div class="card__time"><span>25/13:45:54</span></div>
            <div class="card__info">               <span>143 м&sup2;</span><span>1 + М</span><span>10 х 8</span></div>
          </div>
          <div class="card__footer">
            <div class="card__name">
              <p>ДМ-К-<span>308</span></p>
              <p>Каркасный дом</p>
            </div>
            <div class="card__price"> 
              <p>2 780 000 <span>&#8381;</span></p>
              <p>2 890 000 &#8381;</p>
            </div>
          </div></a>
        <!-- end card-->
      </div>
      <div class="item"> 
        <!-- card--><a class="card" href="#">
          <div class="card__header">
            <div class="card__img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/img1.jpg" alt=""></div>
            <div class="card__label">
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#check_icon"></use>
              </svg><span>Цена / Качество  </span>
            </div>
            <div class="card__discont"><span>07%</span></div>
            <div class="card__time"><span>25/13:45:54</span></div>
            <div class="card__info">               <span>143 м&sup2;</span><span>1 + М</span><span>10 х 8</span></div>
          </div>
          <div class="card__footer">
            <div class="card__name">
              <p>ДМ-К-<span>308</span></p>
              <p>Каркасный дом</p>
            </div>
            <div class="card__price"> 
              <p>2 780 000 <span>&#8381;</span></p>
              <p>2 890 000 &#8381;</p>
            </div>
          </div></a>
        <!-- end card-->
      </div>
      <div class="item"> 
        <!-- card--><a class="card" href="#">
          <div class="card__header">
            <div class="card__img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/img2.jpg" alt=""></div>
            <div class="card__label">
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#check_icon"></use>
              </svg><span>Цена / Качество  </span>
            </div>
            <div class="card__discont"><span>09%</span></div>
            <div class="card__time"><span>25/13:45:54</span></div>
            <div class="card__info">               <span>120 м&sup2;</span><span>1 + М</span><span>10 х 8</span></div>
          </div>
          <div class="card__footer">
            <div class="card__name">
              <p>ДМ-К-<span>07</span></p>
              <p>Дом из бруса</p>
            </div>
            <div class="card__price"> 
              <p>3 150 000 <span>&#8381;</span></p>
              <p>3 290 000 &#8381;</p>
            </div>
          </div></a>
        <!-- end card-->
      </div>
      <div class="item"> 
        <!-- card--><a class="card" href="#">
          <div class="card__header">
            <div class="card__img"><img src="<?=SITE_TEMPLATE_PATH;?>/img/img3.jpg" alt=""></div>
            <div class="card__label">
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#check_icon"></use>
              </svg><span>Цена / Качество  </span>
            </div>
            <div class="card__discont"><span>12%</span></div>
            <div class="card__time"><span>25/13:45:54</span></div>
            <div class="card__info">               <span>210 м&sup2;</span><span>1 + М</span><span>10 х 8</span></div>
          </div>
          <div class="card__footer">
            <div class="card__name">
              <p>ДМ-К-<span>41</span></p>
              <p>Каменный дом</p>
            </div>
            <div class="card__price"> 
              <p>4 650 000 <span>&#8381;</span></p>
              <p>4 970 000 &#8381;</p>
            </div>
          </div></a>
        <!-- end card-->
      </div>
    </div>
    <!-- end promo-carousel--><a class="promo__btn" href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/arrow-right-white-md.png" alt=""><span>Все Бани</span></a>
  </div>
</div>