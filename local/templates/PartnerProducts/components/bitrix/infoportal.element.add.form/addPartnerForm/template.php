<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<? if (count($arResult["ERRORS"])): ?>
	<?= ShowError(implode("<br />", $arResult["ERRORS"])) ?>
<? endif ?>
<div class="modal-content">
	<div class="modal-header">
		<h3 class="text-center text-primary">Создать нового партнера и привязать его к выбраному товару</h3>
	</div>
	<div class="modal-body">
		<form name="iblock_add" action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data">
			<?= bitrix_sessid_post() ?>
			<? if (is_array($arResult["PROPERTY_LIST"]) && count($arResult["PROPERTY_LIST"] > 0)): ?>
				<? foreach ($arResult["PROPERTY_LIST"] as $propertyID): ?>
					<? if (intval($propertyID) > 0): ?>
						<?= $arResult["PROPERTY_LIST_FULL"][$propertyID]["NAME"] ?>
					<? else: ?>
						<?= !empty($arParams["CUSTOM_TITLE_" . $propertyID]) ? $arParams["CUSTOM_TITLE_" . $propertyID] :
							GetMessage("IBLOCK_FIELD_" . $propertyID) ?>
					<? endif ?>
					<? if (in_array($propertyID, $arResult["PROPERTY_REQUIRED"])): ?>
						<span class="starrequired">*</span>
					<? endif ?>
					<?
					if (intval($propertyID) > 0)
					{
						if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "T"
							&& $arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] == "1")
							$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "S";
						elseif
						(
							(
								$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "S"
								||
								$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] == "N"
							)
							&&
							$arResult["PROPERTY_LIST_FULL"][$propertyID]["ROW_COUNT"] > "1"
						)
							$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "T";
					}
					elseif (($propertyID == "TAGS") && CModule::IncludeModule('search'))
						$arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"] = "TAGS";
					if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y")
					{
						$inputNum = ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0) ?
							count($arResult["ELEMENT_PROPERTIES"][$propertyID]) : 0;
						$inputNum += $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE_CNT"];
					}
					else
					{
						$inputNum = 1;
					}
					if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["GetPublicEditHTML"])
						$INPUT_TYPE = "USER_TYPE";
					else
						$INPUT_TYPE = $arResult["PROPERTY_LIST_FULL"][$propertyID]["PROPERTY_TYPE"];
					switch ($INPUT_TYPE):
						case "S":
							for ($i = 0; $i < $inputNum; $i++) {
								if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
								{
									$value = intval($propertyID) > 0 ? $arResult["ELEMENT_PROPERTIES"][$propertyID][$i]["VALUE"] :
										$arResult["ELEMENT"][$propertyID];
								}
								elseif ($i == 0)
								{
									$value = intval($propertyID) <= 0 ? "" : $arResult["PROPERTY_LIST_FULL"][$propertyID]["DEFAULT_VALUE"];
								}
								else
								{
									$value = "";
								}
								?>
								<? if($arResult["PROPERTY_LIST_FULL"][$propertyID]["USER_TYPE"] == "UserID")
								{
									$value = $USER->GetID();
									$readonly = 'readonly';
								}
								else $readonly = '';
								?>
								<input type="text"  class="form-control" name="PROPERTY[<?= $propertyID ?>][<?= $i ?>]"
									   value="<?= $value ?>"  <?= $readonly ?>/><?
								if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["USER_TYPE"] == "DateTime"):?><?
									$APPLICATION->IncludeComponent(
										'bitrix:main.calendar',
										'',
										array(
											'FORM_NAME' => 'iblock_add',
											'INPUT_NAME' => "PROPERTY[" . $propertyID . "][" . $i . "]",
											'INPUT_VALUE' => $value,
										),
										null,
										array('HIDE_ICONS' => 'Y')
									);
									?>
									<small><?= GetMessage("IBLOCK_FORM_DATE_FORMAT") ?><?= FORMAT_DATETIME ?></small><?
								endif;
								?>
								<?
							}
							break;
						case "L":
							if ($arResult["PROPERTY_LIST_FULL"][$propertyID]["LIST_TYPE"] == "C")
								$type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "checkbox" : "radio";
							else
								$type = $arResult["PROPERTY_LIST_FULL"][$propertyID]["MULTIPLE"] == "Y" ? "multiselect" : "dropdown";
							?>
							<select class="form-control" name="PROPERTY[<?=$propertyID?>]<?=$type=="multiselect"
								? "[]\" size=\"".count($arResult["PROPERTY_LIST_FULL"][$propertyID]["ENUM"])."\" multiple=\"multiple" : ""?>">
								<?
								if (intval($propertyID) > 0)
								{
									$sKey = "ELEMENT_PROPERTIES";
								}
								else
								{
									$sKey = "ELEMENT";
								}
								foreach ($arResult["PROPERTY_LIST_FULL"][$propertyID]["ENUM"] as $key => $arEnum)
								{
									$checked = false;
									if ($arParams["ID"] > 0 || count($arResult["ERRORS"]) > 0)
									{
										foreach ($arResult[$sKey][$propertyID] as $elKey => $arElEnum)
										{
											if ($key == $arElEnum["VALUE"]) {$checked = true; break;}
										}
									}
									else
									{
										if ($arEnum["DEF"] == "Y") $checked = true;
									}
									?>
									<option value="<?=$key?>" <?=$checked ? " selected=\"selected\"" : ""?>><?=$arEnum["VALUE"]?></option>
									<?
								}
								?>
							</select>
							<?
							break;
					endswitch;?>
				<? endforeach; ?>
			<? endif ?>
			<div class="modal-footer">
				<input class="btn btn-primary btn-block" type="submit" name="iblock_submit"
					   value="<?= GetMessage("IBLOCK_FORM_SUBMIT") ?>"/>
			</div>
		</form>
	</div>
</div>
