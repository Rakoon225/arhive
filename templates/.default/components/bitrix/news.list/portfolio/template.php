<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<!-- portfolio-->
<div class="portfolio">
<div class="portfolio__wrap">
  <h1 class="portfolio__title">Портфолио</h1>
  <div class="portfolio__row">
  	<? 
  		foreach ($arResult['ITEMS'] as $arItem):
  			$count_photo = 0;
  			$is_video = false;
  			if (count($arItem['PROPERTIES']['MORE_PHOTO']['VALUE']) > 0) $count_photo = count($arItem['PROPERTIES']['MORE_PHOTO']['VALUE']);
  			if ($video_link = $arItem['PROPERTIES']['LINK_VIDEO']['VALUE']) $is_video = true;
  	?>
	    <div class="portfolio__item"><a class="js-modal-show" href="#portfolio<?=$arItem['ID'];?>">
	        <div class="portfolio__img<?=($is_video ? ' video' : '');?>"><img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="">
	        	<? if ($count_photo > 0): ?>
		        	<span><?=$count_photo;?> </span>
		        <? endif; ?>
	        </div>
	        <div class="portfolio__name">
	          <div class="portfolio__icon">
	            <svg>
	              <use href="<?=SITE_TEMPLATE_PATH;?>/img/icons/sprite.svg#arrow-upright-icon"></use>
	            </svg>
	          </div>
	          <h2><?=$arItem['NAME'];?></h2>
	        </div></a>
	      <!-- modal-->
	      <div class="modal js-modal" id="portfolio<?=$arItem['ID'];?>">
	      	<? 
	      		if ($is_video): 
	      			$video_explode = explode('https://youtu.be/', $video_link);
	      	?>
	      		<!-- modal-video-->
		        <div class="modal-video">
		          <div class="container">
		            <div class="modal-video__row">
		              <div class="modal-video__left">
		                <!-- video-block-->
		                <div class="video-block"><iframe width="853" height="480" src="//youtube.com/embed/<?=$video_explode[1];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>  </div>
		                <!-- end video-block-->
		              </div>
		              <div class="modal-video__right"><a class="modal__close js-modal-close" href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/icon-close.png" alt=""></a>
		                <h3 class="modal-video__title"><?=$arItem['NAME'];?></h3>
		                <div class="modal-video__desc">               
		                  <?=$arItem['~PREVIEW_TEXT'];?>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		        <!-- end modal-video-->
	      	<? else: ?>
		        <!-- modal-img-->
		        <div class="modal-img">
		          <div class="container">
		            <div class="modal-img__row">
		              <div class="modal-img__left">
		                <!-- modal-carousel-->
		                <div class="modal-carousel">
		                	<?
                                foreach ($arItem['PROPERTIES']['MORE_PHOTO']['VALUE'] as $arPhoto):
                                    $img = CFile::ResizeImageGet($arPhoto, array('width'=>800, 'height'=>800), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                            ?>
		                  		<div class="item"><img src="<?=$img['src'];?>" alt=""></div>
		                  	<? endforeach; ?>
		                </div>
		                <!-- end modal-carousel-->
		                <!-- modal-thumbs-->
		                <div class="modal-thumbs">
		                	<? 
		                		foreach ($arItem['PROPERTIES']['MORE_PHOTO']['VALUE'] as $arPhoto):
  								$img = CFile::ResizeImageGet($arPhoto, array('width'=>124, 'height'=>124), BX_RESIZE_IMAGE_EXACT, true);
		                	?>
		                  		<div class="item"><img src="<?=$img['src'];?>" alt=""></div>
		                  	<? endforeach; ?>
		                </div>
		                <!-- end modal-thumbs-->
		              </div>
		              <div class="modal-img__right"><a class="modal__close js-modal-close" href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/img/icons/icon-close.png" alt=""></a>
		                <h3 class="modal-img__title"><?=$arItem['NAME'];?></h3>
		                <div class="modal-img__desc">               
		                  <?=$arItem['~PREVIEW_TEXT'];?>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		        <!-- end modal-img-->
	    	<? endif; ?>
	      </div>
	      <!-- end modal-->
	    </div>
	<? endforeach; ?>
    
  </div>
  <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>
</div>
<!-- end portfolio-->
