<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
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

<div class="category">

	<div class="view-list">
		<span class="view-list__label"> Вид списка:</span>
		<a class="view-list__btn view-list__btn--two" href="#">
			<span></span>
			<span></span>
		</a>
		<a class="view-list__btn view-list__btn--three active" href="#">
			<span></span>
			<span></span>
			<span></span>
		</a>
	</div>

	<div class="category__row<?/* category__row--half*/ ?>">
		<? foreach ($arResult['ITEMS'] as $arItem): ?>
			<?
			if ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE']) {
				$discount_percent = floor(100 - ($arItem['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] * 100 / $arItem['PROPERTIES']['PRICE_STANDART']['VALUE']));
			}
			?>
			<div class="category__item">
				<!-- card--><a class="card<?/* card--lg*/ ?>" href="<?= $arItem['DETAIL_PAGE_URL']; ?>">
					<div class="card__header">
						<div class="card__img">
							<? $img = CFILE::GetPath(current($arItem['PROPERTIES']['MORE_PHOTO']['VALUE'])); ?>
							<img src="<?= $img; ?>" alt="">
						</div>
						<? if ($arItem['PROPERTIES']['LIDER']['VALUE'] == 'Y'): ?>
							<div class="card__hit">
								<svg>
									<use href="/img/icons/sprite.svg#star"></use>
								</svg><span>Лидер продаж</span>
							</div>
						<? endif; ?>
						<? if ($discount_percent > 0): ?>
							<div class="card__discont"><span><?= $discount_percent; ?>%</span></div>
							<?/*<div class="card__time"><span><?=discount_date_end($arItem['PROPERTIES']['DISCOUNT_END']['VALUE']);?></span></div>*/ ?>
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

	<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
		<?= $arResult["NAV_STRING"] ?>
	<? endif; ?>

</div>