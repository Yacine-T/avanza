<?php


class Event
{
    protected $_id;
    protected $_creator;
    protected $_title;
    protected $_theme;
    protected $_description;
    protected $_mainImage;
    protected $_imageC1;
    protected $_imageC2;
    protected $_imageC3;
    protected $_place;
    protected $_city;
    protected $_appointement;
    protected $_limitedPlace;
    protected  $_postDate;

    /**
     * Event constructor.
     * @param $_id
     * @param $_creator
     * @param $_title
     * @param $_theme
     * @param $_description
     * @param $_mainImage
     * @param $_imageC1
     * @param $_imageC2
     * @param $_imageC3
     * @param $_place
     * @param $_city
     * @param $_appointement
     * @param $_limitedPlace
     * @param $_postDate
     */
    public function __construct($_id, $_creator, $_title, $_theme, $_description, $_mainImage, $_imageC1, $_imageC2, $_imageC3, $_place, $_city, $_appointement, $_limitedPlace, $_postDate)
    {
        $this->_id = $_id;
        $this->_creator = $_creator;
        $this->_title = $_title;
        $this->_theme = $_theme;
        $this->_description = $_description;
        $this->_mainImage = $_mainImage;
        $this->_imageC1 = $_imageC1;
        $this->_imageC2 = $_imageC2;
        $this->_imageC3 = $_imageC3;
        $this->_place = $_place;
        $this->_city = $_city;
        $this->_appointement = $_appointement;
        $this->_limitedPlace = $_limitedPlace;
        $this->_postDate = $_postDate;
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
    public function getCreator()
    {
        return $this->_creator;
    }

    /**
     * @param mixed $creator
     */
    public function setCreator($creator): void
    {
        $this->_creator = $creator;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->_title = $title;
    }

    /**
     * @return mixed
     */
    public function getTheme()
    {
        return $this->_theme;
    }

    /**
     * @param mixed $theme
     */
    public function setTheme($theme): void
    {
        $this->_theme = $theme;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->_description = $description;
    }

    /**
     * @return mixed
     */
    public function getMainImage()
    {
        return $this->_mainImage;
    }

    /**
     * @param mixed $mainImage
     */
    public function setMainImage($mainImage): void
    {
        $this->_mainImage = $mainImage;
    }

    /**
     * @return mixed
     */
    public function getImageC1()
    {
        return $this->_imageC1;
    }

    /**
     * @param mixed $imageC1
     */
    public function setImageC1($imageC1): void
    {
        $this->_imageC1 = $imageC1;
    }

    /**
     * @return mixed
     */
    public function getImageC2()
    {
        return $this->_imageC2;
    }

    /**
     * @param mixed $imageC2
     */
    public function setImageC2($imageC2): void
    {
        $this->_imageC2 = $imageC2;
    }

    /**
     * @return mixed
     */
    public function getImageC3()
    {
        return $this->_imageC3;
    }

    /**
     * @param mixed $imageC3
     */
    public function setImageC3($imageC3): void
    {
        $this->_imageC3 = $imageC3;
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->_place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place): void
    {
        $this->_place = $place;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->_city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->_city = $city;
    }

    /**
     * @return mixed
     */
    public function getAppointement()
    {
        return $this->_appointement;
    }

    /**
     * @param mixed $appointement
     */
    public function setAppointement($appointement): void
    {
        $this->_appointement = $appointement;
    }

    /**
     * @return mixed
     */
    public function getLimitedPlace()
    {
        return $this->_limitedPlace;
    }

    /**
     * @param mixed $limitedPlace
     */
    public function setLimitedPlace($limitedPlace): void
    {
        $this->_limitedPlace = $limitedPlace;
    }

    /**
     * @return mixed
     */
    public function getPostDate()
    {
        return $this->_postDate;
    }

    /**
     * @param mixed $postDate
     */
    public function setPostDate($postDate): void
    {
        $this->_postDate = $postDate;
    }

}