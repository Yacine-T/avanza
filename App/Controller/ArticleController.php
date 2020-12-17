<?php

require_once("Model/ArticleManager.php");
require_once("Model/PostManager.php");
require_once("Controller/PostController.php");


class ArticleController extends PostController
{
    private $_articleManager;
    private $_postManager;
    /**
     * ArticleController constructor.
     * @param $_articleManager
     * @param $_postManager
     */
    public function __construct()
    {
        parent::__construct();
        $this->_articleManager = new ArticleManager();
        $this->_postManager = new PostManager();
    }

    public function createArticle($author, $title, $content, $image) {
        parent::writePost($author, $title, $content, $image);
        $post = $this->_postManager->selectLastPost();
        $this->_articleManager->insertArticles($post['id']);
    }
}