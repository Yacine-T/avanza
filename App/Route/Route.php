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
                $this->_controller->signUp();
            }

            else {
                $this->_controller->welcome();
            }

        }

        else {
            $this->_controller->welcome();
        }



    }

    public function error(){

    }
}