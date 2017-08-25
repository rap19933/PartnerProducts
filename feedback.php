<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
?>
	<div class="container">
		<div class="row">
			<article class="col-sm-9 maincontent">
				<div class="page-header">
					<h1 class="page-title">Обратная связь</h1>
				</div>
				<p>
					У вас есть вопросы или вы хотите оставить отзыв?
				</p>
				<p>
					Пожалуйста, свяжитесь с нами при помощи формы, расположенной ниже.
				</p>
				<br>
				<?$APPLICATION->IncludeComponent(
					"altasib:feedback.form", 
					"feedback", 
					array(
						"ACTIVE_ELEMENT" => "Y",
						"ADD_HREF_LINK" => "Y",
						"ALX_LINK_POPUP" => "N",
						"BBC_MAIL" => "",
						"CAPTCHA_TYPE" => "default",
						"CATEGORY_SELECT_NAME" => "Выберите категорию",
						"CHANGE_CAPTCHA" => "N",
						"CHECKBOX_TYPE" => "CHECKBOX",
						"CHECK_ERROR" => "Y",
						"COLOR_OTHER" => "#009688",
						"COLOR_SCHEME" => "BRIGHT",
						"COLOR_THEME" => "",
						"COMPONENT_TEMPLATE" => "feedback",
						"EVENT_TYPE" => "ALX_FEEDBACK_FORM",
						"FB_TEXT_NAME" => "",
						"FB_TEXT_SOURCE" => "PREVIEW_TEXT",
						"FORM_ID" => "1",
						"IBLOCK_ID" => "3",
						"IBLOCK_TYPE" => "altasib_feedback",
						"INPUT_APPEARENCE" => array(
							0 => "DEFAULT",
						),
						"JQUERY_EN" => "jquery",
						"LINK_SEND_MORE_TEXT" => "Отправить ещё одно сообщение",
						"LOCAL_REDIRECT_ENABLE" => "N",
						"MASKED_INPUT_PHONE" => array(
							0 => "PHONE",
						),
						"MESSAGE_OK" => "Ваше сообщение было успешно отправлено",
						"NAME_ELEMENT" => "ALX_DATE",
						"NOT_CAPTCHA_AUTH" => "N",
						"PROPERTY_FIELDS" => array(
							0 => "PHONE",
							1 => "FIO",
							2 => "EMAIL",
							3 => "FEEDBACK_TEXT",
						),
						"PROPERTY_FIELDS_REQUIRED" => array(
							0 => "FEEDBACK_TEXT",
						),
						"PROPS_AUTOCOMPLETE_EMAIL" => array(
							0 => "EMAIL",
						),
						"PROPS_AUTOCOMPLETE_NAME" => array(
							0 => "FIO",
						),
						"PROPS_AUTOCOMPLETE_PERSONAL_PHONE" => array(
							0 => "PHONE",
						),
						"PROPS_AUTOCOMPLETE_VETO" => "N",
						"RECAPTCHA_THEME" => "light",
						"RECAPTCHA_TYPE" => "image",
						"SECTION_FIELDS_ENABLE" => "N",
						"SECTION_MAIL_ALL" => "rap19933@gmail.com",
						"SEND_IMMEDIATE" => "Y",
						"SEND_MAIL" => "N",
						"SHOW_LINK_TO_SEND_MORE" => "Y",
						"SHOW_MESSAGE_LINK" => "Y",
						"USERMAIL_FROM" => "N",
						"USER_CONSENT" => "N",
						"USER_CONSENT_ID" => "0",
						"USER_CONSENT_INPUT_LABEL" => "",
						"USER_CONSENT_IS_CHECKED" => "Y",
						"USER_CONSENT_IS_LOADED" => "N",
						"USE_CAPTCHA" => "Y",
						"WIDTH_FORM" => "50%"
					),
					false
				);?>
			</article> <aside class="col-sm-3 sidebar sidebar-right">
				<div class="widget">
					<h4>Address</h4>
					<address>
						2002 Holcombe Boulevard, Houston, TX 77030, UA </address>
					<h4>Phone:</h4>
					<address>
						(713) 791-1414 </address>
				</div>
			</aside>

		</div>
	</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
