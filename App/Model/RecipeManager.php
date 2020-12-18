<?php

require_once("Model/Manager.php");

class RecipeManager extends Manager
{

    /**
     * RecipeManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function getLastIdRecipe(){
        $sql = "SELECT id FROM `recipes` ORDER BY id DESC LIMIT 1";
        $lastRecipe = parent::queryRow($sql);

        return $lastRecipe;
    }

    public function insertRecipe($post, $nbGuest, $preparationTime, $difficulty) {

        $columns = ["`post`", "`nb_guest`", "`preparation_time`", "`difficulty`"];
        $values = ["'$post'", "'$nbGuest'", "'$preparationTime'", "'$difficulty'"];

        parent::insert("recipes", $columns, $values);
    }


}