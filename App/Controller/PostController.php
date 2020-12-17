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

    public function writePost($author, $title, $content, $image) {
        $pathinfo = pathinfo($image);
        if ($pathinfo['extension'] == "jpg" ||
            $pathinfo['extension'] == "png" ||
            $pathinfo['extension'] == "svg" ||
            $pathinfo['extension'] == "jpeg" ||
            $pathinfo['extension'] == "xcf" ||
            $pathinfo['extension'] == "bmp") {
            $this->postManager->createPost($author, $title, $content, $image);
        } else {
            echo "Veuillez télécharger une image (seules les extensions '.jpg' sont autorisées)";
        }
    }

}