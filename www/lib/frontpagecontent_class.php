<?php

require_once "modules_class.php";

class FrontPageContent extends Modules {
	
	private $articles;
	private $page;
	
	public function __construct ($db){
		parent::__construct ($db);
		$this->articles = $this->article->getAllSortDate();
		$this->page = (isset($this->data["page"]))? $this->data["page"]:1;
		$this->template = "main";
	}
	
	public function getTitle(){
		if($this->page > 1) return "Справочник по PHP - Страница".$this->page;
		else return "Справочник по PHP";
		
	}
	
	public function getDescription() {
		return "Справочник функций по PHP.";
	}
	
	protected function getKeyWords() {
		return "Справочник PHP, Справочник PHP функций";
	}
	
	public function getTop(){
		return $this->getTemplate("main_article");
	}
	
	public function getMiddle() {
		return $this->getBlogArticles ($this->articles, $this->page);
	}
	
	public function getBottom(){
		return $this->getPagination(count($this->articles), $this->config->count_blog, $this->config->address);
	}
}

?>