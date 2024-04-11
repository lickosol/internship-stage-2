

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>
<?if ($arResult["isFormNote"] != "Y")
{?>

    <?=str_replace('<form','<form class="js-validated-form"',$arResult["FORM_HEADER"])?>

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


            <?if( $FIELD_SID == "SIMPLE_QUESTION_221" || $FIELD_SID == "SIMPLE_QUESTION_143")  { ?> <!--фио и название -->
            <div class="popup-feedback__input-cover">
                <label for="" class="popup-feedback__input-label"><?=$arQuestion["CAPTION"]?></label>
                <?=str_replace('inputtext','popup-feedback__input js-validated-field',$arQuestion["HTML_CODE"])?>
                <?if( $FIELD_SID == "SIMPLE_QUESTION_221"){?>
                    <span class="valid-error-span">Заполните поле</span>
                <?}?>
            </div>
        <?}
            if($FIELD_SID == "SIMPLE_QUESTION_387"){?>   <!-- телефон-->
                <div class="popup-feedback__double-column">
                <div class="popup-feedback__input-cover">
                    <label for="" class="popup-feedback__input-label"><?=$arQuestion["CAPTION"]?></label>
                    <?=str_replace('inputtext','popup-feedback__input mask-phone-js js-validated-field',$arQuestion["HTML_CODE"])?>
                    <span class="valid-error-span">Заполните поле</span>
                </div>
            <?}
            if($FIELD_SID == "SIMPLE_QUESTION_943"){?>  <!-- почта-->
                <div class="popup-feedback__input-cover">
                    <label for="" class="popup-feedback__input-label"><?=$arQuestion["CAPTION"]?></label>
                    <?=str_replace(array('inputtext','type="text"','name="form_text_3"'),array('popup-feedback__input js-validated-field','type="mail"','data-validated_name="mail"'),$arQuestion["HTML_CODE"])?>
                    <span class="valid-error-span">Некоректный mail</span>
                </div>
                </div>
            <?}
            if($FIELD_SID == "SIMPLE_QUESTION_559"){?>  <!-- задача-->
                <div class="popup-feedback__input-cover">
                    <label for="" class="popup-feedback__input-label"><?=$arQuestion["CAPTION"]?></label>
                    <?=str_replace('inputtextarea','popup-feedback__textarea',$arQuestion["HTML_CODE"])?>
                </div>
            <?}
            if($FIELD_SID == "SIMPLE_QUESTION_383"){?> <!--чекбоксы-->
                <div class="popup-feedback__consent">
                <div class="popup-feedback__consent-form-wrapper">
                    <?=str_replace(array('<input','checked id="6"', 'name="form_checkbox_SIMPLE_QUESTION_383[]"','value="6"','<label for="6">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных.</label>'),array('<input class="popup-feedback__consent-input"','id="consent1"','','checked="checked"',''),$arQuestion["HTML_CODE"])?>
                    <label class="popup-feedback__consent-form" for="consent1">
                        <a target="_blank">
                            <?=$arQuestion["STRUCTURE"]["0"]["MESSAGE"]?>
                        </a>
                    </label>
                </div>
                </div><?}
            if($FIELD_SID == "SIMPLE_QUESTION_739"){?>
                <div class="popup-feedback__consent">
                    <div class="popup-feedback__consent-form-wrapper">
                        <?=str_replace(array('<input','id="7"', 'name="form_checkbox_SIMPLE_QUESTION_739[]"','value="7"','<label for="7">Оставляя данные на Сайте, заполняя регистрационную форму, Вы соглашаетесь с настоящей Политикой конфиденциальности.</label>'),array('<input class="popup-feedback__consent-input"','id="consent2"','','checked="checked"','',''),$arQuestion["HTML_CODE"])?>
                        <label class="popup-feedback__consent-form" for="consent2">
                            <a target="_blank">
                                <?=$arQuestion["STRUCTURE"]["0"]["MESSAGE"]?>
                            </a>
                        </label>
                    </div>
                </div>
            <?}



        }
    } //endwhile
    ?>

    <input class="button button_modal-gold js-button-submit" <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?> type="submit" name="web_form_submit" value="<?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />

    <?=$arResult["FORM_FOOTER"]?>
<?}?>