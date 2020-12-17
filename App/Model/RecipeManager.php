<?php

require_once("Model/PostManager.php");

class RecipeManager extends PostManager
{

    /**
     * RecipeManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertRecipe($post, $nbGuest, $preparationTime, $difficulty) {

        $columns = ["`post`", "`nb_guest`", "`preparation_time`", "`difficulty`"];
        $values = ["'$post'", "'$nbGuest'", "'$preparationTime'", "'$difficulty'"];

        $this->insert("recipes", $columns, $values);
    }


}