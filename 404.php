<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Not Found");?>
	<div class="bx-404-container" style="text-align: center">
		<div class="bx-404-block"><img src="<?=SITE_TEMPLATE_PATH?>/images/404.jpg" alt=""></div>
		<div class="bx-404-text-block"><h3>Неправильно набран адрес, <br>или такой страницы на сайте больше не существует.</h3></div>
		<div class=""><h4>Вернитесь на <a href="<?=SITE_DIR?>">главную</a></h4></div>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
