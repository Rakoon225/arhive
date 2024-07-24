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

$arViewModeList = $arResult['VIEW_MODE_LIST'];
?>
<ul class="cat-menu">
	<? 
		$i = 0;
		foreach ($arResult['SECTIONS'] as $arSection): 
		$i++;
	?>
	<li>
		<a href="<?=$arSection['SECTION_PAGE_URL'];?>"><?=($arSection['NAME'] == 'Строительство домов' ? 'Дома' : 'Бани');?><span><?=$arSection['ELEMENT_CNT'];?></span>
		<? if ($i == 1): ?>
	    	<p> <img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/arr-right-lg.png" alt="">все ваши дома</p>
		<? endif; ?>
		</a>
	</li>
	<? endforeach; ?>
	<li><a href="/fundament/">Фундаменты<span><?=($arResult['CNT_FUNDAMENT'] ? $arResult['CNT_FUNDAMENT'] : '0');?></span></a></li>
	<li><a href="/zemelnye-uchastki/">ЗЕМЛЯ<span><?=($arResult['CNT_ZEML'] ? $arResult['CNT_ZEML'] : '0');?></span></a></li>
</ul>