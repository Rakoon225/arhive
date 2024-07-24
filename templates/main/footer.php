<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>
</main>
<!-- footer-->
<footer class="footer">
    <div class="container">
        <div class="footer__row">
            <div class="footer__left">
                <!-- f-logo--><a class="f-logo" href="/">
                    <!--svg>
                  <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#logo"></use>
                </svg-->
                    <img src="<?= SITE_TEMPLATE_PATH; ?>/img/logo/logo_castle_rf_pink.png" />
                </a>
                <!-- end f-logo-->
                <!-- copyright-->
                <p class="copyright">&copy; <?= date('Y'); ?></p>
                <!-- end copyright-->
                <!-- f-social -->

                <ul class="f-social">

                    <li><a alt="Строительная компания ДВОРЕЦ РФ в Инстаграм" title="Строительная компания ДВОРЕЦ РФ в Инстаграм" target="blank" href="https://instagram.com/castle_rf?igshid=YmMyMTA2M2Y=">
                            <svg>
                                <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#social_instagram"></use>
                            </svg></a></li>

                    <li><a alt="Строительная компания ДВОРЕЦ РФ на Youtube" title="Строительная компания ДВОРЕЦ РФ на Youtube" target="blank" href="https://www.youtube.com/channel/UC5QGbVoLnY4zvZYVX0MJXYQ">
                            <img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/youtube_icon_down.svg">
                        </a></li>

                    <li><a alt="Строительная компания ДВОРЕЦ РФ в Телеграм" title="Строительная компания ДВОРЕЦ РФ в Телеграм" target="blank" href="https://t.me/castle_rf">
                            <img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/telegram_icon_down.svg">
                        </a></li>


                    <!--
                <li><a href="https://www.facebook.com/profile.php?id=100068903857360">
                    <svg>
                      <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#social_facebook"></use>
                    </svg></a></li>
-->
                    <li><a alt="Строительная компания ДВОРЕЦ РФ Вконтакте" title="Строительная компания ДВОРЕЦ РФ Вконтакте" target="blank" href="https://vk.com/castle_rf">
                            <svg>
                                <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#social_vk"></use>
                            </svg></a></li>
                </ul>

                <!-- end f-social-->
            </div>
            <div class="footer__left-center">
                <!-- f-contacts-->
                <div class="f-contacts">
                    <p><strong>&laquo;ДВОРЕЦ РФ&raquo;</strong>, строительная компания.</p>
                    <p><strong>Адрес: </strong> Москва, Новорязанское шоссе, д.5 стр.52</p>
                    <p><strong>Время работы: </strong> ПН-ВС с 10:00 до 20:00, Без выходных.</p>
                </div>
                <!-- end f-contacts-->
                <!-- f-links-->
                <div class="f-links">
                    <a class="js-modal-show" href="/politika/" target="blank" alt="Политика в отношении работы с персональными данными" title="Политика в отношении работы с персональными данными">
                        <svg>
                            <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#confid_homes"></use>
                        </svg><span>Политика конфиденциальности.</span>
                    </a>
                    <a href="#">
                        <svg>
                            <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#cookies_home"></use>
                        </svg><span>Этот сайт использует cookies.</span>
                    </a>
                </div>
                <!-- end f-links-->
            </div>
            <div class="footer__right-center">
                <!-- f-menu-->
                <div class="f-menu">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "footer_sections",
                        array(
                            "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
                            "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                            "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                            "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                            "CACHE_TYPE" => "A",	// Тип кеширования
                            "COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
                            "COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
                            "FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
                            "IBLOCK_ID" => "1",	// Инфоблок
                            "IBLOCK_TYPE" => "content",	// Тип инфоблока
                            "SECTION_CODE" => "",	// Код раздела
                            "SECTION_FIELDS" => array(	// Поля разделов
                                0 => "",
                                1 => "",
                            ),
                            "SECTION_ID" => "",	// ID раздела
                            "SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
                            "SECTION_USER_FIELDS" => array(	// Свойства разделов
                                0 => "",
                                1 => "",
                            ),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "3",	// Максимальная отображаемая глубина разделов
                            "VIEW_MODE" => "LINE",
                            "COMPONENT_TEMPLATE" => "tree"
                        ),
                        false
                    ); ?>
                    <div class="f-menu__section">
                        <h2 class="f-menu__title"><a href="/fundament/">Обустройство фундаментов</a></h2>
                    </div>
                    <!--div class="f-menu__section">
                  <h2 class="f-menu__title"><a href="/zemelnye-uchastki/">Земельные участки</a></h2>
                </div-->
                </div>
                <!-- end f-menu-->
            </div>
            <div class="footer__right">
                <!-- dev--><a class="dev" href="https://stilistica.ru/" target="_blank"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/stilistica_logo.svg">
                    <p>Брендинг и разработка сайта <span> — Стилистика.</span></p>
                </a>
                <!-- end dev-->
            </div>
        </div>
    </div>
