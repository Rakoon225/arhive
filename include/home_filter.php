<?
  if(CModule::IncludeModule("iblock"))
  {
    $tree = CIBlockSection::GetTreeList(
        $arFilter=Array('IBLOCK_ID' => 1),
        $arSelect=Array()
    );

    while($section = $tree->GetNext()) {
      if ($section['IBLOCK_SECTION_ID'] > 0)
        $filter_sections[$section['IBLOCK_SECTION_ID']]['CHILDS'][] = $section;
      else $filter_sections[$section['ID']] = $section;
    }

    // получим этажность
    $property_enums = CIBlockPropertyEnum::GetList(Array("DEF"=>"DESC", "SORT"=>"ASC"), Array("IBLOCK_ID" => 1, "CODE" => 'ETAZHNOST'));
    while($enum_fields = $property_enums->GetNext())
    {
      $etazhnost[$enum_fields['ID']] = $enum_fields['VALUE'];
    }
  }
?>
<!-- select-form-->
            <form class="select-form" action="">
              <div class="select-form__header">
                <div class="select-form__type">
                  <p class="select-form__label">Тип строения:</p>
                  <div class="select-form__row">
                    <?
                      $s = 0; 
                      foreach ($filter_sections as $arSection): 
                        $s++;
                    ?>
                      <div class="form-radio form-radio--lg js-select-btn">
                        <input id="type<?=$arSection['ID'];?>" type="radio" name="type" data-target=".js-select-build<?=$arSection['ID'];?>"<?=($s == 1 ? ' checked' : '');?>>
                        <label for="type<?=$arSection['ID'];?>"><?=($arSection['NAME'] == 'Строительство домов' ? 'Дома' : 'Бани');?></label>
                      </div>
                    <? endforeach; ?>
                  </div>
                </div>
                <div class="select-form__price">
                  <p class="select-form__label select-form__label--lg">Вилка цены:</p>
                  <div class="select-form__row">
                    <div class="form-radio">
                      <input id="price1" type="radio" name="price_range" value="comfort">
                      <label for="price1">Недорогие</label>
                    </div>
                    <div class="form-radio">
                      <input id="price2" type="radio" name="price_range" value="elite">
                      <label for="price2">Элитные</label>
                    </div>
                  </div>
                </div>
              </div>
              <?
                $s = 0; 
                foreach ($filter_sections as $arSection): 
                $s++;
              ?>
                <div class="select-form__section js-select-build<?=$arSection['ID'];?> <?=($s == 1 ? 'active' : '');?>">
                  <div class="select-form__center">
                    <div class="select-form__row">
                      <? foreach ($arSection['CHILDS'] as $arChild): ?>
                        <div class="form-radio form-radio--md">
                          <input id="houses<?=$arChild['ID'];?>" type="radio" value="<?=$arChild['ID'];?>" name="houses">
                          <label for="houses<?=$arChild['ID'];?>"><?=$arChild['NAME'];?></label>
                        </div>
                      <? endforeach; ?>
                    </div>
                  </div>
                  <div class="select-form__footer">
                    <div class="select-form__square">
                      <p class="select-form__label">Площадь, м2:</p>
                      <div class="select-form__row">
                        <div class="form-radio form-radio--sm">
                          <input id="square1" type="radio" name="ploshad" value="do100">
                          <label for="square1">... 100</label>
                        </div>
                        <div class="form-radio form-radio--sm">
                          <input id="square2" type="radio" name="ploshad" value="do150">
                          <label for="square2">100 ... 150</label>
                        </div>
                        <div class="form-radio form-radio--sm">
                          <input id="square3" type="radio" name="ploshad" value="ot150">
                          <label for="square3">150 ...  </label>
                        </div>
                      </div>
                    </div>
                    <div class="select-form__floor">
                      <p class="select-form__label">Этажность:</p>
                      <div class="select-form__row">
                        <? foreach ($etazhnost as $key => $etazh): ?>
                        <div class="form-radio form-radio--sm">
                          <input id="floor<?=$key;?>" type="radio" name="floor" value="<?=$key;?>">
                          <label for="floor<?=$key;?>"><?=$etazh;?></label>
                        </div>
                        <? endforeach; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <? endforeach; ?>
              <?/*<div class="select-form__section js-select-bathhouses">
                <div class="select-form__center">
                  <div class="select-form__row">
                    <div class="form-radio form-radio--md">
                      <input id="bathhouses1" type="radio" name="bathhouses">
                      <label for="bathhouses1">Каркасные бани</label>
                    </div>
                    <div class="form-radio form-radio--md">
                      <input id="bathhouses2" type="radio" name="bathhouses">
                      <label for="bathhouses2">Бани из бревна</label>
                    </div>
                    <div class="form-radio form-radio--md">
                      <input id="bathhouses3" type="radio" name="bathhouses">
                      <label for="bathhouses3">Бани из бруса</label>
                    </div>
                    <div class="form-radio form-radio--md">
                      <input id="bathhouses4" type="radio" name="bathhouses">
                      <label for="bathhouses4">каменные Бани</label>
                    </div>
                  </div>
                </div>
                <div class="select-form__footer">
                  <div class="select-form__square">
                    <p class="select-form__label">Площадь, м2:</p>
                    <div class="select-form__row">
                      <div class="form-radio form-radio--sm">
                        <input id="square2-1" type="radio" name="square2">
                        <label for="square2-1">... 100</label>
                      </div>
                      <div class="form-radio form-radio--sm">
                        <input id="square2-2" type="radio" name="square2">
                        <label for="square2-2">100 ... 150</label>
                      </div>
                      <div class="form-radio form-radio--sm">
                        <input id="square2-3" type="radio" name="square2">
                        <label for="square2-3">100 ...  </label>
                      </div>
                    </div>
                  </div>
                  <div class="select-form__floor">
                    <p class="select-form__label">Этажность:</p>
                    <div class="select-form__row">
                      <div class="form-radio form-radio--sm">
                        <input id="floor2-1" type="radio" name="floor2">
                        <label for="floor2-1">1</label>
                      </div>
                      <div class="form-radio form-radio--sm">
                        <input id="floor2-2" type="radio" name="floor2">
                        <label for="floor2-2">1 + М</label>
                      </div>
                      <div class="form-radio form-radio--sm">
                        <input id="floor2-3" type="radio" name="floor2">
                        <label for="floor2-3">1,5</label>
                      </div>
                      <div class="form-radio form-radio--sm">
                        <input id="floor2-4" type="radio" name="floor2">
                        <label for="floor2-4">2</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>*/?>
              
              <button class="select-form__btn" type="submit"><img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/arrow-right-white-lg.png" alt=""><span>Найти проект</span></button>

            </form>
            <!-- end select-form-->