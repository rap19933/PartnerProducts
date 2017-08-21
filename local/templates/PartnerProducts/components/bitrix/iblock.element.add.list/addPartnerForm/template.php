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
?>
	<div class="modal-content">
		<div class="modal-header">
			<h3 class="text-center text-primary">Привязать партнера к выбраному товару</h3>
			<h4 class="text-center text-primary"><?=GetMessage("IBLOCK_ADD_LIST_TITLE")?></h4>
		</div>
		<div class="modal-body">
			<?if($arResult["NO_USER"] == "N"):?>
				<?if (count($arResult["ELEMENTS"]) > 0):?>
					<?foreach ($arResult["ELEMENTS"] as $arElement):?>
						<?if ($arResult["CAN_EDIT"] == "Y"):?>
							<?if ($arElement["CAN_EDIT"] == "Y"):?>
<a href="<?=$arParams["EDIT_URL"]?>?idProduct=<?=$_GET["idProduct"]?>&idSection=<?=$_GET["idSection"]?>&addID=<?=$arElement["ID"]?>"
								   class="btn btn-primary btn-block" ><?=GetMessage("IBLOCK_ADD_LIST_EDIT")?> - <?=$arElement["NAME"]?></a>
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