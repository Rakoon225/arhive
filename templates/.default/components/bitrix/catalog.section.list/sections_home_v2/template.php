<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
  die();
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

<div class="home-sections-wrap">
  <div class="container">
    <div class="home-sections-list">
      <? foreach ($arResult['SECTIONS'] as $arSection): ?>
        <? if ($arSection["DEPTH_LEVEL"] != 2)
          continue; ?>
        <div class="home-sections-list__item home-section-card">
          <a href="<?= $arSection["SECTION_PAGE_URL"] ?>">
            <div class="home-section-card__image">
              <?
              $renderImage = CFile::ResizeImageGet($arSection["PICTURE"], array("width" => 500, "height" => 300));
              echo CFile::ShowImage($renderImage["src"], 500, 300, "border=0", "", true);
              ?>
            </div>
            <div class="home-section-card__info">
              <span class="home-section-card__title"><?= $arSection['NAME']; ?></span>
              <span class="home-section-card__icon">
                <svg>
                  <use href="/img/icons/sprite.svg#right-arrow"></use>
                </svg>
              </span>
            </div>
          </a>
        </div>
      <? endforeach; ?>
    </div>
  </div>
</div>