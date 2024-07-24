<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
    global $APPLICATION;
    $cp = $this->__component; // объект компонента

    if (isset($arResult['SECTION_INFO']))
        $APPLICATION->AddChainItem($arResult['SECTION_INFO']['name'], $arResult['SECTION_INFO']['url']);

    if (isset($arResult['MY_TITLE'])) {
        $APPLICATION->AddChainItem($arResult['MY_TITLE'], "");
    }

if (isset($arResult['BROWSER_TITLE'])) {
    $APPLICATION->SetTitle($arResult['BROWSER_TITLE']);
}
?>
