<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Раздел пользователя");
?>
<div class="container">
	<div class="row">
		<?$APPLICATION->IncludeComponent(
			"bitrix:main.profile",
			".default",
			array(
				"CHECK_RIGHTS" => "Y",
				"SEND_INFO" => "N",
				"SET_TITLE" => "Y",
				"USER_PROPERTY" => array(
				),
				"USER_PROPERTY_NAME" => "",
				"COMPONENT_TEMPLATE" => ".default"
			),
			false
		);?>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
