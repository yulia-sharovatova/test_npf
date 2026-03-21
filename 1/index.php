<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?>

<!-- Контент главной страницы -->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array("AREA_FILE_SHOW" => "file", "PATH" => SITE_DIR."include/about.php"), false);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>