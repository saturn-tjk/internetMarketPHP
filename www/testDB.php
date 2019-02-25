<!DOCTYPE html PUBLIC "//-W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml.dtd">
<?php
require_once "lib/config_class.php";

?>
<html xmlns = "http.w3.org/1999/xhtml">
<head>
<title>Первый проект</title>
<meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
<meta name="description" content="Ключевые слова" />
<link  rel="stylesheet" href="css/main.css" type="text/css" />
</head>
<body>
<?php
	 /*$config = new Config();
	 $mysqli = new mysqli($config->host, $config->user, $config->password, $config->db);
	$mysqli->query ("SET NAMES 'utf8'");
	//$mysqli->mysql_query();
	$res = mysql_query("SELECT * FROM lesson_menu");*/
	
	if (!$link = mysql_connect('localhost', 'root', "")) {
		echo 'Не удалось подключиться к mysql';
		exit;
	}

	if (!mysql_select_db('mybase', $link)) {
		echo 'Не удалось выбрать базу данных';
		exit;
	}

	$sql    = 'SELECT * FROM lesson_articles ORDER BY `date` DESC';
	$result = mysql_query($sql, $link);

	if (!$result) {
		echo "Ошибка DB, запрос не удался\n";
		echo 'MySQL Error: ' . mysql_error();
		exit;
	}

	while ($row = mysql_fetch_assoc($result)) {
		echo "<br />код: ".$row['title'];
	}
	


?>

</body>
</html>