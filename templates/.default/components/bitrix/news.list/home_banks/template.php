<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?php if ($arResult['ITEMS']): ?>
    <!-- banks-->
    <div class="banks">
        <div class="container">
            <div class="banks__grid">
                <div class="banks__header">
                    <p class="banks__title">Банки</p>
                    <p class="banks__subtitle">Кредит и ипотека</p>
                </div>
                <? foreach ($arResult['ITEMS'] as $arItem): ?>
                    <div class="banks__item">
                        <!-- bank-link--><a class="bank-link" href="<?=$arItem['DETAIL_PAGE_URL'];?>"><img src="<?=CFILE::GetPath($arItem['PROPERTIES']['LOGO']['VALUE']);?>" alt="">
                            <p><?=$arItem['NAME'];?>
                                <? if ($arItem['PROPERTIES']['SECOND_TEXT']['VALUE']): ?>
                                    <span><?=$arItem['PROPERTIES']['SECOND_TEXT']['VALUE'];?></span>
                                <? endif; ?>
                            </p></a>
                        <!-- end bank-link-->
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
    <!-- end banks-->
<?php endif; ?>