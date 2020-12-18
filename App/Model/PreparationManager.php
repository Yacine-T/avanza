<?php

require_once("Model/Manager.php");

class PreparationManager extends Manager
{
    /**
     * PreparationManager constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function insertPreparationSteps($recipe, $step)
    {
        $columns = ["`recipe`", "`step`"];
        $values = ["'$recipe'", "'$step'"];

        parent::insert("preparations", $columns, $values);
    }
}