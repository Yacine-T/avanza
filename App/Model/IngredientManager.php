<?php

require_once("Model/Manager.php");

class IngredientManager extends Manager
{
    /**
     * IngredientManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertIngredient($recipe, $name, $measureUnit, $image, $quantity) {
        $columns = ["`recipe`", "`name`", "`measure_unit`", "`image`", "`quantity`"];
        $values = ["'$recipe'", "'$name'", "'$measureUnit'", "'$image'", "'$quantity'"];

        parent::insert("ingredients", $columns, $values);
    }
}