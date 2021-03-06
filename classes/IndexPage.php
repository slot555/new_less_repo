<?php

class IndexPage extends Page
{
    public function getContent()
    {
        echo "<ul>";
        $this->_renderArticleList();
        echo "</ul>";
    }

    protected function _renderArticleList(){
        $articles = OneArticle::getAll();
        if (empty($articles)) {
            echo "Статей нет";
            return;
        }

        foreach ($articles as $article) {
            echo '<li><a href="article.php?file=', $article->articleFile, '">', $article->title , "</a></li>";
        }
    }
}

?>