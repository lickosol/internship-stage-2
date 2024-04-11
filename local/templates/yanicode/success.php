<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
// на случай, если файл header php будет открыт отдельно
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta class="js-meta-viewport" name="viewport"
          content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?$APPLICATION->ShowTitle()?></title>
    <?php $APPLICATION->ShowHead(); ?>
</head>
<header class="header">
    <div class="container">
        <div class="header-wrapper">
            <a href="/index.html" class="header__logo">
                <img width="300" height="92" src="<?= SITE_TEMPLATE_PATH ?>/images/svg/logo-yanicode.svg"
                     alt="yanicode">
            </a>
            <div class="header__burger header__burger_close">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>
            <div class="header-nav">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "yanicode_menu",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "COMPONENT_TEMPLATE" => "yanicode_menu",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_THEME" => "site",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N"
                    )
                );?>

                <div class="header__phone">
                    <a href="tel:+79114510616">+79114510616</a>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="website-workarea">
    <h1>форма успешно заполнена</h1>