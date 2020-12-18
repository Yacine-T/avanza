<?php

require_once("Model/RecipeManager.php");
require_once("Model/UstensilManager.php");


class UstensilController
{
    private $_recipeManager;
    private $_ustensilManager;

    /**
     * UstensilController constructor.
     * @param $_recipeManager
     * @param $_ustensilManager
     */
    public function __construct()
    {
        $this->_recipeManager = new RecipeManager();
        $this->_ustensilManager = new UstensilManager();
    }

    public function createUstensil($names, $image, $quantity) {
        $recipe = $this->_recipeManager->getLastIdRecipe();

        foreach ($names as $ustensil) {
            $this->_ustensilManager->insertUstensil($recipe['id'], $ustensil, $image, $quantity);
        }
    }

}