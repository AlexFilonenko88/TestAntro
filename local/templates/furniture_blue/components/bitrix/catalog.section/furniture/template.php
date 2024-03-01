<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.smart.filter", 
	"filter_custom", 
	array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "5",
		"SECTION_ID" => "",
		"FILTER_NAME" => "arrFilter",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SAVE_IN_SESSION" => "N",
		"FILTER_VIEW_MODE" => "horizontal",
		"POPUP_POSITION" => "right",
		"DISPLAY_ELEMENT_COUNT" => "Y",
		"COMPONENT_TEMPLATE" => "filter_custom",
		"SECTION_CODE" => "",
		"PREFILTER_NAME" => "smartPreFilter",
		"TEMPLATE_THEME" => "blue",
		"SEF_MODE" => "N",
		"PAGER_PARAMS_NAME" => "arrPager",
		"XML_EXPORT" => "N",
		"SECTION_TITLE" => "-",
		"SECTION_DESCRIPTION" => "-"
	),
	false
);?>
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
// echo '<pre>';
// print_r($arElement["PROPERTIES"]['SIZE']);
// echo '</pre>';
?>
	<div class="catalog_item">
		<div class="top">
		<?if($arElement['PROPERTIES']['GALLERY']['VALUE']){?>
			<div class="imagblock">
				<?foreach($arElement['PROPERTIES']['GALLERY']['VALUE'] as $image){?>
					<div class="image">
						<img src="<?=CFile::GetPath($image)?>">
						<div class="heart"></div>
					</div>
				<?}?>
			</div>
			<?}else{?>
				<div class="only_imagblock">
						<div class="image">
							<img src="<?=$arElement['PREVIEW_PICTURE']['SRC']?>">
							<div class="heart"></div>
						</div>
				</div>
			<?}?>
		</div>
		<div class="bottom1">
			<div class="catalog_title">
				<a class="zag" href=""><?=$arElement["NAME"]?></a>
			</div>
			<div class="rating_review">
				<?if($arElement["PROPERTIES"]["OLD_PRICE"]["VALUE"]){?>
					<div class="rating"><?= $arElement["PROPERTIES"]["RATING"]["VALUE"]?>/5</div>
				<?}else{?>
					<div class="rating">нет оценок</div>
				<?}?>
				<?if($arElement["PROPERTIES"]["REVIEWS"]["VALUE"]){?>
					<div class="review"><?= $arElement["PROPERTIES"]["REVIEWS"]["VALUE"]?> отзывов</div>
				<?}else{?>
					<div class="review">нет отзывов</div>
				<?}?>
			</div>
			<div class="color">
				<div class="spisok_color">
					<?foreach($arElement["PROPERTIES"]["COLOR"]["VALUE_XML_ID"] as $colorItem){?>
						<div class="color_item" style="background: #<?= $colorItem?>;"></div>
					<?}?>
				</div>
			</div>
			<div class="price">
				<div class="new_price"><?=$arElement["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</div>
				<?if($arElement["PROPERTIES"]["OLD_PRICE"]["VALUE"]){?>
					<div class="old_price"><?=$arElement["PROPERTIES"]["OLD_PRICE"]["VALUE"]?> ₽</div>
				<?}?>
			</div>
		</div>
		<div class="bottom2">
			<div class="catalog_title">
				<a class="zag" href=""><?=$arElement["NAME"]?></a>
			</div>
			<div class="rating_review">
			<?if($arElement["PROPERTIES"]["OLD_PRICE"]["VALUE"]){?>
				<div class="rating"><?= $arElement["PROPERTIES"]["RATING"]["VALUE"]?>/5</div>
				<?}else{?>
					<div class="rating">нет оценок</div>
				<?}?>
				<?if($arElement["PROPERTIES"]["REVIEWS"]["VALUE"]){?>
					<div class="review"><?= $arElement["PROPERTIES"]["REVIEWS"]["VALUE"]?> отзывов</div>
				<?}else{?>
					<div class="review">нет отзывов</div>
				<?}?>
			</div>
			<div class="color">
				<div class="zagprop">Цвет</div>
				<div class="spisok_color">
					<?foreach($arElement["PROPERTIES"]["COLOR"]["VALUE_XML_ID"] as $colorItem){?>
						<div class="color_item" style="background: #<?= $colorItem?>;"></div>
					<?}?>
				</div>
			</div>
			<div class="price">
				<div class="new_price"><?=$arElement["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</div>
				<?if($arElement["PROPERTIES"]["OLD_PRICE"]["VALUE"]){?>
					<div class="old_price"><?=$arElement["PROPERTIES"]["OLD_PRICE"]["VALUE"]?> ₽</div>
				<?}?>
			</div>
			<div class="size">
				<div class="zagprop"><?=$arElement["PROPERTIES"]["SIZE"]["NAME"]?></div>
				<div class="spisoksize">
					<div class="alsizes">
					<?foreach( $arElement["PROPERTIES"]["SIZE"]['VALUE'] as $key => $sizeItem){?>
						<div class="sizes">
							<div class="size_item-name"><?= $arElement["PROPERTIES"]["SIZE"]['VALUE_XML_ID'][$key]?></div>
							<div class="size_item-size"><?=$sizeItem?></div>
						</div>
					<?}?>
				</div>
					<div class="more"> ещё +4</div>
				</div>		
			</div>
			<div class="button_buy">
				<button class="btn">
					В корзину
				</button>
			</div>
		</div>
	</div>
<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>

