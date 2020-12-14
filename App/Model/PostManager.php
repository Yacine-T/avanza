<?php

require_once ("Model/Manager.php");

class PostManager extends Manager
{

    public function selectAllPosts() {
        $sql = "SELECT * FROM posts";
        return $this->queryAll($sql);
    }

    public function selectOnePost($id) {
        $sql = "SELECT * FROM posts";
        return $this->queryRow($sql);
    }

    public function selectLastPost(){
        $sql = "SELECT id FROM `posts` ORDER BY DESC LIMIT 1";
        return $this->queryAll($sql);
    }

    public function createPost($author, $title, $content, $image) {

            $columns = ["`author`", "`title`", "`content`", "`image`"];
            $values = ["'$author'", "'$title'", "\"$content\"", "'$image'"];

            $this->insert("posts", $columns, $values);
    }

    public function updatePost($id, $author, $title, $theme, $content, $mainImage, $imageC1, $imageC2)
    {
        $table = "posts";
        $data = ["`author` = " . "'$author'" , "`title` = " . "'$title'", "`theme` = " . "'$theme'", "`content` = " . "'$content'","`main_image` = " . "'$mainImage'", "`image_c1` = " . "'$imageC1'", "`image_c2` = " . "'$imageC2'"];
        $conditions = ["`ìd` = " . $id];
        $this->update($table, $data, $conditions);
    }

    public function deletePost($id)
    {
        $table = "posts";
        $conditions = ["`id` = " . $id];
        $this->delete($table, $conditions);
    }
}