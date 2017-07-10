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
<section class="masonry">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>
    <?foreach($arResult["ITEMS"] as $cell=>$arItem):?>

        <div class="item design" data-category="design">
            <article class="post">
                <figure class="figure square">
                    <div class="img-trigger">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
                             alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
                             title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>" />
                    </div>
                    <a href="<?echo $arItem["DETAIL_PAGE_URL"]?>" class="overlay-link"></a>
                </figure>
                <section class="post-content">
                    <h4 class="post-title"><a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a></h4>
                    <h6 class="category"><?
                        $id = $arItem["IBLOCK_SECTION_ID"];
                        $res = CIBlockSection::GetByID($id);
                        if($ar_res = $res->GetNext())
                            echo $ar_res['NAME'];
                        ?>
                    </h6>
                    <p><?echo $arItem["PREVIEW_TEXT"];?></p>
                </section>
            </article>
        </div>
    <?endforeach;?>
</section>
