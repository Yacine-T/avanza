<?php

require_once("Model/RecipeManager.php");
require_once("Model/IngredientManager.php");

class IngredientController
{
    private $_recipeManager;
    private $_ingredientManager;

    /**
     * IngredientController constructor.
     * @param $_recipeManager
     * @param $_ingredientManager
     */
    public function __construct()
    {
        $this->_recipeManager = new RecipeManager();
        $this->_ingredientManager = new IngredientManager();
    }

    public function createIngredient(array $names, $measureUnit, $image,  $quantity) {

        $recipe = $this->_recipeManager->getLastIdRecipe();

        foreach ($names as $ingredient) {
            $this->_ingredientManager->insertIngredient($recipe['id'], $ingredient, $measureUnit, $image, $quantity);
        }
    }


}