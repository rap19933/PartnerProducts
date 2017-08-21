<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?$APPLICATION->ShowTitle();?></title>
	<?$APPLICATION->ShowHead();?>
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/font-awesome.min.css">

	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/main.css">
	<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/template_style.css"/>
</head>

<body class="home">

<div id="panel">
	<?$APPLICATION->ShowPanel();?>
</div>
<div class="navbar navbar-inverse headroom" >
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="<?=SITE_DIR?>" class="navbar-brand">
				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					".default",
					array(
						"AREA_FILE_SHOW" => "file",
						"PATH" => SITE_TEMPLATE_PATH."/include/logo.php",
						"EDIT_TEMPLATE" => "",
						"COMPONENT_TEMPLATE" => ".default"
					),
					false
				);?>
			</a>
		</div>
		<div class="navbar-collapse collapse">
			<?$APPLICATION->IncludeComponent(
				"bitrix:menu",
				"menu-bootstrap",
				array(
					"ALLOW_MULTI_SELECT" => "N",
					"CHILD_MENU_TYPE" => "left",
					"DELAY" => "N",
					"MAX_LEVEL" => "1",
					"MENU_CACHE_GET_VARS" => "",
					"MENU_CACHE_TIME" => "3600",
					"MENU_CACHE_TYPE" => "N",
					"MENU_CACHE_USE_GROUPS" => "Y",
					"ROOT_MENU_TYPE" => "top",
					"USE_EXT" => "N",
					"COMPONENT_TEMPLATE" => "menu-bootstrap"
				),
				false,
				array(
					"ACTIVE_COMPONENT" => "Y"
				)
			);?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:system.auth.form",
				"login",
				array(
					"COMPONENT_TEMPLATE" => "login",
					"FORGOT_PASSWORD_URL" => "/auth/forgot.php",
					"PROFILE_URL" => "/auth/profile.php",
					"REGISTER_URL" => "/auth/register.php",
					"SHOW_ERRORS" => "N"
				),
				false
			);?>
		</div>
	</div>
</div>
