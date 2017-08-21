<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0)
	LocalRedirect($backurl);
$APPLICATION->SetTitle("Авторизация");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form",
	"login",
	array(
		"COMPONENT_TEMPLATE" => "login",
		"REGISTER_URL" => "/auth/register.php",
		"FORGOT_PASSWORD_URL" => "/auth/forgot.php",
		"PROFILE_URL" => "/personal/",
		"SHOW_ERRORS" => "N"
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>