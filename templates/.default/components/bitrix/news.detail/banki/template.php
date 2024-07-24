<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<?=$arResult['~DETAIL_TEXT']; ?>

<? $this->SetViewTarget('page_header');?>
	<div class="page__row">
		<h1 class="page__title"><?=$arResult['NAME'];?></h1>
	</div>
<? $this->EndViewTarget();?>