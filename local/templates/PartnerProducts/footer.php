<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<footer id="footer" class="top-space">
	<div class="footer2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 widget">
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
				</div>
				<div class="col-md-6 widget">
					<div class="widget-body">
						<p class="text-right">
							Copyright &copy; 2017, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/headroom.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jQuery.headroom.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/functions.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/activEdit.js"></script>
</body>
</html>
