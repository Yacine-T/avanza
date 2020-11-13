<?php

require_once("Controller/UserController.php");

class Route
{
    private $_userController;

    /**
     * Route constructor.
     * @param  $_userController
     */
    public function __construct()
    {
        $this->_userController = new UserController();
    }

    public function route()
    {
        if (isset($_SESSION) && !empty($_SESSION)) {
            if (isset($_GET['action'])) {
                if ($_GET['action'] == "parameter") {
                    if (isset($_GET['edit'])) {
                        if ($_GET['edit'] == true) {
                            if (isset(
                                $_POST['name'],
                                $_POST['firstname'],
                                $_POST['profile_picture'],
                                $_POST['phone'],
                                $_POST['email']))
                            $this->_userController->editUserParameters(
                                $_SESSION['id'],
                                $_POST['name'],
                                $_POST['firstname'],
                                $_POST['profile_picture'], $_POST['phone'],
                                $_POST['email']);
                            require_once ("Views/MemberView.php");
                        } else {
                            require_once("Views/MemberView.php");
                        }
                    } else {
                        require_once("Views/MemberParameterView.php");
                    }
                } elseif ($_GET['action'] == "remove") {
                    $this->_userController->removeAccount($_SESSION['id']);
                }
                elseif ($_GET['action'] == "logout") {
                    $this->_userController->logOut();
                }
                else {
                    require_once("Views/MemberView.php");
                }
            } else {
                require_once("Views/MemberView.php");
            }
        } else {
            if (isset($_GET['action'])) {
                    if ($_GET['action'] == "connection") {
                        require_once("Views/ConnectionView.php");
                    } elseif ($_GET['action'] == "join") {
                        require_once("Views/JoinView.php");
                    } elseif ($_GET['action'] == "login") {
                        $this->_userController->logIn(
                            $_POST["email"],
                            $_POST['password']);
                    } elseif ($_GET['action'] == "signup") {
                        if (isset(
                            $_POST['name'],
                            $_POST['firstname'],
                            $_POST['profile_picture'],
                            $_POST['phone'],
                            $_POST['email'],
                            $_POST['password'],
                            $_POST['passwordConfirmation']))
                            $this->_userController->createAccount(
                                    $_POST['name'],
                                    $_POST['firstname'],
                                    $_POST['profile_picture'],
                                    $_POST['phone'],
                                    $_POST['email'],
                                    $_POST['password'],
                                    $_POST['passwordConfirmation']);
                        require_once("Views/HomeView.php");
                    } else {
                        require_once("Views/HomeView.php");
                    }

            } else {
                require_once("Views/HomeView.php");
            }

        }


    }
}