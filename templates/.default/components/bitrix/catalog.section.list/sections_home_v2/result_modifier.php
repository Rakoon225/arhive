<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['SECTIONS'] as $arSection)
	$sections_id[] = $arSection['ID'];

$arSelect = Array("ID", "NAME", "IBLOCK_SECTION_ID", "IBLOCK_ID", "DETAIL_PAGE_URL", "PROPERTY_*");
$arFilter = Array("IBLOCK_ID"=>$arParams, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "IBLOCK_SECTION_ID" => $sections_id, "PROPERTY_TOP_ANONS_VALUE" => "Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement())
{
 $arFields = $ob->GetFields();
 $arProps = $ob->GetProperties();
 
 $arObject = $arFields;
 foreach ($arProps as $arProp)
 	$arObject['PROPS'][$arProp['CODE']] = $arProp['VALUE'];

 if ($arObject['PROPS']['PRICE_DISCOUNT'])
 {
 	$arObject['DISCOUNT_PERCENT'] = floor(100 - ($arObject['PROPS']['PRICE_DISCOUNT'] * 100 / $arObject['PROPS']['PRICE_STANDART']));
 }

 if ($arObject['PROPS']['DISCOUNT_END'])
 {
    $arObject['DISCOUNT_END'] = discount_date_end($arObject['PROPS']['DISCOUNT_END']);
 }


 $arResult['HOUSES'][$arFields['IBLOCK_SECTION_ID']][] = $arObject;
}

?>