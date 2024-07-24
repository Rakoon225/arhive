<? require_once ($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php"); ?>
<?php
$complectation = $_REQUEST['complectation'];
$price = $_REQUEST['price'];
$product_id = $_REQUEST['product_id'];
CModule::IncludeModule("iblock");


$arSelect = array("ID", "NAME", "PREVIEW_PICTURE", "IBLOCK_ID", "PROPERTY_*");
$arFilter = array("IBLOCK_ID" => 1, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "ID" => $product_id);
$res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 1), $arSelect);
if ($ob = $res->GetNextElement()) {
    $arProduct = $ob->GetFields();
    $arProduct['PROPS'] = $ob->GetProperties();
    $object_name = $arProduct['NAME'];
    $photo = current($arProduct['PROPS']['MORE_PHOTO']['VALUE']);
}
?>

<!-- modal-house-->
<input type="hidden" name="grecaptcha" class="grecaptcha" value="">
<div class="modal-house">
    <div class="modal-house__left">
        <h2 class="modal-house__title"><?= $arProduct['NAME']; ?><span> <?= $arProduct['PROPS']['ARTICLE']['VALUE']; ?></span></h2>
        <div class="modal-house__info"><span class="modal-house__price"><?= $price; ?><i> &#8381;</i></span>
            <p class="modal-house__pack">Комплектация:<span><?= $complectation; ?></span></p>
            <input type="hidden" name="complectation" value="<?= $complectation; ?>" />
            <input type="hidden" name="price" value="<?= $price; ?>" />
            <input type="hidden" name="object" value="<?= $object_name; ?>" />
        </div>
        <div class="modal-house__img"><img src="<?= CFILE::GetPath($photo); ?>" alt=""></div>
        <div class="form-file"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/house.png" alt="">
            <label>
                <input type="file" name="file"><span>загрузить файл</span>
            </label>
            <div class="form-file__desc">
                <p>Есть свой проект?</p>
                <p>Отправьте нам ваши чертежи и планы.</p>
            </div><span class="filename"></span>
        </div>
    </div>
    <div class="modal-house__right">
        <div class="form-group">
            <label>Ваше имя</label>
            <div class="form-input">
                <input type="text" class="required" required name="name" placeholder="Представьтесь, пожалуйста">
            </div>
        </div>
        <div class="modal__group">
            <div class="form-group form-group--sm">
                <label>Телефон</label>
                <div class="form-input">
                    <input class="required phone validate[required]" required data-prompt-position="topRight:-180,-16" type="tel" name="tel" placeholder="+7 (000) 000-00-00">
                </div>
            </div>
            <div class="form-group form-group--lg">
                <label>E-mail</label>
                <div class="form-input">
                    <input class="required validate[required, custom[email]]" required data-prompt-position="topRight:-180,-16" type="email" name="email" placeholder="@">
                </div>
            </div>
        </div>
        <div class="form-group form-group--full">
            <label>Напишите нам о доме вашей мечты</label>
            <textarea name="message" placeholder="Напишите нам"></textarea>
        </div>
        <div class="form-checkbox">
            <input id="agree" type="checkbox" name="#" checked>
            <label for="agree">Согласен с <a href="#">Политикой конфиденциальности</a> и обработкой персональных данных.</label>
        </div>
        <? /*<div class="modal__footer"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/captcha.jpg">*/ ?>
        <button class="modal__btn" type="submit"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/arrow-right-white.png" alt=""><span>Отправить</span></button>
    </div>
</div>
</div>
<!-- end modal-house-->