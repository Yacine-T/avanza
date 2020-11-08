<?php

require_once("Controller/HomeController.php");

class Route
{
    private $_controller;

    /**
     * Route constructor.
     * @param $_controller
     */
    public function __construct()
    {
        $this->_controller = new HomeController();
    }

    public function route()
    {

        if (isset($_GET['service'])) {
            if ($_GET['service'] == 'user') {
                if (isset($_GET['action'])) {
                    if ($_GET['action'] == 'login') {
                        $this->_controller->logIn($_POST['email'], $_POST['password']);
                    } elseif ($_GET['action'] == 'logout') {
                        $this->_controller->logOut();
                    } elseif ($_GET['action'] == 'signup') {
                        $this->_controller->signUp(
                            $_POST["name"], $_POST["firstname"],
                            $_POST["profile_picture"], $_POST["phone"],
                            $_POST["email"], $_POST["password"], $_POST["passwordConfirmation"]);
                    } else {
                        $this->_controller->home();
                    }
                } else {
                    $this->_controller->home();
                }
            }
            else {
                $this->_controller->home();
            }

        } else {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == 'connexion') {
                    if (isset($_SESSION) && !empty($_SESSION)) {
                        $this->_controller->LoggedIn();
                    }else {
                        $this->_controller->connexion();
                    }
                } elseif ($_GET['action'] == 'join') {
                    if (isset($_SESSION) && !empty($_SESSION)) {
                        $this->_controller->LoggedIn();
                    }else {
                        $this->_controller->join();
                    }
                }
                else {
                    if (isset($_SESSION) && !empty($_SESSION)) {
                        $this->_controller->LoggedIn();
                    }else {
                        $this->_controller->home();
                    }
                }
            } else {
                if (isset($_SESSION) && !empty($_SESSION)) {
                    $this->_controller->LoggedIn();
                }else {
                    $this->_controller->home();
                }            }
        }
    }
}