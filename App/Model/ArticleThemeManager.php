<?php

require_once("Model/Manager.php");

class ArticleThemeManager extends Manager
{
    /**
     * ArticleThemeManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertArticleTheme($article, $theme) {
        $columns = ["`article`", "`theme`"];
        $values = ["'$article'", "'$theme'"];

        parent::insert("articles_theme", $columns, $values);
    }
}