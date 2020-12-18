<?php

require_once("Model/ArticleManager.php");
require_once("Model/ArticleThemeManager.php");

class ArticleThemeController
{
    private $_articleManager;
    private $_articleThemeManager;

    /**
     * ArticleThemeController constructor.
     * @param $_articleManager
     */
    public function __construct()
    {
        $this->_articleManager = new ArticleManager();
        $this->_articleThemeManager = new ArticleThemeManager();
    }

    public function createArticleTheme(array $themes) {
        $article = $this->_articleManager->getLastArticleId();
        foreach ($themes as $theme) {
            $this->_articleThemeManager->insertArticleTheme($article['id'], $theme);
        }
    }

}