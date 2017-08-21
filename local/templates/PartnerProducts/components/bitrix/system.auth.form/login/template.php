<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
CJSCore::Init();
?>

<?
if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
	ShowMessage($arResult['ERROR_MESSAGE']);
?>
<? if ($arResult["FORM_TYPE"] == "login"): ?>
	<ul class="nav navbar-nav navbar-right">
		<li>
			<a class="hd_singin" id="hd_singin_but_open" href="">Войти на сайт</a>
		</li>
	</ul>
	<div class="hd_loginform">
		<span class="hd_title_loginform">Войти на сайт</span>
		<form name="system_auth_form<?= $arResult["RND"] ?>" method="post" target="_top"
			  action="<?= $arResult["AUTH_URL"] ?>">
			<?
			if ($arResult["BACKURL"] <> ''): ?>
				<input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>"/>
			<? endif ?>
			<?
			foreach ($arResult["POST"] as $key => $value): ?>
				<input type="hidden" name="<?= $key ?>" value="<?= $value ?>"/>
			<? endforeach ?>
			<input type="hidden" name="AUTH_FORM" value="Y"/>
			<input type="hidden" name="TYPE" value="AUTH"/>
			<input placeholder="<?= GetMessage("AUTH_LOGIN") ?>" name="USER_LOGIN" type="text" value="">
			<script>
				BX.ready(function () {
					var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
					if (loginCookie) {
						var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
						var loginInput = form.elements["USER_LOGIN"];
						loginInput.value = loginCookie;
					}
				});
			</script>
			<input placeholder="<?= GetMessage("AUTH_PASSWORD") ?>" name="USER_PASSWORD" type="password">
			<noindex>
				<a href="<?= $arResult["AUTH_FORGOT_PASSWORD_URL"] ?>" class="hd_forgotpassword" rel="nofollow">
					<?= GetMessage("AUTH_FORGOT_PASSWORD_2") ?></a>
			</noindex>
			<?
			if ($arResult["STORE_PASSWORD"] == "Y"): ?>
				<div class="head_remember_me" style="margin-top: 10px">
					<input id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y" type="checkbox">
					<label for="USER_REMEMBER_frm" title="<?= GetMessage("AUTH_REMEMBER_ME") ?>"><?
						echo GetMessage("AUTH_REMEMBER_SHORT") ?></label>
				</div>
			<? endif ?>
			<?
			if ($arResult["CAPTCHA_CODE"]): ?>
				<?
				echo GetMessage("AUTH_CAPTCHA_PROMT") ?>:<br/>
				<input type="hidden" name="captcha_sid" value="<?
				echo $arResult["CAPTCHA_CODE"] ?>"/>
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?
				echo $arResult["CAPTCHA_CODE"] ?>" width="180" height="40" alt="CAPTCHA"/><br/><br/>
				<input type="text" name="captcha_word" maxlength="50" value=""/>
			<? endif ?>
			<input value="<?= GetMessage("AUTH_LOGIN_BUTTON") ?>" name="Login" style="margin-top: 20px;" type="submit">
		</form>
		<?
		if ($arResult["NEW_USER_REGISTRATION"] == "Y"): ?>
			<noindex><a href="<?= $arResult["AUTH_REGISTER_URL"] ?>" class="hd_signup"
						rel="nofollow"><?= GetMessage("AUTH_REGISTER") ?></a></noindex>
		<? endif ?>
		<span class="hd_close_loginform">Закрыть</span>
	</div>
	<br>
	<?
else:
	?>
	<ul class="nav navbar-nav navbar-right">
		<li>
			<a class="hd_sing" href="<?= $arResult["PROFILE_URL"] ?>">[<?= $arResult["USER_LOGIN"] ?>]</a>
		</li>
		<li><a href="<?=$APPLICATION->GetCurPageParam("logout=yes", array(
				"login",
				"logout",
				"register",
				"forgot_password",
				"change_password"))?>" class="hd_signup"><?=GetMessage("AUTH_LOGOUT_BUTTON")?></a></li>
	</ul>
<? endif ?>
