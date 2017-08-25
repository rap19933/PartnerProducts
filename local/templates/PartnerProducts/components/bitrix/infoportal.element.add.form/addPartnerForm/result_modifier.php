<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
//Переход по кнопке
if (!empty($_GET["idProduct"]) && !empty($_GET["idSection"])){
	if (!empty($_GET["addID"])) {
		if(CModule::IncludeModule("iblock")) {
			//Добавление партнера к товару
			$res = CIBlockElement::SetPropertyValuesEx(
				$_GET["idProduct"],
				2,
				array(4 => $_GET["addID"])
			);
			//Добавление пользователя в группу оператора
			global $USER;
			$arGroups = $GLOBALS["USER"]->GetUserGroupArray();
			if (!in_array(7, $arGroups)){
				$arGroups[] = 7;
				$USER->SetUserGroup($USER->GetID(), $arGroups);
				$USER->SetUserGroupArray($arGroups);
			}
			if (!$res) {
				LocalRedirect($SITE_DIR);
			}
		}
	}
}
else {
	LocalRedirect($SITE_DIR);
}
?>

