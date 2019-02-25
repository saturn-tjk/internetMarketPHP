<?php 

	mb_internal_encoding("UTF-8");
	require_once "lib/database_class.php";
	require_once "lib/frontpagecontent_class.php";
	require_once "lib/sectioncontent_class.php";
	require_once "lib/articlecontent_class.php";
	require_once "lib/regcontent_class.php";
	require_once "lib/messagecontent_class.php";
	require_once "lib/searchcontent_class.php";
	require_once "lib/notfoundcontent_class.php";
	
	
	
	$db = new DataBase();
	$view = $_GET["view"];
	//print_r ($_GET);
	switch ($view) {
		
		case "": 
			$content = new FrontPageContent ($db);
			break;
			
		case "section": 
			$content = new SectionContent ($db);
			echo $content->getTitle();
			echo $content->getDescription();
			echo $content->getTop();
			echo $content->getMiddle();
			echo $content->getBottom();
			exit;
			
		case "article": 
			$content = new ArticleContent ($db);
			break;
			
		case "reg": 
			$content = new RegContent ($db);
			break;
			
		case "message":	
			$content = new MessageContent ($db);
			break;
			
		case "search":	
			$content = new SearchContent ($db);
			break;
		
		case "notfound":	
			$content = new NotFoundContent ($db);
			break;
			
		default: $content = new NotFoundContent($db);
	};
	echo $content->getContent();
	

?>