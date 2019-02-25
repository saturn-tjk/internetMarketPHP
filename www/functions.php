<?php

	require_once "lib/database_class.php";
	require_once "lib/manage_class.php";
	
	$db = new DataBase();
	$manage = new Manage($db);
	if ($_POST["reg"]) {
		$r = $manage->regUser();
	}
	elseif ($_POST["auth"]) {
		$r = NULL;
		echo $manage->login();
		exit;
	}
	elseif ($_GET["logout"]) {
		echo $manage->logout();
		exit;
	}
	else exit;
	
	
	 $manage->redirect($r);
	

?>