<h2>Панель пользователя</h2>
<p>Здравствуйте, <b>%username%</b>! <br />
<!-- <a href ="%address%functions.php?logout=1">Выход</a> -->
<a href = '
			javascript:firstAjax({
				url: "%address%functions.php?logout=1",
				method: "GET",
				success: function(data){document.getElementById("user_panel").innerHTML=data;}
				});'>Выход!</a>
</p>