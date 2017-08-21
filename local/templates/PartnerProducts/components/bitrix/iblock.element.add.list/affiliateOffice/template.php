<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
if ($arResult[ELEMENTS_COUNT]==1)
{
	LocalRedirect($arParams["EDIT_URL"]."?affiliate=".$arResult["ELEMENTS"][0]["NAME"]."&CODE=".$arResult["ELEMENTS"][0]["ID"]);
}
?>
<div class="modal-content">
	<div class="modal-header">
		<h3 class="text-center text-primary">Выбирете партнера, к которому привязаны товары</h3>
		<h4 class="text-center text-primary"><?=GetMessage("IBLOCK_ADD_LIST_TITLE")?></h4>
	</div>
	<div class="modal-body">
		<?if($arResult["NO_USER"] == "N"):?>
			<?if (count($arResult["ELEMENTS"]) > 0):?>
				<?foreach ($arResult["ELEMENTS"] as $arElement):?>
					<?if ($arResult["CAN_EDIT"] == "Y"):?>
						<?if ($arElement["CAN_EDIT"] == "Y"):?>
							<a href="<?=$arParams["EDIT_URL"]?>?affiliate=<?=$arElement["NAME"]?>&amp;CODE=<?=$arElement["ID"]?>"
							   class="btn btn-primary btn-block">
								<?=GetMessage("IBLOCK_ADD_LIST_EDIT")?> - <?=$arElement["NAME"]?></a>
						<?else:?>&nbsp;
						<?endif?>
					<?endif?>
				<?endforeach?>
			<?else:?>
				<h4 class="text-center text-danger"><?=GetMessage("IBLOCK_ADD_LIST_EMPTY")?></h4>
			<?endif?>
		<?endif?>
	</div>
</div>
<?if (strlen($arResult["NAV_STRING"]) > 0):?><?=$arResult["NAV_STRING"]?><?endif?>
