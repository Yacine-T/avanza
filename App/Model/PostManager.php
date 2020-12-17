<?php

require_once("Model/Manager.php");


class PostManager extends Manager
{
    /**
     * PostManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function selectLastPost(){
        $sql = "SELECT id FROM `posts` ORDER BY id DESC LIMIT 1";
        $lastPost = parent::queryRow($sql);

        return $lastPost;
    }

    public function createPost($author, $title, $content, $image) {

            $columns = ["`author`", "`title`", "`content`", "`image`"];
            $values = ["'$author'", "'$title'", "\"$content\"", "'$image'"];

            parent::insert("posts", $columns, $values);
    }
}