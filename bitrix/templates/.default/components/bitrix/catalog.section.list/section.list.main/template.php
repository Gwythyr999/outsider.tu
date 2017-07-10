<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
$this->setFrameMode(true);
?>
<?if(0 < $arResult["SECTIONS_COUNT"]):?>
<ul id="filter" class="filter">
    <li><a data-filter="*" class="btn btn-filter" role="button" data-text="All">All</a></li>
<?foreach ($arResult['SECTIONS'] as &$arSection):?>
    <li><a data-filter=".<?=$arSection["NAME"];?>" class="btn btn-filter" role="button" data-text="<?=$arSection["NAME"];?>"><? echo $arSection["NAME"];?></a></li>
<?endforeach;?>
</ul>
<?endif;?>