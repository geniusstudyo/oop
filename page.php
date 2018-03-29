<?php


/*class Admin{

	protected $name = 'Admin';
	protected $lastname = 'Ivanov';
	protected $status = 'Active';

	public function get_all(){

		echo $this->name;
		echo $this->lastname;
		echo $this->status;
	}
}


class Index extends Admin {

	public $content;

	public function get(){

		$this->content = $content;
	}
}


$index = new Index();
$index->get_all();*/

/*class Spec {

	protected $intro = 'Роман';
	private $db = 'Лидия';

	public function get(){
		echo $this->intro;
		echo $this->db;
	}
}

$spec = new Spec();
$spec->get();*/
/*
class Page{
	
	public $title;
	public $content;
	public $footer;

	public function __construct($title,$content,$footer){

		$this->title = $title;
		$this->content = $content;
		$this->footer = $footer;

	}

	public function render_body(){

		$str = '<h1>'. $this->title . '</h1>';
		$str .= '<b>'. $this->content. '</b>';
		$str .= '<p>'. $this->footer. '</p>';

		return $str;
	}

	public function test(){

		return $this->render_body();

	}
}

class Index extends Page{

	public $slide;
	public $news;

	public function __construct($title,$content,$footer,$slide,$news){

		parent::__construct($title,$content,$footer);
		$this->slide = $slide;
		$this->news = $news;
	}

	public function render_body(){

		$str = parent::render_body();
		$str .= '<p>'. $this->slide. '</p>';
		$str .= '<p>'. $this->news. '</p>';

		return $str;
	}
}

class Poly {

	public $obj;

	public function get_all(Page $page){

		$this->obj[] = $page;
	}

	public function get_result(){

		foreach ($this->obj as $item) {
			
			echo $item->test();
		}
	}
}

$poly = new Poly();

$page = new Page('PAGE','Страница страниц','Страница материала');
echo $page->render_body();

$index = new Index('INDEX','Привет. Это главная станица сайта','Главная','Слайдер','Новости');

echo $index->render_body();

$poly->get_all($page);
$poly->get_all($index);
$poly->get_result();
*/

class Content{

	public $title;
	public $description;
	public $tag;

	public function __construct($title,$description,$tag){

		$this->title = $title;
		$this->description = $description;
		$this->tag = $tag;

	}

	public function get_all(){


		$str = $this->title;
		$str .= $this->description;
		$str .= $this->tag;

		return $str;

	}


}


$content = new Content('INDEX','Эта главная страница сайта','Лучшие статьи');
echo $content->get_all();