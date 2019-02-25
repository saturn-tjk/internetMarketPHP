<?php

require_once "global_class.php";

class Article extends GlobalClass {
	
	public function __construct($db) {
		parent::__construct("articles", $db);
	}
	
	public function getAllSortDate(){
		return $this->getAll("date", false);
	}
	
	public function getAllOnSectionID($section_id) {
		return $this->getAllOnField("section_id", $section_id, "date", false);
	}
	
	public function searchArticles ($words) {
		return $this->search ($words, array("title", "full_text"));
	}
	
}
?>