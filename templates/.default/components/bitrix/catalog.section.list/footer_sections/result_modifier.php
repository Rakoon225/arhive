<? 
	foreach ($arResult['SECTIONS'] as $arSection)
	{
		if ($arSection['IBLOCK_SECTION_ID'] > 0)
		{
			$new_sections[$arSection['IBLOCK_SECTION_ID']]['CHILDS'][] = $arSection;
		} else
		{
			$new_sections[$arSection['ID']] = $arSection;
		}
	}
	$arResult['NEW_SECTIONS'] = $new_sections;
?>