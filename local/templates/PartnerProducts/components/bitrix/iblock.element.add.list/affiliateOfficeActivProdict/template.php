<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(false);
if (!empty($_GET["affiliate"]) && !empty($_GET["CODE"])){
	?>
	<table class="table table-hover tablica " id='table_element'>
		<caption>
			<h3 class="text-center text-primary"><?=GetMessage("IBLOCK_ADD_LIST_TITLE")?> "<?=$_GET["affiliate"]?>"</h3>
		</caption>
		<thead>
		<tr class="mycolor">
			<th>Название товара</th>
			<th>Управление активностью</th>
		</tr>
		</thead>
		<tbody>
		<?if($arResult["NO_USER"] == "N"):?>
			<?if (count($arResult["ELEMENTS"]) > 0):?>
				<?foreach ($arResult["ELEMENTS"] as $arElement):?>
					<?if ($arResult["CAN_EDIT"] == "Y"):?>
						<?if ($arElement["CAN_EDIT"] == "Y"):?>
							<tr>
								<td><?=$arElement["NAME"]?></td>
								<td>
									<?if ($arElement["ACTIVE"] === "Y")
										$activ = "Деактивировать";
									else
										$activ = "Активировать";?>
									<a id="active=<?=$arElement["ACTIVE"]?>&CODE=<?=$arElement["ID"]?>
										&SECTION_ID=<?=$arElement["IBLOCK_SECTION_ID"]?>&<?=bitrix_sessid_get()?>"
									   class="btn btn-primary activ"><?=$activ?></a>
								</td>
							</tr>
						<?else:?>&nbsp;
						<?endif?>
					<?endif?>
				<?endforeach?>
			<?else:?>
				<h4 class="text-center text-danger"><?=GetMessage("IBLOCK_ADD_LIST_EMPTY")?></h4>
			<?endif?>
		<?endif?>
		</tbody>
	</table>
	<?
}
else {
	LocalRedirect($SITE_DIR);
}
?>
<script type="text/javascript" src="activEdit.js"></script>
