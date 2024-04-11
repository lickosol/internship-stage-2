<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<?=$arResult["FORM_NOTE"]?>
<?if ($arResult["isFormNote"] != "Y")
{
    ?>
    <?=str_replace('<form action=""', '<formclass="js-validated-form"', $arResult["FORM_HEADER"])?>

    <?
    foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
    {
        if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
        {
            echo $arQuestion["HTML_CODE"];
        }
        else
        {

            ?>
            <div class="popup-feedback__input-cover">
                <label for="" class="popup-feedback__input-label"><?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?>

                        <?=$arResult["REQUIRED_SIGN"];?><?endif;?></label>
                <?=$arQuestion["HTML_CODE"]?>
            </div>

            <tr>
                <td>
                    <?if (is_array($arResult["FORM_ERRORS"]) && array_key_exists($FIELD_SID, $arResult['FORM_ERRORS'])):?>
                        <span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
                    <?endif;?>
                    <?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?><?=$arResult["REQUIRED_SIGN"];?><?endif;?>
                    <?=$arQuestion["IS_INPUT_CAPTION_IMAGE"] == "Y" ? "<br />".$arQuestion["IMAGE"]["HTML_CODE"] : ""?>
                </td>
                <td><?=$arQuestion["HTML_CODE"]?></td>
            </tr>
            <?
        }
    } //endwhile
    ?>
    <div class="popup-feedback__button-cover">

        <input class="button button_modal-gold js-button-submit" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="отправить" />


    </div>


    <?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?>

    <?=$arResult["FORM_FOOTER"]?>
    <?
} //endif (isFormNote)
?>



<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "yanicode_form", Array(
    "CACHE_TIME" => "3600",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
    "CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
    "COMPONENT_TEMPLATE" => ".default",
    "EDIT_URL" => "/",	// Страница редактирования результата
    "IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
    "LIST_URL" => "/",	// Страница со списком результатов
    "SEF_MODE" => "N",	// Включить поддержку ЧПУ
    "SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
    "USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
    "VARIABLE_ALIASES" => array(
        "WEB_FORM_ID" => "WEB_FORM_ID",
        "RESULT_ID" => "RESULT_ID",
    ),
    "WEB_FORM_ID" => "1",	// ID веб-формы
),
    false
);?><br>