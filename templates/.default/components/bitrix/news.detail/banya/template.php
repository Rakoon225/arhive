<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<!-- product-->
<div class="product">
<div class="container">
  <div class="product__row">
    <div class="product__left">
      <h1 class="product__title"><?=$arResult['NAME'] . ' ' . $arResult['PROPERTIES']['SIZE']['VALUE'] . ' <span>' . $arResult['PROPERTIES']['ARTICLE']['VALUE'] . '</span>';?></h1>
      <!-- product-info-->
      <div class="product-info">
        <div class="product-info__item"><span class="product-info__label">Площадь:</span>
          <p class="product-info__value"><?=$arResult['PROPERTIES']['PLOSHAD']['VALUE'];?> м&sup2;</p>
        </div>
        <div class="product-info__item"><span class="product-info__label">Этажность:</span>
          <p class="product-info__value"><?=$arResult['PROPERTIES']['ETAZHNOST']['VALUE'];?></p>
        </div>
        <div class="product-info__item"><span class="product-info__label">Размер:</span>
          <p class="product-info__value"><?=$arResult['PROPERTIES']['SIZE']['VALUE'];?> м</p>
        </div>
        <div class="product-info__item"><span class="product-info__label">Срок строительства:</span>
          <p class="product-info__value"><?=$arResult['PROPERTIES']['SROK']['VALUE']; ?></p>
        </div>
        <div class="product-info__item"><span class="product-info__label">Комнат:</span>
          <p class="product-info__value"><?=$arResult['PROPERTIES']['KOMNAT']['VALUE'];?></p>
        </div>
        <div class="product-info__item"><span class="product-info__label">Санузлов:</span>
          <p class="product-info__value"><?=$arResult['PROPERTIES']['SANUZLOV']['VALUE'];?></p>
        </div>
      </div>
      <!-- end product-info-->
      <!-- finance-->
      <div class="finance">
        <div class="finance__left">

          <?
            if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'])
            {
              $discount_percent = floor(100 - ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] * 100 / $arResult['PROPERTIES']['PRICE_STANDART']['VALUE']));
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
              <p><?=number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ');?> &#8381;</p>
            <? else: ?>
              <p><?=number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ');?> &#8381;</p>
            <? endif; ?>
          </div>
          
        </div>
        <?
        	$is_credit = $arResult['PROPERTIES']['CREDIT']['VALUE'] == 'Есть';
        	$is_ipoteka = $arResult['PROPERTIES']['IPOTEKA']['VALUE'] == 'Есть';
        	$is_matcap = $arResult['PROPERTIES']['MATKAP']['VALUE'] == 'Есть';
        ?>
        <div class="finance__right">
          <!-- f-howpay-->
          <ul class="f-howpay">
            <li<?=($is_credit ? '' : ' class="disabled"');?>>
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#three_coin"></use>
              </svg><span>кредит</span>
            </li>
            <li<?=($is_ipoteka ? '' : ' class="disabled"');?>>
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#clock_coin"></use>
              </svg><span>Ипотека</span>
            </li>
            <li<?=($is_matcap ? '' : ' class="disabled"');?>>
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
        <? 
          foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $arPhoto): 
            $img = CFile::ResizeImageGet($arPhoto, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
            if (!$img) continue;
        ?>
              <div class="item"><a href="<?=CFILE::GetPath($arPhoto);?>" data-fancybox="product"><img src="<?=$img['src'];?>" alt=""></a></div>
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
        <div class="params__item"><span>Крыша         </span><span><?=$arResult['PROPERTIES']['ROOF']['VALUE'];?></span></div>
        <div class="params__item"><span>Эркер  </span><span><?=$arResult['PROPERTIES']['ERKER']['VALUE'];?></span></div>
        <div class="params__item"><span>Терраса</span><span><?=$arResult['PROPERTIES']['TERRASA']['VALUE'];?></span></div>
        <div class="params__item"><span>Второй свет   </span><span><?=$arResult['PROPERTIES']['SECOND_SVET']['VALUE'];?></span></div>
        <div class="params__item"><span>Балкон</span><span><?=$arResult['PROPERTIES']['BALKON']['VALUE'];?></span></div>
        <div class="params__item"><span>Сауна</span><span><?=$arResult['PROPERTIES']['SAUNA']['VALUE'];?></span></div>
        <div class="params__item"><span>Кукушка</span><span><?=$arResult['PROPERTIES']['KUKUSHKA']['VALUE'];?></span></div>
        <div class="params__item"><span>Два входа</span><span><?=$arResult['PROPERTIES']['TWO_ENTER']['VALUE'];?></span></div>
      </div>
      <!-- end params-->
    </div>
    <div class="desc__right">
      <h2 class="desc__title">О проекте бани</h2>
      <div class="desc__text"> 
        <p><?=$arResult['DETAIL_TEXT'];?></p>
        <?/*<div class="desc__full">
          <p>Современные технологии достигли такого уровня, что базовый вектор развития, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для поэтапного и последовательного развития общества. В целом, конечно, высокое качество позиционных исследований способствует подготовке и реализации вывода текущих активов. Принимая во внимание показатели успешности, высококачественный прототип будущего проекта способствует повышению качества дальнейших направлений развития.</p>
        </div>
      </div><a class="desc__full-toggle" href="#">
        <svg>
          <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#up-arrow"></use>
        </svg><span>Полное описание проекта дома</span></a>
        */?>
    </div>
  </div>
</div>
</div>
<!-- end desc-->
<!-- gallery-->
<div class="gallery">
<div class="container">
  <ul class="gallery__nav tabs-nav">
    <li class="active"><a href="#tab1">Планировки</a></li>
    <li>/</li>
    <li><a href="#tab2">Все фасады</a></li>
  </ul>
</div>
<div class="gallery__content">
  <div class="gallery__tab tab active" id="tab1">
    <? if ($arResult['PROPERTIES']['PLANS']['VALUE']): ?>
      <div class="gallery__row">
        <? 
            foreach ($arResult['PROPERTIES']['PLANS']['VALUE'] as $arPhoto): 
            $img = CFile::ResizeImageGet($arPhoto, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
            if (!$img) continue;
        ?>
            <a class="gallery__item" href="<?=CFILE::GetPath($arPhoto);?>" data-fancybox="gallery1">
                <img src="<?=$img['src'];?>" alt="">
            </a>
        <? endforeach; ?>
      </div>
    <? endif; ?>
  </div>
  <div class="gallery__tab tab" id="tab2">
    <div class="gallery__row">
      <? 
        foreach ($arResult['PROPERTIES']['MORE_PHOTO']['VALUE'] as $arPhoto):
          $img = CFile::ResizeImageGet($arPhoto, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
          if (!$img) continue;
      ?>
        <a class="gallery__item gallery__item--full" href="<?=CFILE::GetPath($arPhoto);?>" data-fancybox="gallery2">
            <img src="<?=$img['src'];?>" alt="">
        </a>
      <? endforeach; ?>
    </div>
  </div>
</div>
</div>
<!-- end gallery-->

    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        "",
        Array(
            "AREA_FILE_SHOW" => "file",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/local/include/seo_text.php"
        )
    );?>

<!-- equipment-->
<div class="equipment">
<div class="container">
  <div class="equipment__row">
    <div class="equipment__left">
      <div class="equipment__header">
        <h2 class="equipment__title">Комплектация</h2>
        <?/*><!-- switch-button-->
        <div class="switch-button"><span class="switch-button__text">Все опции</span>
          <div class="switch-button__toggle">
            <input class="switch-button__input" id="switch" type="checkbox">
            <label class="switch-button__label" for="switch"></label>
          </div><span class="switch-button__text">Только отличия</span>
        </div>
        <!-- end switch-button-->*/?>
      </div>
      <!-- eq-contacts-->
      <div class="eq-contacts"><span class="eq-contacts__label"> Уточнить цену сейчас:</span><a class="eq-contacts__msg" href="#">
          <svg>
            <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#whatsapp"></use>
          </svg></a><a class="eq-contacts__msg" href="#">
          <svg>
            <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#viber"></use>
          </svg></a><a class="eq-contacts__msg" href="#">
          <svg>
            <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#telegram"></use>
          </svg></a><a class="eq-contacts__tel" href="tel:+79251010009">+7 925 101-00-09</a></div>
      <!-- end eq-contacts-->
    </div>
    <div class="equipment__right">
      <p class="equipment__comment"> <span>Комментарий: </span>  Представленные нами цены максимально возможно детализированы, однако требуют уточнения на момент подписания договора. На цену может повлиять как стоимость доставки, рыночная стоимость материалов, так и другие незначительные факторы.</p>
    </div>
  </div>

  <?
      $file_path = $_SERVER['DOCUMENT_ROOT'] . CFILE::GetPath($arResult['PROPERTIES']['FILE']['VALUE']);
      $file_content = file_get_contents($file_path);

      if ($file = fopen($file_path, "r")) {
        $f_counter = 0;
      ?>
        <div class="eq-table">
          <div class="eq-table__header">
            <div class="eq-table__left"><span>комплектации</span></div>
            <div class="eq-table__col">
              <p class="eq-table__name">Стандарт</p>
              <p class="eq-table__price">
                <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
                  <?=number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ');?>  
                <? else: ?>
                  <?=number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ');?>  
                <? endif; ?>
                 <span>&#8381;</span></p>
            </div>
            <div class="eq-table__col">
              <p class="eq-table__name">Комфорт</p>
              <p class="eq-table__price"><?=number_format($arResult['PROPERTIES']['PRICE_COMFORT']['VALUE'], 0, '.', ' ');?> <span>&#8381;      </span></p>
            </div>
            <div class="eq-table__col">
              <p class="eq-table__name">Премиум</p>
              <p class="eq-table__price"><?=number_format($arResult['PROPERTIES']['PRICE_PREMIUM']['VALUE'], 0, '.', ' ');?> <span>&#8381;</span></p>
            </div>
          </div>
          <div class="eq-table__body">
      <?

        while(!feof($file)) {
            $f_counter++;
            $line = fgets($file);

            //if (mb_substr($line, 0) == '|' && mb_substr($line, -1) == '|') continue;

            if (substr_count($line, '|') == 2)
            {
              ?>
                <div class="eq-table__title"> <span><?=str_ireplace('|', '', $line); ?></span></div>
              <?
              continue;
            }

            $explode_line = explode(';', $line);
            ?>

              <div class="eq-table__item">
                <div class="eq-table__left"><span><?=$explode_line[0];?></span></div>
                <div class="eq-table__col">
                  <? if (trim(strtolower($explode_line[1])) == 'да'): ?>
                  <svg>
                    <use href="/local/templates/main/img/icons/sprite.svg#check_icon"></use>
                  </svg>
                  <? else: ?>
                      <svg class="no">
                        <use href="/local/templates/main/img/icons/sprite.svg#icon-close"></use>
                      </svg>
                  <? endif; ?>
                </div>

                <div class="eq-table__col">
                  <? if (trim(strtolower($explode_line[2])) == 'да'): ?>
                  <svg>
                    <use href="/local/templates/main/img/icons/sprite.svg#check_icon"></use>
                  </svg>
                  <? else: ?>
                      <svg class="no">
                        <use href="/local/templates/main/img/icons/sprite.svg#icon-close"></use>
                      </svg>
                  <? endif; ?>
                </div>

                <div class="eq-table__col">
                  <? if (trim(strtolower($explode_line[3])) == 'да'): ?>
                  <svg>
                    <use href="/local/templates/main/img/icons/sprite.svg#check_icon"></use>
                  </svg>
                  <? else: ?>
                      <svg class="no">
                        <use href="/local/templates/main/img/icons/sprite.svg#icon-close"></use>
                      </svg>
                  <? endif; ?>
                </div>
                
              </div>

            <?

        }
        ?>
        </div>
        <div class="eq-table__footer">
            <div class="eq-table__left"><span>Стоимость проекта</span></div>
            <div class="eq-table__col">
              <p class="eq-table__name">Стандарт</p>
              <p class="eq-table__price">
                <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
                  <?=number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ');?>  
                <? else: ?>
                  <?=number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ');?>  
                <? endif; ?>
                 <span>&#8381;</span></p><a class="eq-table__btn" href="#">Выбрать</a>
            </div>
            <div class="eq-table__col">
              <p class="eq-table__name">Комфорт</p>
              <p class="eq-table__price"><?=number_format($arResult['PROPERTIES']['PRICE_COMFORT']['VALUE'], 0, '.', ' ');?> <span>&#8381;      </span></p><a class="eq-table__btn" href="#">Выбрать</a>
            </div>
            <div class="eq-table__col">
              <p class="eq-table__name">Премиум</p>
              <p class="eq-table__price"><?=number_format($arResult['PROPERTIES']['PRICE_PREMIUM']['VALUE'], 0, '.', ' ');?> <span>&#8381;  </span></p><a class="eq-table__btn" href="#">Выбрать        </a>
            </div>
          </div>
        </div>
        <!-- end eq-table-->
        <?
        fclose($file);
    }
  ?>

<?/*
  <!-- eq-table-->
  <div class="eq-table">
    <div class="eq-table__header">
      <div class="eq-table__left"><span>комплектации</span></div>
      <div class="eq-table__col">
        <p class="eq-table__name">Стандарт</p>
        <p class="eq-table__price">
          <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
            <?=number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ');?>  
          <? else: ?>
            <?=number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ');?>  
          <? endif; ?>
           <span>&#8381;</span></p>
      </div>
      <div class="eq-table__col">
        <p class="eq-table__name">Комфорт</p>
        <p class="eq-table__price"><?=number_format($arResult['PROPERTIES']['PRICE_COMFORT']['VALUE'], 0, '.', ' ');?> <span>&#8381;      </span></p>
      </div>
      <div class="eq-table__col">
        <p class="eq-table__name">Премиум</p>
        <p class="eq-table__price"><?=number_format($arResult['PROPERTIES']['PRICE_PREMIUM']['VALUE'], 0, '.', ' ');?> <span>&#8381;</span></p>
      </div>
    </div>
    <div class="eq-table__body">
      <div class="eq-table__item">
        <div class="eq-table__left"><span>Сборка </span></div>
        <div class="eq-table__col">
          <svg>
            <use href="/local/templates/main/img/icons/sprite.svg#check_icon"></use>
          </svg>
        </div>
        <div class="eq-table__col">
          <svg>
            <use href="/local/templates/main/img/icons/sprite.svg#check_icon">           </use>
          </svg>
        </div>
        <div class="eq-table__col">
          <svg>
            <use href="/local/templates/main/img/icons/sprite.svg#check_icon">           </use>
          </svg>
        </div>
      </div>
      <div class="eq-table__item">
        <div class="eq-table__left"><span>Капитальные стены – 200 мм плитный базальтовый утеплитель Rockwool </span></div>
        <div class="eq-table__col">
          <svg class="no">
            <use href="/local/templates/main/img/icons/sprite.svg#icon-close">               </use>
          </svg>
        </div>
        <div class="eq-table__col">
          <svg>
            <use href="/local/templates/main/img/icons/sprite.svg#check_icon">                       </use>
          </svg>
        </div>
        <div class="eq-table__col">
          <svg>
            <use href="/local/templates/main/img/icons/sprite.svg#check_icon">            </use>
          </svg>
        </div>
      </div>
      <div class="eq-table__title"> <span>Внутренние перегородки. Каркас  </span></div>
      <div class="eq-table__item">
        <div class="eq-table__left"><span>Обвязка, лаги пола, черновой пол </span></div>
        <div class="eq-table__col">
          <svg>
            <use href="/local/templates/main/img/icons/sprite.svg#check_icon"></use>
          </svg>
        </div>
        <div class="eq-table__col">
          <svg>
            <use href="/local/templates/main/img/icons/sprite.svg#check_icon">           </use>
          </svg>
        </div>
        <div class="eq-table__col">
          <svg>
            <use href="/local/templates/main/img/icons/sprite.svg#check_icon">   </use>
          </svg>
        </div>
      </div>
    </div>
    <div class="eq-table__footer">
      <div class="eq-table__left"><span>Стоимость проекта</span></div>
      <div class="eq-table__col">
        <p class="eq-table__name">Стандарт</p>
        <p class="eq-table__price">
          <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
            <?=number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ');?>  
          <? else: ?>
            <?=number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ');?>  
          <? endif; ?>
           <span>&#8381;</span></p><a class="eq-table__btn" href="#">Выбрать</a>
      </div>
      <div class="eq-table__col">
        <p class="eq-table__name">Комфорт</p>
        <p class="eq-table__price"><?=number_format($arResult['PROPERTIES']['PRICE_COMFORT']['VALUE'], 0, '.', ' ');?> <span>&#8381;      </span></p><a class="eq-table__btn" href="#">Выбрать</a>
      </div>
      <div class="eq-table__col">
        <p class="eq-table__name">Премиум</p>
        <p class="eq-table__price"><?=number_format($arResult['PROPERTIES']['PRICE_PREMIUM']['VALUE'], 0, '.', ' ');?> <span>&#8381;  </span></p><a class="eq-table__btn" href="#">Выбрать        </a>
      </div>
    </div>
  </div>
  <!-- end eq-table-->
*/?>
  <!-- eq-selected-->
  <div class="eq-selected">
    <div class="eq-selected__left"><span>Выбранная комплектация</span></div>
    <div class="eq-selected__center"><span class="eq-selected__name">Стандарт</span>
      <p class="eq-selected__price">
        <? if ($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
          <?=number_format($arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' ');?>  
        <? else: ?>
          <?=number_format($arResult['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' ');?>  
        <? endif; ?>
        <span>  &#8381;</span>
      </p>
    </div>
    <div class="eq-selected__right"><a class="eq-selected__btn js-modal-show-product" data-id="<?=$arResult['ID'];?>" href="#js-modal-selected"><img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/arrow-right-white.png" alt=""><span>отправить</span></a></div>
  </div>
  <!-- end eq-selected-->
</div>
</div>
<!-- end equipment     -->
    фыв