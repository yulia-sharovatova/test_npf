<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<?foreach ($arResult['FILES'] as $aFile):?>
<div class="files__box">
	<div class="files__list ">
		<div class="files__item">
			<div class="files__icon">
 				<img alt="<?=htmlspecialcharsbx($aFile['NAME'])?>" src="<?=SITE_TEMPLATE_PATH?>/image/<?=$aFile['EXTENSION']?>.svg" class="files__img">
			</div>
			<div class="files__attr">
				<div class="files__name">
					<a href="<?=htmlspecialcharsbx($aFile['PATH'])?>" class="files__link" target="_blank" download="">
					<?=htmlspecialcharsbx($aFile['NAME'])?> </a>
				</div>
			</div>
		</div>
	</div>
</div>

<?endforeach;?>