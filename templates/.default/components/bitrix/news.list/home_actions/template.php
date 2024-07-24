<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?php if ($arResult['ITEMS']): ?>
    <!-- hot-promo-->
    <div class="hot-promo">
        <div class="container">
            <div class="hot-promo__title">
                <div class="hot-promo__icon">
                    <svg>
                        <use href="/img/icons/sprite.svg#flame"></use>
                    </svg>
                </div><span>АКЦИИ</span>
            </div>
            <div class="hot-promo__carousel">
                <? foreach ($arResult['ITEMS'] as $arItem): ?>
                    <div class="item">
                        <a class="hot-promo__item" href="<?=$arItem['DETAIL_PAGE_URL'];?>">
                            <div class="hot-promo__img"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="">
                                <svg>
                                    <use href="/img/icons/sprite.svg#flame-circle"></use>
                                </svg>
                            </div>
                            <div class="hot-promo__desc">
                                <p class="hot-promo__text"><?=$arItem['NAME'];?> <span><?=$arItem['PREVIEW_TEXT'];?></span></p>
                                <svg>
                                    <use href="/img/icons/sprite.svg#right-arrow"></use>
                                </svg>
                            </div>
                        </a>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
    <!-- end hot-promo-->
<?php endif; ?>