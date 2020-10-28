<?php


class ContainsPreparation
{
    private $_id;
    private $_prepartion;
    private $_recipe;
    private $_post;
    private $_user;

    /**
     * ContainsPreparation constructor.
     * @param $_id
     * @param $_prepartion
     * @param $_recipe
     * @param $_post
     * @param $_user
     */
    public function __construct($_id, $_prepartion, $_recipe, $_post, $_user)
    {
        $this->_id = $_id;
        $this->_prepartion = $_prepartion;
        $this->_recipe = $_recipe;
        $this->_post = $_post;
        $this->_user = $_user;
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
    public function getPrepartion()
    {
        return $this->_prepartion;
    }

    /**
     * @param mixed $prepartion
     */
    public function setPrepartion($prepartion): void
    {
        $this->_prepartion = $prepartion;
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



}