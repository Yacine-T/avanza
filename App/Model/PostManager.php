<?php


class PostManager extends Manager
{
    /**
     * PostManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAllPosts() {
        $sql = "SELECT * FROM posts";
        return $this->queryAll($sql);
    }

    public function selectOnePost($id) {
        $sql = "SELECT * FROM posts";
        return $this->queryRow($sql);
    }

    public function selectLastPost(){
        $sql = "SELECT id FROM `posts` ORDER BY id DESC LIMIT 1";
        $lastPost = $this->queryRow($sql);

        return $lastPost;
    }

    public function createPost($author, $title, $content, $image) {

            $columns = ["`author`", "`title`", "`content`", "`image`"];
            $values = ["'$author'", "'$title'", "\"$content\"", "'$image'"];

            $this->insert("posts", $columns, $values);
    }

    public function updatePost($id, $author, $title, $theme, $content, $image)
    {
        $table = "posts";
        $data = ["`author` = " . "'$author'" , "`title` = " . "'$title'", "`theme` = " . "'$theme'", "`content` = " . "'$content'","`main_image` = " . "'$image'"];
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