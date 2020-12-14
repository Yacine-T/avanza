<?php

require_once("Model/RecipeManager.php");

class RecipeController extends PostController
{
    private $_recipeManager;

    /**
     * RecipeController constructor.
     * @param $_recipeManager
     */
    public function __construct()
    {
        $this->_recipeManager = new RecipeManager();
    }


    public function showAllRecipes() {}
    public function showOneRecipes($id) {}
    public function composeRecipe($author, $title, $description, $image, $nbGuest, $preparationTime, $difficulty) {
        $this->writePost($author, $title, $description, $image);
        $this->_recipeManager->insertRecipe($author, $nbGuest ,$preparationTime, $difficulty);
    }
    public function removeOneRecipe($id) {}
    public function editRecipe() {}


}