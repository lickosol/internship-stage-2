<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>

    <?foreach($arResult as $arItem):?>

        <nav class="nav-list">
            <li><a href="<?=$arItem["LINK"]?>" class="nav-list__item"><?=$arItem["TEXT"]?></a></li>
        </nav>

    <?endforeach?>

    <div class="menu-clear-left"></div>
<?endif?>