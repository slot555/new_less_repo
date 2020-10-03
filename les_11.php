https://www.digitalocean.com/community/tutorials/mysql-ubuntu-18-04-ru
https://linuxize.com/post/how-to-install-mysql-on-ubuntu-18-04/
https://losst.ru/ustanovka-phpmyadmin-ubuntu-18-04

<?php 
create classes filder for all classes
// 1 step
class OneArticle 
define
	const ARTICLE_PATH
	const DELIMITER
	public $title;
    public $content;
    public $articleFile;

public function __construct
	$content = file_get_contents(self::ARTICLE_PATH . DIRECTORY_SEPARATOR . $articleFile);
	read data from file and fill $title, $content, $articleFile fields

static public function getAll
	$articles = scandir(self::ARTICLE_PATH);
	fill $result array

// 2 step
class page  base class for all pages
header
footer
content
	echo $this->getContent();
render

// 3 step
class ArticlePage extends Page
_renderH1
_renderArticle
getContent
	new OneArticle($_GET['file'])

// 4 step
class IndexPage extends Page
getContent
_renderArticleList
	$articles = OneArticle::getAll();

// 5 step
loader.php

// 6 step
go to main folder
create index.php and article.php

 ?>