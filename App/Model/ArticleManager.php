<?php

require_once("Model/PostManager.php");

class ArticleManager extends PostManager
{

    /**
     * ArticleManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertArticles($post) {
        $columns = ["`post`"];
        $values = ["'$post'"];
        parent::insert("`articles`", $columns, $values);
    }
}