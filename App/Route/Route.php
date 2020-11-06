<?php

require_once("Controller/PublicServices.php");
require_once("Controller/UserServices.php");

class Route
{
    private $_pbServices;
    private $_userServices;

    /**
     * Route constructor.
     * @param $_controller
     */
    public function __construct()
    {
        $this->_pbServices = new PublicServices();
        $this->_userServices = new UserServices();
    }

    public function route()
    {

        if (isset($_GET['service'])) {
            if ($_GET['service'] == 'user') {
                if (isset($_GET['action'])) {
                    if ($_GET['action'] == 'login') {
                        $this->_userServices->logIn($_POST['email'], $_POST['password']);
                    } elseif ($_GET['action'] == 'logout') {
                        $this->_userServices->logOut();
                    } elseif ($_GET['action'] == 'signup') {
                        $this->_userServices->signUp(
                            $_POST["name"], $_POST["firstname"],
                            $_POST["profile_picture"], $_POST["phone"],
                            $_POST["email"], $_POST["password"], $_POST["passwordConfirmation"]);
                    } else {
                        $this->_userServices->welcome();
                    }
                } else {
                    $this->_userServices->welcome();
                }
            } else {
                $this->_pbServices()->welcome();
            }

        } else {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'connexion') {
                    $this->_pbServices->connexion();
                } elseif ($_GET['action'] == 'join') {
                    $this->_pbServices->join();
                } else {
                    $this->_pbServices->welcome();
                }
            } else {
                $this->_pbServices->welcome();
            }
        }
    }
}