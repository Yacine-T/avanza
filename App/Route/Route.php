<?php

require_once("Controller/WelcomeServices.php");

class Route
{
    private $_controller;

    /**
     * Route constructor.
     * @param $_controller
     */
    public function __construct()
    {
        $this->_controller = new WelcomeServices();
    }

    public function route() {

        if (isset($_GET['status'])) {
            if ($_GET['status'] == "logout") {
                if (isset($_GET['action'])) {
                    if($_GET['action'] == "connexion") {
                        $this->_controller->connexion();
                    }
                    elseif ($_GET['action'] == "join") {
                        $this->_controller->join();
                    }
                }

                else {
                    $this->_controller->welcome();
                }
            }


            elseif ($_GET['status'] == "login") {
                $this->_controller->logIn($_POST['email'], $_POST['password']);
            }

            elseif ($_GET['status'] == "signup") {
                        $this->_controller->signUp(
                            $_POST["name"], $_POST["firstname"],
                            $_POST["profile_picture"], $_POST["phone"],
                            $_POST["email"], $_POST["password"], $_POST["passwordConfirmation"]);
            }

            else {
                $this->_controller->welcome();
            }

        }

        else {
            $this->_controller->welcome();
        }



    }
}