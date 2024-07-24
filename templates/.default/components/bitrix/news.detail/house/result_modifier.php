<?php
    if (!$new_title = $arResult['IPROPERTY_VALUES']['ELEMENT_META_TITLE'])
    {
        $new_title = $arResult['NAME'] . ' ' . $arResult['PROPERTIES']['SIZE']['VALUE'] . ' ' . $arResult['PROPERTIES']['ARTICLE']['VALUE'];
        $browser_title = $arResult['NAME'] . ' / ' . $arResult['PROPERTIES']['SIZE']['VALUE'] . ' м. / Проект "' . $arResult['PROPERTIES']['ARTICLE']['VALUE'] . '" / Цена от ' . $arResult['PROPERTIES']['PRICE_DISCOUNT']['VALUE'] . ' руб.';
    }

    $APPLICATION->SetTitle($new_title);

    $cp = $this->__component; // объект компонента

    $section_id = $arResult['IBLOCK_SECTION_ID'];
    $arFilter = Array('IBLOCK_ID'=>$arParams['IBLOCK_ID'], 'ID' => $section_id);
    $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, false);
    while($ar_result = $db_list->GetNext())
    {
        $section_info = [
            'url' => $ar_result['SECTION_PAGE_URL'],
            'name' => $ar_result['NAME']
        ];
    }


    /* Банки */

    $arSelect = Array("ID", "NAME", "PROPERTY_LOGO", "PROPERTY_SECOND_TEXT", "DETAIL_PAGE_URL");
    $arFilter = Array("IBLOCK_ID" => 10, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $banki[$arFields['ID']] = [
            'NAME' => $arFields['NAME'],
            'LOGO' => $arFields['PROPERTY_LOGO_VALUE'],
            'SECOND_TEXT' => $arFields['PROPERTY_SECOND_TEXT_VALUE'],
            'DETAIL_PAGE_URL' => $arFields['DETAIL_PAGE_URL']
        ];
    }

    /* Акции */

    $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_PAGE_URL");
    $arFilter = Array("IBLOCK_ID" => 9, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $akcii[$arFields['ID']] = [
            'NAME' => $arFields['NAME'],
            'PREVIEW_PICTURE' => $arFields['PREVIEW_PICTURE'],
            'PREVIEW_TEXT' => $arFields['PREVIEW_TEXT'],
            'DETAIL_PAGE_URL' => $arFields['DETAIL_PAGE_URL']
        ];
    }

    /* Отзывы */

    $arSelect = Array("ID", "NAME", "PREVIEW_PICTURE", "PREVIEW_TEXT", "DETAIL_PAGE_URL");
    $arFilter = Array("IBLOCK_ID" => 11, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_ELEMENT_ID_VALUE" => $arResult['ID']);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $reviews[$arFields['ID']] = [
            'NAME' => $arFields['NAME'],
            'PREVIEW_PICTURE' => $arFields['PREVIEW_PICTURE'],
            'DETAIL_PAGE_URL' => $arFields['DETAIL_PAGE_URL']
        ];
    }

    if (is_object($cp))
    {
        // добавим в arResult компонента два поля - MY_TITLE
        $cp->arResult['MY_TITLE'] = $new_title;
        $cp->arResult['BROWSER_TITLE'] = $browser_title;
        $cp->arResult['SECTION_INFO'] = $section_info;

        $cp->arResult['BANKI'] = $banki;
        $cp->arResult['AKCII'] = $akcii;
        $cp->arResult['REVIEWS'] = $reviews;

        $cp->SetResultCacheKeys(array('MY_TITLE', 'BROWSER_TITLE', 'SECTION_INFO'));
        // сохраним их в копии arResult, с которой работает шаблон, если модуль main меньше 10.0
        if (!isset($arResult['MY_TITLE']))
        {
            $arResult['BROWSER_TITLE'] = $cp->arResult['BROWSER_TITLE'];
            $arResult['MY_TITLE'] = $cp->arResult['MY_TITLE'];
            $arResult['SECTION_INFO'] = $cp->arResult['SECTION_INFO'];

            $arResult['BANKI'] = $cp->arResult['BANKI'];
            $arResult['AKCII'] = $cp->arResult['AKCII'];
            $arResult['REVIEWS'] = $cp->arResult['REVIEWS'];
        }
    }

?>