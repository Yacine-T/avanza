<?php

require_once("Controller/UserController.php");
require_once("Controller/PostController.php");

class Route
{
    private $_userController;
    private $_postController;

    /**
     * Route constructor.
     * @param  $_userController
     */
    public function __construct()
    {
        $this->_userController = new UserController();
        $this->_postController = new PostController();
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
                                    $_POST['email'], $_POST['password']);
                            header("Location:index.php?action=parameter&edit=true");
                        } else {
                            require_once("Views/MemberView.php");
                        }
                    } else {
                        require_once("Views/MemberParameterView.php");
                    }
                } elseif ($_GET['action'] == "remove") {
                    $this->_userController->removeAccount($_SESSION['id']);
                    header("Location:index.php");
                } elseif ($_GET['action'] == "logout") {
                    $this->_userController->logOut();
                    require_once("Views/HomeView.php");
                } elseif ($_GET["action"] == "post") {
                    if (isset($_GET["post"])) {
                        if ($_GET["post"] == "article") {
                            if (isset($_GET['edit']) && $_GET['edit'] == true) {
                                if(isset(
                                    $_POST['title'],
                                    $_POST['topics'],
                                    $_POST['content'],
                                    $_POST['image']))
                                {
                                    $topics = implode(",", $_POST['topics']);
                                    $this->_postController->writePost(
                                        $_SESSION["id"],
                                        $_POST['title'],
                                        $topics,
                                        $_POST['content'],
                                        $_POST['image']);
                                    header("Location:index.php");
                                } else {
                                    require_once("Views/WriteArticleView.php");
                                }
                            } else {
                                require_once("Views/WriteArticleView.php");
                            }

                        } elseif ($_GET["post"] == "recipe") {
                            require_once("Views/ComposeRecipeView.php");
                        } else{
                            require_once("Views/MemberView.php");
                        }

                    } else {
                        require_once("Views/MemberView.php");
                    }
                } else {
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
                    if ($_SESSION['status'] == "admin") {
                        require_once("Views/AdminView.php");
                        $_SESSION['status'] = "admin";
                        exit();
                    } else {
                        require_once("Views/MemberView.php");
                        $_SESSION['status'] = "member";
                        exit();
                    }
                } elseif ($_GET['action'] == "signup") {
                    if (isset(
                        $_POST['name'],
                        $_POST['firstname'],
                        $_POST['profile_picture'],
                        $_POST['phone'],
                        $_POST['email'],
                        $_POST['password'],
                        $_POST['passwordConfirmation'], $_POST['payment'])) {
                        if ($_POST['payment'] == "online") {
                            $this->_userController->createAccount(
                                $_POST['name'],
                                $_POST['firstname'],
                                $_POST['profile_picture'],
                                $_POST['phone'],
                                $_POST['email'],
                                $_POST['password'],
                                $_POST['passwordConfirmation'], $_POST['payment']);
                            require_once("Views/MembershipFeeView.php");
                        } elseif ($_POST['payment'] == "onsite") {
                            $this->_userController->createAccount(
                                $_POST['name'],
                                $_POST['firstname'],
                                $_POST['profile_picture'],
                                $_POST['phone'],
                                $_POST['email'],
                                $_POST['password'],
                                $_POST['passwordConfirmation'], $_POST['payment']);
                            require_once("Views/HomeView.php");
                        } else {
                            require_once("Views/JoinView.php");
                        }
                    } else {
                        header("Location: index.php?action=join");
                    }

                } else {
                    require_once("Views/HomeView.php");
                }

            } else {
                require_once("Views/HomeView.php");
            }

        }


    }
}