<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
$this->setFrameMode(true);
?>


<div class="hits">
    <div class="container">
        <div class="hits__header">
            <p class="hits__title">Лидеры продаж</p>
            <p class="hits__text">Соотношение цены, качества и сроков строительства загородного дома с гарантией 5 лет.</p>
        </div>
        <!-- category-->
        <div class="category">
            <div class="category__row">
                <? foreach ($arResult['ITEMS'] as $arItem): ?>
                    <?
                    if ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE']) {
                        $discount_percent = floor(100 - ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] * 100 / $arItem['PROPERTIES']['PRICE_STANDART']['VALUE']));
                    }
                    ?>
                    <? $img = CFILE::GetPath(current($arItem['PROPERTIES']['MORE_PHOTO']['VALUE'])); ?>
                    <div class="category__item">
                        <!-- card-->
                        <a class="card" href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
                            <div class="card__header">
                                <div class="card__img"><img src="<?= $img; ?>" alt=""></div>
                                <div class="card__hit">
                                    <svg>
                                        <use href="/img/icons/sprite.svg#star"></use>
                                    </svg>
                                    <span>Лидер продаж</span>
                                </div>
                                <? if ($discount_percent > 0): ?>
                                    <div class="card__discont"><span><?= $discount_percent; ?>%</span></div>
                                    <div class="card__time"><span><?= discount_date_end($arItem['PROPERTIES']['DISCOUNT_END']['VALUE']); ?></span></div>
                                <? endif; ?>
                                <div class="card__info">
                                    <span><?= $arItem['PROPERTIES']['PLOSHAD']['VALUE']; ?> м&sup2;</span>
                                    <span><?= $arItem['PROPERTIES']['ETAZHNOST']['VALUE']; ?></span>
                                    <span><?= $arItem['PROPERTIES']['SIZE']['VALUE']; ?></span>
                                </div>
                            </div>
                            <div class="card__footer">
                                <div class="card__name">
                                    <p><span><?= $arItem['PROPERTIES']['ARTICLE']['VALUE']; ?></span></p>
                                    <p><?= $arItem['NAME']; ?></p>
                                </div>
                                <div class="card__price">
                                    <? if ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE']): ?>
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
            <a class="category__more" href="/catalog/stroitelstvo-domov/#top"><span>Больше домов в каталоге</span>
                <svg>
                    <use href="/img/icons/sprite.svg#right-arrow"></use>
                </svg>
            </a>
        </div>
        <!-- end category-->
    </div>
</div>
<!-- end hits-->