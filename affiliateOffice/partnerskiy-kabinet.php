<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Партнерский кабинет");
?>
<?
$arGroups = $GLOBALS["USER"]->GetUserGroupArray();
if (in_array(7, $arGroups) || $USER->IsAdmin()){?>
	<div class="container">
		<div class="row">
			<?$APPLICATION->IncludeComponent(
				"bitrix:iblock.element.add.list",
				"affiliateOfficeActivProdict",
				array(
					"ALLOW_DELETE" => "Y",
					"ALLOW_EDIT" => "Y",
					"EDIT_URL" => "",
					"ELEMENT_ASSOC" => "PROPERTY_ID",
					"ELEMENT_ASSOC_PROPERTY" => "4",
					"GROUPS" => array(
						0 => "7",
					),
					"IBLOCK_ID" => "2",
					"IBLOCK_TYPE" => "production",
					"MAX_USER_ENTRIES" => "100000",
					"NAV_ON_PAGE" => "10",
					"SEF_FOLDER" => "/affiliateOffice/",
					"SEF_MODE" => "Y",
					"STATUS" => "ANY",
					"COMPONENT_TEMPLATE" => "affiliateOfficeActivProdict"
				),
				false
			);?>
		</div>
	</div>
<?}
else {?>
	<h2><span style="color: red;">доступ запрещен</span></h2>
<?}?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>