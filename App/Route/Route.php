<?php

require_once("Controller/Controller.php");

class Route
{
    private $_controller;

    /**
     * Route constructor.
     * @param $_controller
     */
    public function __construct()
    {
        $this->_controller = new Controller();
    }

    public function route() {

        if (isset($_GET['status'])) {
            if ($_GET['status'] == "signout") {
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


            elseif ($_GET['status'] == "signin") {
                $this->_controller->signIn();
            }

            elseif ($_GET['status'] == "signup") {
                if (isset(
                            $_POST["name"]) && isset($_POST["firstname"])
                    && isset($_POST["profile_picture"])
                    && isset($_POST["phone"]) && isset($_POST["email"])
                    && isset($_POST["password"]) && isset($_POST["passwordConfirmation"])) {

                    if($_POST["password"] == $_POST["passwordConfirmation"]) {
                        $this->_controller->signUp(
                            $_POST["name"], $_POST["firstname"],
                            $_POST["profile_picture"], $_POST["phone"],
                            $_POST["email"], password_hash($_POST["password"]));
                    }

                    else {
                        echo "Les mots de passe ne se correspondent pas !";
                    }

                }

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