<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?><!DOCTYPE html>
<html>
	<head>
		<?$APPLICATION->ShowHead();?>
		<title><?$APPLICATION->ShowTitle();?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/local/templates/main/css/styles.min.css?<?=rand();?>">
    <link rel="stylesheet" href="/local/templates/main/css/custom.css?<?=rand();?>">
	<meta name="yandex-verification" content="e50729e693b1fb6c" />
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-XHZNF5SD91"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-XHZNF5SD91');
</script>



	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" sizes="120x120" href="/favicon_logo_120px.svg" type="image/svg+xml">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon_32-32.png" type="image/png" sizes="32x32">
	<link rel="icon" href="/favicon_48x48.png" type="image/png" sizes="48x48">

      <script src="https://api-maps.yandex.ru/2.1/?apikey=28da747c-8c53-4ace-b52d-42ab28705bef&lang=ru_RU" type="text/javascript"></script>
	</head>
</html>
<body>
	<?$APPLICATION->ShowPanel();?>
    <div class="wrap">
      <!-- header-->
      <header class="header">
        <div class="header__grid">
          <div class="header__left">
            <!-- logo-->
			<a class="logo" href="/"> 
              <!--svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#logo"></use>
              </svg-->
				<img src="<?=SITE_TEMPLATE_PATH;?>/img/logo/logo_castle_rf_pink.png" />
              <!--p>Строительная компания</p></a-->
			  </a>
            <!-- end logo-->
            <!-- scrollup-->
            <div class="scrollup">
              <div class="scrollup__flex">
                <svg>
                  <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-up"></use>
                </svg>
              </div>
            </div>
            <!-- end scrollup-->
          </div>
          <div class="header__top">
            <!-- navbar-->
            <nav class="navbar">
              <!-- menu-->
              <?$APPLICATION->IncludeComponent(
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
              );?>
            </nav>
            <!-- end navbar-->
          </div>
          <div class="header__center">
            <!-- h-contacts-->
            <div class="h-contacts">
              <!-- tel-->

<a class="tel" href="tel:+79251010009"> 
                <svg>
                  <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#smartphone_black"></use>
                </svg><span>+7 925 101-00-09</span></a>
              <!-- end tel-->


              <!-- messagers-->
              <div class="messagers">
<a href="https://wa.me/+79251010009?text=Здравствуйте.%20Вопрос%20по%20строительству%20дома?">
                  <svg>
                    <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#whatsapp"></use>
                  </svg></a>
<!--
<a href="viber://chat?number=%2B79251010009">
                  <svg>
                    <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#viber"></use>
                  </svg></a>
-->
<a href="https://t.me/castleRF">
                  <svg>
                    <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#telegram"></use>
                  </svg></a><span>+7 925 101-00-09</span></div>
              <!-- end messagers-->
            </div>
            <!-- end h-contacts-->
          </div>
          <div class="header__right">
            <!-- request--><a class="request js-modal-show" href="#js-modal-request">
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#letter_icon"></use>
              </svg><span>ЗАЯВКА</span></a>
            <!-- end request-->
            <!-- office-map-->
			<!-- <a class="office-map" href="/contacts/">
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#mappoint"></use>
              </svg><span>Офис на карте</span></a> -->
            <!-- end office-map-->
          </div>
          <!-- menu-toggle-->
          <div class="menu-toggle"><span></span><span></span><span></span></div>
          <!-- end menu-toggle-->
        </div>
        <!-- mobile-menu-->
        <div class="mobile-menu">
          <!-- h-contacts-->
          <div class="h-contacts">
            <!-- tel--><a class="tel" href="tel:+79251010009"> 
              <svg>
                <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#smartphone_black"></use>
              </svg><span>+7 925 101-00-09</span></a>
            <!-- end tel-->
            <!-- messagers-->
            <div class="messagers">
<a href="https://wa.me/+79251010009?text=Здравствуйте.%20Вопрос%20по%20строительству%20дома?">
                <svg>
                  <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#whatsapp"></use>
                </svg></a>
<!--
<a href="viber://chat?number=%2B79251010009">
                <svg>
                  <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#viber"></use>
                </svg></a>
-->
<a href="https://t.me/castleRF">
                <svg>
                  <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#telegram"></use>
                </svg></a><span>+7 925 101-00-09</span></div>
            <!-- end messagers-->
          </div>
          <!-- end h-contacts-->
          <?$APPLICATION->IncludeComponent(
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
          );?>

        </div>
        <!-- end mobile-menu-->
      </header>
      <!-- end header-->
      <main>