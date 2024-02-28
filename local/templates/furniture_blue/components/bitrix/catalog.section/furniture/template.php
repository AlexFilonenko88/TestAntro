<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="catalog-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>


<?
foreach($arResult["ITEMS"] as $cell=>$arElement):
	$width = 0;
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CATALOG_ELEMENT_DELETE_CONFIRM')));
?>
<?
	// echo "<pre>";
	// print_r($arElement);
	// echo "</pre>";
?>
	<div class="catalog_item">
		<div class="top">
			<div class="image">
				<img src="<?=$arElement["PREVIEW_PICTURE"]['SRC']?>">
			</div>
		</div>
		<div class="bottom">
			<div class="catalog_title">
				<a class="zag" href=""><?=$arElement["NAME"]?></a>
			</div>
			<div class="rating_review">
				<div class="rating"></div>
				<div class="review"></div>
			</div>
			<div class="color">
				<div class="zagprop"><?=$arElement["PROPERTIES"]["COLOR"]["NAME"]?></div>
				<div class="spisok_color">
					<?foreach($arElement["PROPERTIES"]["COLOR"]["VALUE_XML_ID"] as $colorItem){?>
						<div class="color_item" style="background: #<?= $colorItem?>;"></div>
					<?}?>
				</div>
			</div>
			<div class="price">
				<div class="new_price"><?=$arElement["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</div>
				<div class="old_price"></div>
			</div>
			<div class="size">
				<div class="zagprop"><?//=$arElement["PROPERTIES"]["COLOR"]["NAME"]?></div>
				<div class="spisoksize"></div>		
			</div>
		</div>
	</div>

<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
