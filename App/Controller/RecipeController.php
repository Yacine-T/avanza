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
     * @param $_postManager
     */
    public function __construct()
    {
        parent::__construct();
        $this->_recipeManager = new RecipeManager();
        $this->_postManager = new PostManager();
    }


    public function showAllRecipes()
    {
    }

    public function showOneRecipes($id)
    {
    }

    public function composeRecipe($author, $title, $description, $image, $nbGuest, $preparationTime, $difficulty)
    {
        $pathinfo = pathinfo($image);
        if ($pathinfo['extension'] == "jpg" ||
            $pathinfo['extension'] == "png" ||
            $pathinfo['extension'] == "svg" ||
            $pathinfo['extension'] == "jpeg" ||
            $pathinfo['extension'] == "xcf" ||
            $pathinfo['extension'] == "bmp") {

            $post = $this->_postManager->selectLastPost();
            $this->writePost($author, $title, $description, $image);
            $this->_recipeManager->insertRecipe($post['id'], $nbGuest, $preparationTime, $difficulty);

        } else {
            echo "Veuillez télécharger une image (seules les extensions '.jpg' sont autorisées)";
        }

    }

    public function removeOneRecipe($id)
    {
    }

    public function editRecipe()
    {
    }


}