<?php

require_once("Model/PostManager.php");

class PostController
{
    protected $postManager;

    /**
     * PostController constructor.
     * @param $postManager
     */
    public function __construct()
    {
        $this->postManager = new PostManager();
    }


    public function showAllPosts() {}
    public function showOnePosts($id) {}
    public function writePost($author, $title, $content, $image) {
        $this->postManager->createPost($author, $title, $content, $image);
    }
    public function editPost($id, $author, $title, $theme, $content, $mainImage, $imageC1, $imageC2){} // for the admins only
    public function removePost($id){} // for the admins only
}