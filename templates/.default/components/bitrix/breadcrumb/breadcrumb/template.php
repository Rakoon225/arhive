<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';

//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()

$strReturn .= '<!-- breadcrumbs-->
  <div class="breadcrumbs">
    <div class="container">
      <div class="breadcrumbs__row">
        <div class="breadcrumbs__main"><a href="/">
            <svg>
              <use href="' . SITE_TEMPLATE_PATH . '/img/icons/sprite.svg#home_1_icon"></use>
            </svg></a>
          <div class="breadcrumbs__arrow"><img src="' . SITE_TEMPLATE_PATH . '/img/icons/arrow-left.png" alt=""></div>
        </div>
        <ul class="breadcrumbs__list">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = ($index > 0? '<i class="fa fa-angle-right"></i>' : '');

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li class="breadcrumbs__item"><a href="' . $arResult[$index]['LINK'] . '">' . $title . '</a></li>';
	}
	else
	{
		$strReturn .= '<li class="breadcrumbs__item">' . $title . '</li>';
	}
}

$strReturn .= '</ul>
      </div>
    </div>
  </div>';

return $strReturn;
