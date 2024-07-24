<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
  die();
?><!DOCTYPE html>
<html>

<head>

  <link rel="icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="120x120" href="/favicon_logo_120px.svg" type="image/svg+xml">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/favicon_32-32.png" type="image/png" sizes="32x32">
  <link rel="icon" href="/favicon_48x48.png" type="image/png" sizes="48x48">

  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/styles.min.css", true); ?>
  <? $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/custom.css", true); ?>
  <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/libs.min.js"); ?>
  <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/scripts.js"); ?>
  <? $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH . "/js/custom.js"); ?>
  <? $APPLICATION->AddHeadScript("https://api-maps.yandex.ru/2.1/?apikey=28da747c-8c53-4ace-b52d-42ab28705bef&lang=ru_RU"); ?>
  <? $APPLICATION->AddHeadScript("//code.jivo.ru/widget/D2bpjdYWt4"); ?>
  <? $APPLICATION->AddHeadScript("https://www.google.com/recaptcha/api.js?render=" . RECAP_CLIENT); ?>

  <? $APPLICATION->ShowHead(); ?>
  <title><? $APPLICATION->ShowTitle(); ?></title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="yandex-verification" content="e50729e693b1fb6c" />

</head>

<body>
  <? $APPLICATION->ShowPanel(); ?>
  <div class="wrap">
    <!-- header-->
    <header class="site-header">
      <div class="site-header__line site-header__line--top">
        <div class="container">
          <div class="flex-row align-h-space-between">
            <div class="site-logo">
              <a href="<?= SITE_DIR ?>">
                <div class="site-logo__inner">
                  <span class="site-logo__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 287.106 107.469">
                      <path d="M0 80.369h63.063v9H0zM63.063 39.938l-25.16-25.161 8.414-8.413L39.953 0 31.54 8.413l-.007-.007-.008.008L23.11 0l-6.364 6.364 8.414 8.414L0 39.938v31.531h63.063V39.938zm-9 22.531H9V43.666l14.104-14.104.007.007 8.42-8.42 8.42 8.42.008-.008 14.104 14.104v18.804zM81.37 41.998h20.526v6.46h8.293V34.804h-4.353V9.924H79.995l-.366 9.897c-.184 4.826-.664 8.521-1.443 11.088-.779 2.565-2.115 3.864-4.009 3.895h-1.146v13.653h8.339v-6.459zm5.36-12.692c.428-2.383.702-5.284.825-8.706l.138-3.482h9.209v17.687H84.761c.885-1.284 1.542-3.117 1.969-5.499zM140.406 39.546c2.215-1.634 3.322-3.872 3.322-6.713 0-1.894-.497-3.481-1.489-4.765-.993-1.283-2.437-2.229-4.33-2.841 1.404-.702 2.481-1.649 3.23-2.841.748-1.191 1.122-2.565 1.122-4.124 0-2.657-1.062-4.711-3.184-6.162-2.124-1.45-5.109-2.177-8.958-2.177h-15.578v32.073h16.448c4.064.002 7.202-.815 9.417-2.45zm-16.929-23.115h5.773c2.565 0 3.849 1.054 3.849 3.161s-1.283 3.161-3.849 3.161h-5.773v-6.322zm0 19.061v-6.599h7.147c2.627 0 3.94 1.085 3.94 3.254 0 2.229-1.313 3.345-3.94 3.345h-7.147zM155.252 40.486c2.703 1.436 5.75 2.153 9.141 2.153s6.438-.718 9.141-2.153 4.826-3.421 6.369-5.957c1.542-2.535 2.313-5.391 2.313-8.567s-.771-6.032-2.313-8.568c-1.543-2.535-3.666-4.521-6.369-5.956s-5.75-2.154-9.141-2.154-6.438.719-9.141 2.154c-2.704 1.436-4.827 3.421-6.369 5.956-1.543 2.536-2.313 5.392-2.313 8.568s.771 6.032 2.313 8.567c1.542 2.536 3.665 4.521 6.369 5.957zm1.626-19.313c.764-1.39 1.802-2.467 3.116-3.23 1.313-.764 2.778-1.146 4.398-1.146 1.618 0 3.085.382 4.398 1.146 1.313.764 2.352 1.841 3.115 3.23s1.146 2.985 1.146 4.788-.382 3.398-1.146 4.788-1.803 2.467-3.115 3.229c-1.313.765-2.78 1.146-4.398 1.146-1.62 0-3.086-.381-4.398-1.146-1.314-.763-2.353-1.84-3.116-3.229s-1.146-2.985-1.146-4.788.382-3.398 1.146-4.788zM196.144 33.613h5.59c2.901 0 5.421-.481 7.56-1.443 2.138-.962 3.787-2.329 4.948-4.101s1.741-3.864 1.741-6.277c0-2.412-.58-4.513-1.741-6.3s-2.811-3.162-4.948-4.124c-2.139-.962-4.658-1.443-7.56-1.443h-14.662v32.073h9.072v-8.385zm0-16.54h5.04c1.862 0 3.268.412 4.215 1.236.946.825 1.421 1.986 1.421 3.482 0 1.497-.475 2.65-1.421 3.459-.947.811-2.353 1.215-4.215 1.215h-5.04v-9.392zM245.811 34.988h-16.77v-5.865h14.249v-6.782h-14.249v-5.406h16.174V9.924h-25.154v32.074h25.75zM277.288 48.549h8.293V34.804h-4.398V9.924h-8.935v24.88h-12.325V9.924h-8.935v32.074h26.3zM81.129 80.356h5.59c2.901 0 5.421-.481 7.56-1.443 2.138-.962 3.787-2.329 4.948-4.101s1.741-3.864 1.741-6.277c0-2.412-.58-4.513-1.741-6.3s-2.811-3.162-4.948-4.124c-2.139-.962-4.658-1.443-7.56-1.443H72.057v32.073h9.072v-8.385zm0-16.54h5.04c1.862 0 3.268.412 4.215 1.236.946.825 1.421 1.986 1.421 3.482 0 1.497-.475 2.65-1.421 3.459-.947.811-2.353 1.215-4.215 1.215h-5.04v-9.392zM128.321 90.252v-3.527c5.406-.306 9.537-1.688 12.394-4.146s4.284-5.781 4.284-9.966c0-4.216-1.428-7.537-4.284-9.966s-6.987-3.826-12.394-4.192v-3.299h-8.293v3.299c-5.438.397-9.576 1.81-12.417 4.238s-4.261 5.735-4.261 9.92 1.428 7.484 4.284 9.896c2.855 2.413 6.987 3.818 12.394 4.216v3.527h8.293zm0-24.696c2.657.306 4.635 1.024 5.934 2.154 1.298 1.13 1.947 2.749 1.947 4.856s-.634 3.742-1.901 4.902c-1.268 1.161-3.261 1.895-5.979 2.199V65.556zm-14.204 11.867c-1.313-1.13-1.97-2.733-1.97-4.811 0-2.138.626-3.772 1.879-4.902 1.252-1.13 3.253-1.849 6.002-2.154v14.066c-2.628-.335-4.597-1.068-5.911-2.199zM0 98.469h287.106v9H0zM159.234 60.725c.51-.285 1.09-.428 1.74-.428 1.05 0 1.93.41 2.64 1.23l1.561-1.44a4.952 4.952 0 0 0-1.853-1.38c-.735-.319-1.558-.479-2.468-.479-1.08 0-2.053.232-2.918.697s-1.545 1.11-2.04 1.935c-.495.825-.742 1.758-.742 2.798s.247 1.973.742 2.798c.495.824 1.175 1.47 2.04 1.935s1.833.697 2.902.697c.91 0 1.735-.16 2.476-.479a4.862 4.862 0 0 0 1.86-1.396l-1.561-1.439c-.71.83-1.59 1.245-2.64 1.245-.65 0-1.23-.143-1.74-.428s-.907-.683-1.192-1.192-.428-1.09-.428-1.74.143-1.23.428-1.74.684-.909 1.193-1.194zM171.324 68.908v-8.52h3.361v-1.98h-9.106v1.98h3.346v8.52zM176.214 58.408v10.5h2.431v-2.895h2.114c.931 0 1.738-.152 2.423-.458.685-.305 1.213-.745 1.583-1.32.369-.574.555-1.247.555-2.018 0-.779-.186-1.454-.555-2.024-.37-.57-.898-1.01-1.583-1.32-.685-.31-1.492-.465-2.423-.465h-4.545zm6.645 3.809c0 .58-.19 1.028-.57 1.343-.38.315-.935.473-1.665.473h-1.979v-3.645h1.979c.73 0 1.285.157 1.665.472.38.315.57.767.57 1.357zM189.137 68.382c.875.471 1.857.705 2.948.705 1.09 0 2.069-.234 2.939-.705.87-.47 1.555-1.117 2.055-1.942s.75-1.752.75-2.782-.25-1.957-.75-2.782-1.185-1.473-2.055-1.942c-.87-.471-1.85-.705-2.939-.705-1.091 0-2.073.234-2.948.705-.875.47-1.56 1.117-2.055 1.942s-.742 1.752-.742 2.782.247 1.957.742 2.782 1.18 1.473 2.055 1.942zm.09-6.465c.285-.51.678-.907 1.178-1.192s1.061-.428 1.681-.428c.619 0 1.18.143 1.68.428s.893.683 1.178 1.192c.284.51.427 1.09.427 1.74s-.143 1.23-.427 1.74c-.285.51-.678.907-1.178 1.192s-1.061.428-1.68.428c-.62 0-1.181-.143-1.681-.428s-.893-.683-1.178-1.192c-.284-.51-.427-1.09-.427-1.74s.142-1.23.427-1.74zM207.01 68.908h2.399v-10.5h-2.279l-5.011 6.84v-6.84h-2.415v10.5h2.295l5.011-6.825zM210.938 60.388h3.346v8.52h2.4v-8.52h3.36v-1.98h-9.106zM229.704 66.958h-5.715v-2.43h4.875v-1.89h-4.875v-2.28h5.521v-1.95h-7.936v10.5h8.13zM241.029 58.408h-8.07l-.149 4.26c-.061 1.46-.205 2.533-.436 3.218-.229.685-.635 1.027-1.215 1.027-.16 0-.305-.02-.435-.06l-.15 2.055c.47.11.87.165 1.2.165.8 0 1.422-.247 1.867-.742s.763-1.205.953-2.13c.189-.926.31-2.133.359-3.623l.075-2.189h3.6v8.52h2.4V58.408zM243.653 58.408v10.5h4.74c1.37 0 2.433-.313 3.188-.938s1.133-1.532 1.133-2.723c0-1.12-.343-1.965-1.027-2.535-.686-.569-1.668-.854-2.948-.854h-2.67v-3.45h-2.416zm4.606 5.25c1.34 0 2.01.545 2.01 1.635 0 .591-.178 1.04-.532 1.351-.355.31-.848.465-1.478.465h-2.19v-3.45h2.19zM264.099 68.908v-10.5h-2.43v4.139h-4.77v-4.139h-2.43v10.5h2.43v-4.305h4.77v4.305zM270.219 58.408l-4.68 10.5h2.49l.93-2.25h4.875l.93 2.25h2.55l-4.694-10.5h-2.401zm-.48 6.405l1.665-4.021 1.665 4.021h-3.33zM286.554 68.908v-10.5h-4.53c-.92 0-1.721.157-2.4.473-.68.314-1.205.765-1.575 1.35s-.555 1.283-.555 2.093c0 .82.19 1.522.57 2.107s.925 1.022 1.635 1.313l-2.19 3.165h2.565l1.86-2.79h2.22v2.79h2.4zm-4.531-4.71c-.681 0-1.195-.165-1.545-.495-.351-.33-.525-.8-.525-1.41 0-.63.183-1.104.548-1.425.364-.32.893-.479 1.582-.479h2.07v3.81h-2.13zM158.26 82.677h1.679l2.73 4.231h2.761l-3.54-5.43 3.434-5.07h-2.564l-2.761 4.245h-1.739v-4.245h-2.415v10.5h2.415zM168.586 86.382c.875.471 1.857.705 2.948.705 1.09 0 2.069-.234 2.939-.705.87-.47 1.555-1.117 2.055-1.942s.75-1.752.75-2.782-.25-1.957-.75-2.782-1.185-1.473-2.055-1.942c-.87-.471-1.85-.705-2.939-.705-1.091 0-2.073.234-2.948.705-.875.47-1.56 1.117-2.055 1.942s-.742 1.752-.742 2.782.247 1.957.742 2.782 1.18 1.473 2.055 1.942zm.09-6.465c.285-.51.678-.907 1.178-1.192s1.061-.428 1.681-.428c.619 0 1.18.143 1.68.428s.893.683 1.178 1.192c.284.51.427 1.09.427 1.74s-.143 1.23-.427 1.74c-.285.51-.678.907-1.178 1.192s-1.061.428-1.68.428c-.62 0-1.181-.143-1.681-.428s-.893-.683-1.178-1.192c-.284-.51-.427-1.09-.427-1.74s.143-1.23.427-1.74zM185.095 82.933l-3.93-6.525h-2.011v10.5h2.281v-6.165l3.089 5.054h1.08l3.09-5.174.016 6.285h2.279l-.014-10.5h-2.01zM203.169 86.908v-10.5h-9.57v10.5h2.415v-8.52h4.74v8.52zM208.014 84.658h4.875l.93 2.25h2.55l-4.694-10.5h-2.4l-4.68 10.5h2.49l.929-2.25zm2.445-5.866l1.665 4.021h-3.33l1.665-4.021zM227.394 86.908v-10.5h-2.43v4.139h-4.77v-4.139h-2.43v10.5h2.43v-4.305h4.77v4.305zM239.724 86.908v-10.5h-2.28l-5.01 6.84v-6.84h-2.415v10.5h2.294l5.011-6.825v6.825zM250.719 86.908v-10.5h-4.53c-.92 0-1.721.157-2.4.473-.68.314-1.205.765-1.575 1.35s-.555 1.283-.555 2.093c0 .82.19 1.522.57 2.107s.925 1.022 1.635 1.313l-2.19 3.165h2.565l1.86-2.79h2.22v2.79h2.4zm-4.531-4.71c-.681 0-1.195-.165-1.545-.495-.351-.33-.525-.8-.525-1.41 0-.63.183-1.104.548-1.425.364-.32.893-.479 1.582-.479h2.07v3.81h-2.13z" />
                    </svg>
                  </span>
                  <span class="site-logo__text">
                    Строим дома мечты<br>
                    в Москве<br>
                    и московской области
                  </span>
                </div>
              </a>
            </div>
            <div class="site-header-contacts">
              <div class="site-header-contacts__item">
                <a class="site-header-phone" href="tel:+79251010009">+7 925 101-00-09</a>
              </div>
              <div class="site-header-contacts__item">
                <a class="social-btn social-btn--whatsapp" href="https://wa.me/+79251010009?text=Здравствуйте.%20Вопрос%20по%20строительству%20дома?">
                  <svg>
                    <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#whatsapp"></use>
                  </svg>
                </a>
              </div>
              <div class="site-header-contacts__item">
                <a class="social-btn social-btn--telegram" href="https://t.me/castleRF">
                  <svg>
                    <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#telegram"></use>
                  </svg>
                </a>
              </div>
              <div class="site-header-contacts__item">
                <a class="request-btn js-modal-show" href="#js-modal-request">
                  <svg>
                    <use href="/local/templates/main_dev/img/icons/sprite.svg#letter_icon"></use>
                  </svg><span>Заявка</span>
                </a>
              </div>
            </div>
            <div class="menu-toggle"><span></span><span></span><span></span></div>
          </div>
        </div>
      </div>
      <div class="site-header__line site-header__line--bottom">
        <div class="container">
          <nav class="site-header-navigation">
            <!-- menu-->
            <? $APPLICATION->IncludeComponent(
              "bitrix:menu",
              "burger",
              array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "Y",
                "COMPONENT_TEMPLATE" => "vertical_multilevel"
              ),
              false
            ); ?>
          </nav>
        </div>
      </div>
      <!-- mobile-menu-->
      <div class="mobile-menu">
        <!-- end h-contacts-->
        <? $APPLICATION->IncludeComponent(
          "bitrix:menu",
          "burger",
          array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "2",
            "MENU_CACHE_GET_VARS" => array(
            ),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "Y",
            "COMPONENT_TEMPLATE" => "vertical_multilevel"
          ),
          false
        ); ?>
      </div>
      <!-- end mobile-menu-->
      <div class="site-header-fixed">
        <div class="container">
          <div class="flex-row align-h-space-between">
            <div class="site-logo">
              <a href="<?= SITE_DIR ?>">
                <span class="site-logo__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 70">
                    <path d="M 0 80.369 L 63.063 80.369 L 63.063 89.369 L 0 89.369 L 0 80.369 Z M 63.063 39.938 L 37.903 14.777 L 46.317 6.364 L 39.953 0 L 31.54 8.413 L 31.533 8.406 L 31.525 8.414 L 23.11 0 L 16.746 6.364 L 25.16 14.778 L 0 39.938 L 0 71.469 L 63.063 71.469 L 63.063 39.938 Z M 54.063 62.469 L 9 62.469 L 9 43.666 L 23.104 29.562 L 23.111 29.569 L 31.531 21.149 L 39.951 29.569 L 39.959 29.561 L 54.063 43.665 L 54.063 62.469 Z"></path>
                  </svg>
                </span>
              </a>
            </div>
            <nav class="site-header-navigation">
              <!-- menu-->
              <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "burger",
                array(
                  "ALLOW_MULTI_SELECT" => "N",
                  "CHILD_MENU_TYPE" => "left",
                  "DELAY" => "N",
                  "MAX_LEVEL" => "2",
                  "MENU_CACHE_GET_VARS" => array(
                  ),
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_TYPE" => "N",
                  "MENU_CACHE_USE_GROUPS" => "Y",
                  "ROOT_MENU_TYPE" => "top",
                  "USE_EXT" => "Y",
                  "COMPONENT_TEMPLATE" => "vertical_multilevel"
                ),
                false
              ); ?>
            </nav>
            <div class="site-header-contacts">
              <div class="site-header-contacts__item">
                <a class="site-header-phone" href="tel:+79251010009">+7 925 101-00-09</a>
              </div>
              <div class="site-header-contacts__item">
                <a class="social-btn social-btn--whatsapp" href="https://wa.me/+79251010009?text=Здравствуйте.%20Вопрос%20по%20строительству%20дома?">
                  <svg>
                    <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#whatsapp"></use>
                  </svg>
                </a>
              </div>
              <div class="site-header-contacts__item">
                <a class="social-btn social-btn--telegram" href="https://t.me/castleRF">
                  <svg>
                    <use href="<?= SITE_TEMPLATE_PATH; ?>/img/icons/sprite.svg#telegram"></use>
                  </svg>
                </a>
              </div>
              <div class="site-header-contacts__item">
                <a class="request-btn js-modal-show" href="#js-modal-request">
                  <svg>
                    <use href="/local/templates/main_dev/img/icons/sprite.svg#letter_icon"></use>
                  </svg>
                </a>
              </div>
              <div class="menu-toggle"><span></span><span></span><span></span></div>
            </div>
          </div>
        </div>
        <!-- mobile-menu-->
        <div class="mobile-menu">
          <!-- end h-contacts-->
          <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "burger",
            array(
              "ALLOW_MULTI_SELECT" => "N",
              "CHILD_MENU_TYPE" => "left",
              "DELAY" => "N",
              "MAX_LEVEL" => "2",
              "MENU_CACHE_GET_VARS" => array(
              ),
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_TYPE" => "N",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "ROOT_MENU_TYPE" => "top",
              "USE_EXT" => "Y",
              "COMPONENT_TEMPLATE" => "vertical_multilevel"
            ),
            false
          ); ?>
        </div>
        <!-- end mobile-menu-->
      </div>
    </header>
    <!-- end header-->

    <main>