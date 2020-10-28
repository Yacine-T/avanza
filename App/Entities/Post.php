<?php

require_once("User.php");

class Post
{
    protected $id;
    protected $author;
    protected $title;
    protected $theme;
    protected $content;
    protected $mainImage;
    protected $imageC1;
    protected $imageC2;
    protected $creationDate;

    /**
     * Post constructor.
     * @param $id
     * @param $author
     * @param $title
     * @param $theme
     * @param $content
     * @param $mainImage
     * @param $imageC1
     * @param $imageC2
     * @param $creationDate
     */
    public function __construct($id, $author, $title, $theme, $content, $mainImage, $imageC1, $imageC2, $creationDate)
    {
        $this->id = $id;
        $this->author = $author;
        $this->title = $title;
        $this->theme = $theme;
        $this->content = $content;
        $this->mainImage = $mainImage;
        $this->imageC1 = $imageC1;
        $this->imageC2 = $imageC2;
        $this->creationDate = $creationDate;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme): void
    {
        $this->theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content): void
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getMainImage()
    {
        return $this->mainImage;
    }

    /**
     * @param mixed $mainImage
     */
    public function setMainImage($mainImage): void
    {
        $this->mainImage = $mainImage;
    }

    /**
     * @return mixed
     */
    public function getImageC1()
    {
        return $this->imageC1;
    }

    /**
     * @param mixed $imageC1
     */
    public function setImageC1($imageC1): void
    {
        $this->imageC1 = $imageC1;
    }

    /**
     * @return mixed
     */
    public function getImageC2()
    {
        return $this->imageC2;
    }

    /**
     * @param mixed $imageC2
     */
    public function setImageC2($imageC2): void
    {
        $this->imageC2 = $imageC2;
    }

    /**
     * @return mixed
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param mixed $creationDate
     */
    public function setCreationDate($creationDate): void
    {
        $this->creationDate = $creationDate;
    }


}