</footer>
<!-- end footer-->
</div>
<!-- modal-->
<div class="modal js-modal" id="js-modal-request">
    <div class="modal__inner">
        <a class="modal__close js-modal-close" href="#">
            <img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/icon-close.png" alt="">
        </a>
        <div class="modal__header">
            <div class="modal__logo">
                <!--svg>
                    <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#logo"></use>
                </svg-->
                <img src="<?= SITE_TEMPLATE_PATH; ?>/img/logo/logo_castle_rf_pink.png" />
            </div>
            <!-- m-contacts-->
            <div class="m-contacts">
                <p class="m-contacts__text">Нет времени заполнять формы? Просто позвоните.</p>
                <div class="m-contacts__links">
                    <!-- tel-->
                    <!--a class="tel" href="tel:+88001019713">
                        <svg>
                            <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#smartphone_black"></use>
                        </svg>
                        <span>8 800-101-97-13</span>
                    </a-->
                    <!-- end tel-->
                    <!-- messagers-->
                    <div class="messagers">
                        <a href="#">
                            <svg>
                                <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#whatsapp"></use>
                            </svg>
                        </a>
                        <a href="#">
                            <svg>
                                <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#viber"></use>
                            </svg>
                        </a>
                        <a href="#">
                            <svg>
                                <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#telegram"></use>
                            </svg>
                        </a>
                        <span>+7 925 101-00-09</span>
                    </div>
                    <!-- end messagers-->
                </div>
            </div>
            <!-- end m-contacts-->
        </div>
        <p class="modal__title">Заявка / Письмо в компанию</p>
        <form id="form-request" class="form-action" action="" enctype="multipart/form-data">
            <input type="hidden" name="grecaptcha" class="grecaptcha" value="">
            <!-- modal-request-->
            <div class="modal-request">
                <div class="modal-request__left">
                    <div class="form-group">
                        <label>Ваше имя</label>
                        <div class="form-input">
                            <input class="validate[required] text-input required" required type="text" name="fio" placeholder="Представьтесь, пожалуйста">
                        </div>
                    </div>
                    <div class="modal__group">
                        <div class="form-group form-group--sm">
                            <label>Телефон</label>
                            <div class="form-input">
                                <input class="phone validate[required] required" required data-prompt-position="topRight:-180,-16" type="tel" name="phone" placeholder="+7 (000) 000-00-00">
                            </div>
                        </div>
                        <div class="form-group form-group--lg">
                            <label>E-mail</label>
                            <div class="form-input">
                                <input class="validate[required, custom[email]] required" required data-prompt-position="topRight:-180,-16" type="email" name="email" placeholder="@">
                            </div>
                        </div>
                    </div>
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
                <div class="modal-request__right">
                    <div class="form-group form-group--full">
                        <label>Напишите нам о доме вашей мечты</label>
                        <textarea name="message" placeholder="Напишите нам"></textarea>
                    </div>
                    <div class="form-checkbox">
                        <input id="agree" type="checkbox" name="#" checked>
                        <label for="agree">Согласен с <a href="/politika/" target="blank">Политикой конфиденциальности</a> и обработкой персональных данных.</label>
                    </div>
                    <? /*<div class="modal__footer"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/captcha.jpg">*/ ?>
                    <button class="modal__btn" type="submit"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/arrow-right-white.png" alt=""><span>Отправить</span></button>
                </div>
            </div>
    </div>
    <!-- end modal-request-->
    </form>
