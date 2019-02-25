<!DOCTYPE html PUBLIC "//-W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml.dtd">
<html xmlns = "http.w3.org/1999/xhtml">
<head>
<title>%title%</title>
<meta http-equiv="Content-type" content="%meta_desc%"; charset="utf-8" />
<meta name="description" content="%meta_key%" />
<link  rel="stylesheet" href="%address%css/main.css" type="text/css" />

 <script Language="JavaScript">
	function XmlHttp()	{
		var xmlhttp;
		try { xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); }
		catch(e)
		{
		 try {xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");} 
		 catch (E) {xmlhttp = false;}
		}
		if (!xmlhttp && typeof XMLHttpRequest!='undefined')
		{
		 xmlhttp = new XMLHttpRequest();
		}
		  return xmlhttp;
	}
	 
	function firstAjax(param)
	{
		if (window.XMLHttpRequest) req = XmlHttp(); 
		//req = new XMLHttpRequest();
		!req?console.log("Объект req несоздан"):console.log("Объект req создан");
		method = (!param.method ? "POST" : param.method.toUpperCase());
		console.log("метод: "+method);
		if(method=="GET"){
		   send=null;
		   param.url=param.url+"&ajax=true";
		}
		else {
		   send="";
		   for (var i in param.data) send+= i+"="+param.data[i]+"&";
		   send=send+"ajax=true";
		}
		console.log("url: "+param.url);
		console.log("send: "+send);

		req.open(method, param.url, true);
		//if(param.statbox)document.getElementById(param.statbox).innerHTML = '<img src="images/wait.gif">';
		req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
		req.send(send);
		req.onreadystatechange = function()
		{
		   if (req.readyState == 4 && req.status == 200) { //если ответ положительный
				console.log("responseText: "+req.responseText);
			   if(param.success)param.success(req.responseText);
			   
			   //param.success(req.responseText);
		   }
		}
	}
</script>
			
</head>
<body>
	<div id="content"> 
		<div id="header"> 
			<h2>Шапка сайта </h2>
			
		</div>
	</div>
	<hr />
	<div id="main_content"> 
		<div id="left">
			<h2>Меню</h2>
			<ul>%menu%</ul>
			<div id ="user_panel">
				%auth_user%
			</div>
		</div>
		<div id="right">
			<form name ="search" action="%address%" method="get">
				<p>
					Поиск: <input type="text" name="words" />
				</p>
				<p>
					<input type="hidden" name="view" value="search" />
					<input type="submit" name="search" value="Искать" />
				</p>
			</form>
			<h2>Реклама</h2>
			%banners%
		</div>
		<div id="center">
			%top%
			%middle%
			%bottom%
			
		</div>
		<div class="clear"></div>
		<hr />
		<div id="footer">
			<p>Все права защищены &copy; 2012 </p>
		</div>
	</div>



</body>
</html>