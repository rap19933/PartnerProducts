<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?ShowMessage($arParams["~AUTH_RESULT"]);?>
<div class="container">
	<div class="row">
		<article class="col-xs-12 maincontent">
			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="thin text-center">Забыли пароль?</h3>
						<p class="text-center text-muted"> Введите логин или E-Mail. Контрольная строка для смены пароля, а также ваши регистрационные данные, будут высланы вам по E-Mail</p>
						<hr>
						<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
							<?
							if (strlen($arResult["BACKURL"]) > 0)
							{
								?>
								<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
								<?
							}
							?>
							<input type="hidden" name="AUTH_FORM" value="Y">
							<input type="hidden" name="TYPE" value="SEND_PWD">
							<div class="top-margin">
								<label><?=GetMessage("AUTH_LOGIN")?><span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" />
							</div>
							<div class="top-margin">
								<label><?=GetMessage("AUTH_EMAIL")?><span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="USER_EMAIL" maxlength="255" />
							</div>
							<?if($arResult["USE_CAPTCHA"]):?>
								<div class="top-margin">
									<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
									<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
								</div>
								<div class="top-margin">
									<label><?echo GetMessage("system_auth_captcha")?><span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="captcha_word" maxlength="50" value="" />
								</div>
							<?endif?>
							<hr>
							<div class="row">
								<div class="col-lg-8">
									<a class="btn btn-default" href="<?=SITE_DIR.auth;?>">
										<?=GetMessage("AUTH_AUTH")?></a>
								</div>
								<div class="col-lg-4 text-right">
									<input type="submit" class="btn btn-action" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</article>	<!-- /Article -->
	</div>
</div>	<!-- /container -->
<script type="text/javascript">
	document.bform.USER_LOGIN.focus();
</script>
