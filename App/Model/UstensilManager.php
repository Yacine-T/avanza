<?php

require_once("Model/Manager.php");

class UstensilManager extends Manager
{
    /**
     * UstensilManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertUstensil($recipe, $name, $image, $quantity) {
        $columns = ["`recipe`", "`name`", "`image`", "`quantity`"];
        $values = ["'$recipe'", "'$name'", "'$image'", "'$quantity'"];

        parent::insert("ustensils", $columns, $values);
    }
}