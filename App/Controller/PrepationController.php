<?php

require_once("Model/RecipeManager.php");
require_once("Model/PreparationManager.php");

class PrepationController
{
    private $_recipeManager;
    private $_preparationManager;

    /**
     * PrepationController constructor.
     * @param $_recipeManager
     * @param $_preparationManager
     */
    public function __construct()
    {
        $this->_recipeManager = new RecipeManager();
        $this->_preparationManager = new PreparationManager();
    }

    /**
     * @return PreparationManager
     */
    public function createPreparationStep($steps)
    {
        $recipe = $this->_recipeManager->getLastIdRecipe();

        foreach ($steps as $step) {
            $this->_preparationManager->insertPreparationSteps($recipe['id'], $step);
        }
    }

}