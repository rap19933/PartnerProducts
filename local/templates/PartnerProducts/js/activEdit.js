$(function () {
	$(document).ready(function () {
		$('.activ').click(function (e) {
			var active = $(this).attr('id');
			if ($(this).html() == "Активировать")
				var str = "Деактивировать";
			else
				var str ="Активировать";
			document.getElementById($(this).attr('id')).innerHTML = str;
			$.ajax({
				type: "POST",
				url: "activation.php",
				data: active,
				success: function (result) {
					if (result != "1") {
						location.reload(true)
					}
				}
			});
		});
	});
});
