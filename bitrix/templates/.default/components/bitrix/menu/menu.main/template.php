<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <ul class="nav navbar-nav" role="menubar">
    <?
    $previousLevel = 0;
foreach($arResult as $arItem):?>

    <?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
        <?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
    <?endif?>

    <?if ($arItem["IS_PARENT"]):?>

    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
        <li class="dropdown" role="menuitem"><a href="<?=$arItem["LINK"]?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?=$arItem["TEXT"]?><span class="caret"></span></a>
        <ul class="dropdown-menu" role="menu">
    <?else:?>
        <li role="menuitem"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
        <ul>
    <?endif?>

    <?else:?>
    <?if ($arItem["DEPTH_LEVEL"] == 1):?>
         <li role="menuitem"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
     <?else:?>
          <li  role="menuitem"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
      <?endif?>

    <?endif?>

    <?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>
    <?if ($previousLevel > 1)://close last item tags?>
        <?=str_repeat("</ul></li>", ($previousLevel-1) );?>
    <?endif?>
    </ul>
<?endif;?>