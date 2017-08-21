<?require_once($_SERVER['DOCUMENT_ROOT']. "/bitrix/modules/main/include/prolog_before.php");?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?
if (check_bitrix_sessid() && CModule::IncludeModule("iblock")) {
	if ($_POST['active'] === "Y")
	{
		$active = "N";
	}
	else
	{
		$active = "Y";
	}
	$el = new CIBlockElement;
	$arLoadProductArray = Array(
		"MODIFIED_BY"    => $USER->GetID(),
		"IBLOCK_SECTION" => $_POST['SECTION_ID'],
		"IBLOCK_ID"      => 2,
		"ACTIVE"         => $active
	);
	echo $res = $el->Update($_POST['CODE'], $arLoadProductArray);
}
else
	LocalRedirect($SITE_DIR);
?>