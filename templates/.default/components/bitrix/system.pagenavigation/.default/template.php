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

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<ul class="pagination">

<?if($arResult["bDescPageNumbering"] === true):?>	

	<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<?if($arResult["bSavePage"]):?>
			
			<li class="prev"> <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
		        <svg>
		          <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-left"></use>
		        </svg></a>
		    </li>
		<?else:?>
			
			<?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
				<li class="prev"> <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
			        <svg>
			          <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-left"></use>
			        </svg></a>
			    </li>
			<?else:?>
				<li class="prev"> <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
			        <svg>
			          <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-left"></use>
			        </svg></a>
			    </li>
			<?endif?>
		<?endif?>
	<?else:?>
		<? // начало пред ?>
	<?endif?>

	<?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
		<?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="current"><a><?=$NavRecordGroupPrint?></a></li>
		<?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
			<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a></li>
		<?else:?>
			<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a></li>
		<?endif?>

		<?$arResult["nStartPage"]--?>
	<?endwhile?>

	<?if ($arResult["NavPageNomer"] > 1):?>
		<li class="next"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
	        <svg>
	          <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-right"></use>
	        </svg></a>
	      </li>
	<?else:?>
		<? // след конец ?>
	<?endif?>

<?else:?>


	<?if ($arResult["NavPageNomer"] > 1):?>

		<?if($arResult["bSavePage"]):?>

			<li class="prev"> <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
		        <svg>
		          <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-left"></use>
		        </svg></a>
		    </li>
		<?else:?>
			
			<?if ($arResult["NavPageNomer"] > 2):?>				
				<li class="prev"> <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
			        <svg>
			          <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-left"></use>
			        </svg></a>
			    </li>
			<?else:?>
				<li class="prev"> <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
			        <svg>
			          <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-left"></use>
			        </svg></a>
			    </li>
			<?endif?>

		<?endif?>

	<?else:?>
		<? // начало пред ?>
	<?endif?>

	<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

		<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
			<li class="current"><a><?=$arResult["nStartPage"]?></a></li>
		<?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
			<li><a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a></li>
		<?else:?>
			<li><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a></li>
		<?endif?>
		<?$arResult["nStartPage"]++?>
	<?endwhile?>

	<?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
		<li class="next"><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
	        <svg>
	          <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-right"></use>
	        </svg></a>
	    </li>
	<?else:?>
		<? // след конец ?>
	<?endif?>

<?endif?>

</ul>

<?/*if ($arResult["bShowAll"]):?>
<noindex>
	<?if ($arResult["NavShowAll"]):?>
		|&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=0" rel="nofollow"><?=GetMessage("nav_paged")?></a>
	<?else:?>
		|&nbsp;<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>SHOWALL_<?=$arResult["NavNum"]?>=1" rel="nofollow"><?=GetMessage("nav_all")?></a>
	<?endif?>
</noindex>
<?endif*/?>