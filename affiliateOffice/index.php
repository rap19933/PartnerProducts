<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Партнерский кабинет");
?>
<?
$arGroups = $GLOBALS["USER"]->GetUserGroupArray();
if (in_array(7, $arGroups) || $USER->IsAdmin()){
	$APPLICATION->IncludeComponent(
		"bitrix:iblock.element.add.list",
		"affiliateOffice",
		array(
			"ALLOW_DELETE" => "Y",
			"ALLOW_EDIT" => "Y",
			"EDIT_URL" => "partnerskiy-kabinet.php",
			"ELEMENT_ASSOC" => "PROPERTY_ID",
			"ELEMENT_ASSOC_PROPERTY" => "3",
			"GROUPS" => array(
				0 => "7",
			),
			"IBLOCK_ID" => "1",
			"IBLOCK_TYPE" => "partners",
			"MAX_USER_ENTRIES" => "100000",
			"NAV_ON_PAGE" => "10",
			"SEF_MODE" => "Y",
			"STATUS" => "ANY",
			"COMPONENT_TEMPLATE" => "affiliateOfficeActivProdict",
			"SEF_FOLDER" => "/affiliateOffice/"
		),
		false
	);
}
else {?>
	<h2><span style="color: red;">доступ запрещен</span></h2>
	<?
}?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>