<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
$this->setFrameMode(true);
?>
<div class="promo__big">
  <div class="tab js-houses active">
    <!-- promo-bg-carousel-->
    <div class="promo-bg-carousel">
      <? foreach ($arResult['ITEMS'] as $arItem): ?>
        <div class="item">
          <!-- card--><a class="card card--lg" href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
            <div class="card__header">
              <? $img = CFILE::GetPath(current($arItem['PROPERTIES']['MORE_PHOTO']['VALUE'])); ?>
              <div class="card__img"><img src="<?= $img; ?>" alt=""></div>
              <? if ($arItem['PROPERTIES']['LIDER']['VALUE'] == 'Y'): ?>
                <div class="card__hit">
                  <svg>
                    <use href="img/icons/sprite.svg#star"></use>
                  </svg><span>Лидер продаж</span>
                </div>
              <? endif; ?>
              <?
              // PRICE_DISCOUNT_COMFORT - комфорт, PRICE_DISCOUNT - стандарт
              // PRICE_COMFORT - комфорт, PRICE_STANDART - стандарт
              if ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE']) {
                $discount_percent = floor(100 - ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] * 100 / $arItem['PROPERTIES']['PRICE_STANDART']['VALUE']));
              }
              if ($arItem['PROPERTIES']['DISCOUNT_END']['VALUE']) {
                $check_time = strtotime($arItem['PROPERTIES']['DISCOUNT_END']['VALUE'] . ' 23:59:59') - time();
                $days = floor($check_time / 86400);
                $hours = floor(($check_time % 86400) / 3600);
                $minutes = floor(($check_time % 3600) / 60);
                $seconds = $check_time % 60;
              }
              ?>
              <? if ($discount_percent > 0): ?>
                <div class="card__discont"><span><?= $discount_percent; ?>%</span></div>
                <div class="card__time"><span><?= discount_date_end($arItem['PROPERTIES']['DISCOUNT_END']['VALUE']); ?></span></div>
              <? endif; ?>
              <div class="card__info">
                <span><?= $arItem['PROPERTIES']['PLOSHAD']['VALUE']; ?> м&sup2;</span><span><?= $arItem['PROPERTIES']['ETAZHNOST']['VALUE']; ?></span><span><?= $arItem['PROPERTIES']['SIZE']['VALUE']; ?></span>
              </div>
            </div>
            <div class="card__footer">
              <div class="card__name">
                <p><?= $arItem['PROPERTIES']['ARTICLE']['VALUE']; ?></p>
                <p><?= $arItem['NAME']; ?></p>
              </div>
              <div class="card__price">
                <? if ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] > 0): ?>
                  <p><?= number_format($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'], 0, '.', ' '); ?> <span>&#8381;</span></p>
                  <p><?= number_format($arItem['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' '); ?> &#8381;</p>
                <? else: ?>
                  <p><?= number_format($arItem['PROPERTIES']['PRICE_STANDART']['VALUE'], 0, '.', ' '); ?> &#8381;</p>
                <? endif; ?>
              </div>
            </div>
          </a>
          <!-- end card-->
        </div>
      <? endforeach; ?>
    </div>
    <!-- end promo-bg-carousel-->
  </div>
  <div class="tab js-bathhouses">
    <!-- promo-bg-carousel-->
    <div class="promo-bg-carousel">
      <div class="item">
        <!-- card--><a class="card card--lg" href="#">
          <div class="card__header">
            <div class="card__img"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/img4.jpg" alt=""></div>
            <div class="card__label">
              <svg>
                <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#check_icon"></use>
              </svg><span>Цена / Качество </span>
            </div>
            <div class="card__discont"><span>09%</span></div>
            <div class="card__time"><span>25/13:45:54</span></div>
            <div class="card__info"> <span>120 м&sup2;</span><span>1 + М</span><span>10 х 8</span></div>
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
          </div>
        </a>
        <!-- end card-->
      </div>
      <div class="item">
        <!-- card--><a class="card card--lg" href="#">
          <div class="card__header">
            <div class="card__img"><img src="img/img2.jpg" alt=""></div>
            <div class="card__label">
              <svg>
                <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#check_icon"></use>
              </svg><span>Цена / Качество </span>
            </div>
            <div class="card__discont"><span>09%</span></div>
            <div class="card__time"><span>25/13:45:54</span></div>
            <div class="card__info"> <span>120 м&sup2;</span><span>1 + М</span><span>10 х 8</span></div>
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
          </div>
        </a>
        <!-- end card-->
      </div>
    </div>
    <!-- end promo-bg-carousel-->
  </div>
</div>