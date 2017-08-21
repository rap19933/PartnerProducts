<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("addOperator");
?>
	<div class="container">
		<h2 class="text-center top-space">Добавление партнера к товару</h2>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<?$APPLICATION->IncludeComponent(
					"bitrix:infoportal.element.add.form",
					"addPartnerForm",
					array(
						"COMPONENT_TEMPLATE" => "addPartnerForm",
						"CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
						"CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
						"CUSTOM_TITLE_DETAIL_PICTURE" => "",
						"CUSTOM_TITLE_DETAIL_TEXT" => "",
						"CUSTOM_TITLE_IBLOCK_SECTION" => "",
						"CUSTOM_TITLE_NAME" => "",
						"CUSTOM_TITLE_PREVIEW_PICTURE" => "",
						"CUSTOM_TITLE_PREVIEW_TEXT" => "",
						"CUSTOM_TITLE_TAGS" => "",
						"DEFAULT_INPUT_SIZE" => "30",
						"DETAIL_TEXT_USE_HTML_EDITOR" => "N",
						"ELEMENT_ASSOC" => "CREATED_BY",
						"GROUPS" => array(
							0 => "1",
							1 => "6",
						),
						"IBLOCK_ID" => "1",
						"IBLOCK_TYPE" => "partners",
						"LEVEL_LAST" => "Y",
						"LIST_URL" => "",
						"MAX_FILE_SIZE" => "0",
						"MAX_LEVELS" => "100000",
						"MAX_USER_ENTRIES" => "100000",
						"PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
						"PROPERTY_CODES" => array(
							0 => "1",
							1 => "2",
							2 => "3",
							3 => "NAME",
						),
						"PROPERTY_CODES_REQUIRED" => array(
							0 => "1",
							1 => "2",
							2 => "3",
							3 => "NAME",
						),
						"RESIZE_IMAGES" => "N",
						"SEF_MODE" => "N",
						"STATUS" => "ANY",
						"STATUS_NEW" => "N",
						"USER_MESSAGE_ADD" => "",
						"USER_MESSAGE_EDIT" => "",
						"USE_CAPTCHA" => "N"
					),
					false,
					array(
						"ACTIVE_COMPONENT" => "Y"
					)
				);?>
			</div>
			<div class="col-sm-6">
				<?$APPLICATION->IncludeComponent(
					"bitrix:iblock.element.add.list",
					"addPartnerForm",
					array(
						"ALLOW_DELETE" => "N",
						"ALLOW_EDIT" => "Y",
						"EDIT_URL" => "addoperator.php",
						"ELEMENT_ASSOC" => "PROPERTY_ID",
						"ELEMENT_ASSOC_PROPERTY" => "3",
						"GROUPS" => array(
							0 => "1",
							1 => "6",
						),
						"IBLOCK_ID" => "1",
						"IBLOCK_TYPE" => "partners",
						"MAX_USER_ENTRIES" => "100000",
						"NAV_ON_PAGE" => "10",
						"SEF_MODE" => "N",
						"STATUS" => "ANY",
						"COMPONENT_TEMPLATE" => "addPartnerForm"
					),
					false,
					array(
						"ACTIVE_COMPONENT" => "Y"
					)
				);?>
			</div>
		</div>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
