<?php

require_once ("Model/UserDAO.php");


class Controller
{
    private $_userDAO;


    /**
     * Controller constructor.
     * @param $_userDAO
     */
    public function __construct()
    {
        $this->_userDAO = new UserDAO();
    }


    public function welcome() {
        require_once ("Views/welcomeView.php");
    }

    public function connexion() {
        require_once ("Views/connexionView.php");
    }

    public function join() {
        require_once ("Views/signupViews.php");
    }

    public function signIn() {
        $references = $this->_userDAO->selectAllUser();
    }

    public function signUp($name, $firstname, $profilePicture, $phone, $email, $password) {
        $this->_userDAO->addUser($name, $firstname, $profilePicture, $phone, $email, $password);
        header("Location:index.php");
    }
}