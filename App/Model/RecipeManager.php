<?php


class RecipeManager extends PostManager
{

    /**
     * RecipeManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAllRecipe(){}
    public function selectOneRecipe($id){}
    public function insertRecipe($post, $nbGuest, $preparationTime, $difficulty) {

        $columns = ["`post`", "`nb_guest`", "`preparation_time`", "`difficulty`"];
        $values = ["'$post'", "'$nbGuest'", "'$preparationTime'", "'$difficulty'"];

        $this->insert("recipes", $columns, $values);
    }
    public function deleteRecipe($id){}
    public function updateRecipe($id){}

}