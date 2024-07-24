<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<?
	$arFilter = array(
    	'IBLOCK_ID' => 5, // ID инфоблока
	    'ACTIVE' => 'Y'
	);
	$res = CIBlockElement::GetList(false, $arFilter, array('IBLOCK_ID'));
	if ($el = $res->Fetch())
	    $arResult['CNT_ZEML'] = $el['CNT'];

	$arFilter = array(
    	'IBLOCK_ID' => 4, // ID инфоблока
	    'ACTIVE' => 'Y'
	);
	$res = CIBlockElement::GetList(false, $arFilter, array('IBLOCK_ID'));
	if ($el = $res->Fetch())
	    $arResult['CNT_FUNDAMENT'] = $el['CNT'];
?>