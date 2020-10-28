<?php


class ElementRecipe
{
    private $_id;
    private $_ingredient;
    private $_ustensil;
    private $_user;
    private $_post;
    private $_recipe;

    /**
     * ElementRecipe constructor.
     * @param $_id
     * @param $_ingredient
     * @param $_ustensil
     * @param $_user
     * @param $_post
     * @param $_recipe
     */
    public function __construct($_id, $_ingredient, $_ustensil, $_user, $_post, $_recipe)
    {
        $this->_id = $_id;
        $this->_ingredient = $_ingredient;
        $this->_ustensil = $_ustensil;
        $this->_user = $_user;
        $this->_post = $_post;
        $this->_recipe = $_recipe;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getIngredient()
    {
        return $this->_ingredient;
    }

    /**
     * @param mixed $ingredient
     */
    public function setIngredient($ingredient): void
    {
        $this->_ingredient = $ingredient;
    }

    /**
     * @return mixed
     */
    public function getUstensil()
    {
        return $this->_ustensil;
    }

    /**
     * @param mixed $ustensil
     */
    public function setUstensil($ustensil): void
    {
        $this->_ustensil = $ustensil;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->_user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->_user = $user;
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->_post;
    }

    /**
     * @param mixed $post
     */
    public function setPost($post): void
    {
        $this->_post = $post;
    }

    /**
     * @return mixed
     */
    public function getRecipe()
    {
        return $this->_recipe;
    }

    /**
     * @param mixed $recipe
     */
    public function setRecipe($recipe): void
    {
        $this->_recipe = $recipe;
    }



}