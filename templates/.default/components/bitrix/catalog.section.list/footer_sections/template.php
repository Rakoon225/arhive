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

<? foreach ($arResult['NEW_SECTIONS'] as $arSection): ?>
	<div class="f-menu__section">
	  <h2 class="f-menu__title"><a href="<?=$arSection['SECTION_PAGE_URL'];?>"><?=$arSection['NAME'];?></a></h2>
	  	<?  if ($arSection['CHILDS']): ?>
		  	<ul class="f-menu__list">
			  	<?
			  		foreach ($arSection['CHILDS'] as $arChild)
			    		echo '<li><a href="' . $arChild['SECTION_PAGE_URL'] . '">' . $arChild['NAME'] . '</a></li>';
			    ?>
		  	</ul>
	    <? endif; ?>
	</div>
<? endforeach; ?>