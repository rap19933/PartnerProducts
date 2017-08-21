<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Забыли пароль");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.forgotpasswd",
	"forgotPas",
	array(
		"COMPONENT_TEMPLATE" => "forgotPas"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
