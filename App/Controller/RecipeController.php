<?php

require_once("Model/RecipeManager.php");
require_once("Model/PostManager.php");

class RecipeController extends PostController
{
    private $_recipeManager;
    private $_postManager;


    /**
     * RecipeController constructor.
     * @param $_recipeManager
     */
    public function __construct()
    {
        parent::__construct();
        $this->_recipeManager = new RecipeManager();
        $this->_postManager = new PostManager();
    }


    public function showAllRecipes() {}
    public function showOneRecipes($id) {}
    public function composeRecipe($author, $title, $description, $image, $nbGuest, $preparationTime, $difficulty) {
        $post = $this->_postManager->selectLastPost();
        $this->writePost($author, $title, $description, $image);
        $this->_recipeManager->insertRecipe($post['id'], $nbGuest ,$preparationTime, $difficulty);
    }
    public function removeOneRecipe($id) {}
    public function editRecipe() {}


}