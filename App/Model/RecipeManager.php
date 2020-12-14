<?php


class RecipeManager extends PostManager
{
    public function selectAllRecipe(){}
    public function selectOneRecipe($id){}
    public function insertRecipe($author, $nbGuest, $preparationTime, $difficulty) {
        $post = $this->selectLastPost();
        $columns = ["`post`", "`author`", "`title`", "`content`", "`image`"];
        $values = ["'$post'" ,"'$author'", "'$nbGuest'", "'$preparationTime'", "'$difficulty'"];

        $this->insert("posts", $columns, $values);
    }
    public function deleteRecipe($id){}
    public function updateRecipe($id){}

}