</div>
</div>
<div class="modal js-modal callback-success" id="js-modal-thanks">
    <div class="modal__inner"><a class="modal__close js-modal-close" href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/icon-close.png" alt=""></a>
        <div class="modal__header">
            <div class="modal__logo">
                <svg>
                    <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#logo"></use>
                </svg>
            </div>
        </div>
        <div class="modal__text">
            <p>Ваше письмо отправлено!</p>
            <p>Спасибо за то, что пишете нам. Мы постараемся связаться с вами, как можно скорее.</p>
            <p><a class="js-modal-close" href="#">Закрыть форму</a> и продолжить работу с сайтом.</p>
        </div>
    </div>
</div>

<div class="modal js-modal" id="js-modal-callback">
    <div class="modal__inner"><a class="modal__close js-modal-close" href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/icon-close.png" alt=""></a>
        <div class="modal__header">
            <div class="modal__logo">
                <svg>
                    <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#logo"></use>
                </svg>
            </div>
        </div>
        <p class="modal__title">Обратный звонок</p>
        <form class="modal__form--sm callback-form form-action" action="">
            <input type="hidden" name="grecaptcha" class="grecaptcha" value="">
            <div class="modal__row">
                <div class="modal__left">
                    <div class="form-group">
                        <label>Ваше имя</label>
                        <div class="form-input">
                            <input type="text" name="fio" class="validate[required]" required placeholder="Представьтесь, пожалуйста">
                        </div>
                    </div>
                </div>
                <div class="modal__right">
                    <div class="form-group">
                        <label>Телефон</label>
                        <div class="form-input">
                            <input class="phone validate[required]" required type="tel" name="phone" placeholder="+7 (000) 000-00-00">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-checkbox">
                <input id="agree1" type="checkbox" name="#" checked>
                <label for="agree1">Согласен с <a href="/politika/" target="blank" alt="Политика в отношении работы с персональными данными" title="Политика в отношении работы с персональными данными">Политикой конфиденциальности</a> и обработкой персональных данных.</label>
            </div>
            <? /*<div class="modal__footer"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/captcha.jpg">*/ ?>
            <button class="modal__btn" type="submit"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/arrow-right-white.png" alt=""><span>Отправить</span></button>
    </div>
    </form>
</div>
</div>


<!-- end privacy-->
</div>
</div>

<div class="modal js-modal" id="js-modal-selected">
    <div class="modal__inner">
        <a class="modal__close js-modal-close" href="#"><img src="<?= SITE_TEMPLATE_PATH; ?>/img/icons/icon-close.png" alt=""></a>
        <div class="modal__header">
            <div class="modal__logo">
                <svg>
                    <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#logo"></use>
                </svg>
            </div>
        </div>
        <form action="#" id="order_product_form" class="form-action" enctype="multipart/form-data">

        </form>
    </div>
</div>

<!-- end modal-->
<script src="<?= SITE_TEMPLATE_PATH; ?>/js/libs.min.js?<?= rand(); ?>"></script>
<script src="<?= SITE_TEMPLATE_PATH; ?>/js/scripts.js?<?= rand(); ?>"></script>
<script src="<?= SITE_TEMPLATE_PATH; ?>/js/custom.js?<?= rand(); ?>"></script>
<script src="//code.jivo.ru/widget/D2bpjdYWt4" async></script>


<script src="https://www.google.com/recaptcha/api.js?render=<?php echo RECAP_CLIENT ?>"></script>
<script>
    function generateRecaptcha(elements) {
        grecaptcha.ready(function () {
            grecaptcha.execute('<?php echo RECAP_CLIENT ?>', { action: 'contact' }).then(function (token) {
                elements.forEach((element) => {
                    let grecaptchaField = element.querySelector('.grecaptcha');
                    if (grecaptchaField) {
                        grecaptchaField.value = token;
                    }
                });
            });
        });
    }

    const formsAction = document.querySelectorAll('.form-action');
    const modalShowProduct = document.querySelector('.eq-selected__btn.js-modal-show-product');

    if (modalShowProduct) {
        modalShowProduct.addEventListener('click', () => {
            setTimeout(() => {
                console.log(formsAction);
                generateRecaptcha(formsAction);
            }, 500);
        });
    }

    if (formsAction.length > 0) {
        generateRecaptcha(formsAction);

        formsAction.forEach(function (form, idx) {
            form.addEventListener('submit', () => {
                generateRecaptcha(formsAction);
            });
        });
    }
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
        m[i].l = 1 * new Date();
        for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(96845739, "init", {
        clickmap: true,
        trackLinks: true,
        accurateTrackBounce: true,
        webvisor: true
    });
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/96845739" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->

</body>

</html>