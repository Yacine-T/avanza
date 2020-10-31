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


    public function welcome()
    {
        require_once("Views/welcomeView.php");
    }

    public function connexion()
    {
        require_once("Views/connexionView.php");
    }

    public function join()
    {
        require_once("Views/signupViews.php");
    }

    public function signIn()
    {
        $references = $this->_userDAO->selectAllUser();
    }

    public function signUp($name, $firstname, $profilePicture, $phone, $email, $password, $passwordConfirmation)
    {
        if (isset($name) && isset($firstname)
            && isset($profilePicture)
            && isset($phone) && isset($email)
            && isset($password) && isset($passwordConfirmation)) {

            if ($password == $passwordConfirmation) {
                $this->_userDAO->addUser($name, $firstname, $profilePicture, $phone, $email, password_hash($password, PASSWORD_DEFAULT));
                header("Location:index.php");
            } else {
                echo "Les mots de passe ne se correspondent pas !";
            }


        }
    }

}