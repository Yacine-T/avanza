<?php

require_once("Controller/UserController.php");
require_once("Controller/ArticleController.php");
require_once("Controller/ArticleThemeController.php");
require_once("Controller/RecipeController.php");
require_once("Controller/IngredientController.php");
require_once("Controller/UstensilController.php");
require_once("Controller/PrepationController.php");

class Route
{
    private $_userController;
    private $_articleController;
    private $_articleThemeController;
    private $_recipeController;
    private $_ingredientController;
    private $_ustensilController;
    private $_preparationController;

    /**
     * Route constructor.
     * @param  $_userController
     * @param  $_articleController
     * @param  $_articleThemeController
     * @param  $_recipeController
     * @param  $_ingredientController
     * @param  $_ustensilController
     * @param  $_preparationController
     */
    public function __construct()
    {
        $this->_userController = new UserController();
        $this->_articleController = new ArticleController();
        $this->_articleThemeController = new ArticleThemeController();
        $this->_recipeController = new RecipeController();
        $this->_ingredientController = new IngredientController();
        $this->_ustensilController = new UstensilController();
        $this->_preparationController = new PrepationController();
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
                                if (isset($_GET['step'])) {
                                     if ($_GET['step'] == 'edit')   {
                                         if (isset(
                                                 $_SESSION['id'],
                                                 $_SESSION['article']['title'],
                                                 $_SESSION['article']['content'],
                                                 $_SESSION['article']['image'])) {

                                            $this->_articleController->createArticle(
                                                 $_SESSION['id'],
                                                 $_SESSION['article']['title'],
                                                 $_SESSION['article']['content'],
                                                 $_SESSION['article']['image']);
                                            $this->_articleThemeController->createArticleTheme(explode(',', $_SESSION['article']['topics']));
                                             header("Location:index.php");
                                         } else {
                                             require_once("Views/WriteArticleView.php");
                                         }
                                    } elseif ($_GET['step'] == 'recap') {
                                         if (isset(
                                             $_POST['title'],
                                             $_POST['topics'],
                                             $_POST['content'],
                                             $_POST['image'])) {
                                             $_SESSION['article']['author'] = $_SESSION['name'] . ' ' . $_SESSION['firstname'];
                                             $_SESSION['article']['title'] = $_POST['title'];
                                             $_SESSION['article']['topics'] = implode(',', (array)$_POST['topics']);
                                             $_SESSION['article']['content'] = $_POST['content'];
                                             $_SESSION['article']['image'] = $_POST['image'];
                                             require_once("Views/RecapArticleView.php");
                                         } else {
                                             require_once("Views/WriteArticleView.php");
                                         }

                                     } else {
                                         require_once("Views/WriteArticleView.php");
                                    }
                                }  else {
                                    require_once("Views/WriteArticleView.php");
                                }

                        } elseif ($_GET["post"] == "recipe") {
                            if (isset($_GET["step"])) {
                                if ($_GET["step"] == "one") {
                                    require_once("Views/BasicInformationsRecipeView.php");
                                } elseif ($_GET["step"] == "two" && isset(
                                        $_POST['title'],
                                        $_POST['description'],
                                        $_POST['recipeImage'],
                                        $_POST['nbGuest'],
                                        $_POST['prepTime'],
                                        $_POST['difficulty']
                                        )) {
                                    $_SESSION['recipe']['author'] = $_SESSION['name'] . " " . $_SESSION['firstname'];
                                    $_SESSION['recipe']['authorId'] = $_SESSION['id'];
                                    $_SESSION['recipe']['title'] = $_POST['title'];
                                    $_SESSION['recipe']['description'] = $_POST['description'];
                                    $_SESSION['recipe']['recipeImage'] = $_POST['recipeImage'];
                                    $_SESSION['recipe']['nbGuest'] = $_POST['nbGuest'];
                                    $_SESSION['recipe']['prepTime'] = $_POST['prepTime'];
                                    $_SESSION['recipe']['difficulty'] = $_POST['difficulty'];
                                    require_once("Views/IngredientRecipeView.php");
                                } elseif ($_GET["step"] == "three" && isset(
                                        $_POST['firstIngredient'],
                                        $_POST['quantity'],
                                        $_POST['measureUnit'],
                                        $_POST['ingredientImage']
                                    )) {
                                    $_SESSION['recipe']['ingredient'] = $_POST['firstIngredient'];
                                    $_SESSION['recipe']['quantity'] = $_POST['quantity'];
                                    $_SESSION['recipe']['measureUnit'] = $_POST['measureUnit'];
                                    $_SESSION['recipe']['ingredientImage'] = $_POST['ingredientImage'];
                                    require_once("Views/UstensilsRecipeView.php");
                                } elseif ($_GET["step"] == "four" && isset(
                                    $_POST['firstUstensils'],
                                    $_POST['quantity'],
                                    $_POST['ustensilImage'])) {
                                    $_SESSION['recipe']['ustensils'] = $_POST['firstUstensils'];
                                    $_SESSION['recipe']['quantityUstensils'] = $_POST['quantity'];
                                    $_SESSION['recipe']['ustensilImage'] = $_POST['ustensilImage'];
                                    require_once("Views/PreparationRecipeView.php");
                                } elseif ($_GET["step"] == "five") {
                                    if (isset($_POST['firstStep'])) {
                                        $_SESSION['recipe']['steps'] = $_POST['firstStep'];
                                        require_once("Views/RecapRecipeView.php");
                                    } else {
                                        require_once("Views/PreparationRecipeView.php");
                                    }
                                } elseif (isset($_GET['step']) && $_GET['step'] == "six") {
                                    if (isset(
                                        $_SESSION['recipe']['authorId'],
                                        $_SESSION['recipe']['title'],
                                        $_SESSION['recipe']['description'],
                                        $_SESSION['recipe']['recipeImage'],
                                        $_SESSION['recipe']['nbGuest'],
                                        $_SESSION['recipe']['prepTime'],
                                        $_SESSION['recipe']['difficulty'],
                                        $_SESSION['recipe']['ingredient'],
                                        $_SESSION['recipe']['quantity'],
                                        $_SESSION['recipe']['measureUnit'],
                                        $_SESSION['recipe']['ingredientImage'],
                                        $_SESSION['recipe']['ustensils'],
                                        $_SESSION['recipe']['quantityUstensils'],
                                        $_SESSION['recipe']['ustensilImage']
                                    )) {
                                        $this->_recipeController->composeRecipe(
                                            $_SESSION['recipe']['authorId'],
                                            $_SESSION['recipe']['title'],
                                            $_SESSION['recipe']['description'],
                                            $_SESSION['recipe']['recipeImage'],
                                            $_SESSION['recipe']['nbGuest'],
                                            $_SESSION['recipe']['prepTime'],
                                            $_SESSION['recipe']['difficulty'],
                                        );
                                        $this->_ingredientController->createIngredient(
                                            (array) $_SESSION['recipe']['ingredient'],
                                            $_SESSION['recipe']['measureUnit'],
                                            $_SESSION['recipe']['ingredientImage'],
                                            $_SESSION['recipe']['quantity']
                                        );
                                        $this->_ustensilController->createUstensil(
                                            (array) $_SESSION['recipe']['ustensils'],
                                            $_SESSION['recipe']['ustensilImage'],
                                            $_SESSION['recipe']['quantityUstensils']
                                        );
                                        $this->_preparationController->createPreparationStep((array)$_SESSION['recipe']['steps']);
                                        header("Location: index.php");
                                    } else {
                                        header("Location:index.php?action=post&post=recipe&step=five");
                                    }

                                } else {
                                    require_once("Views/BasicInformationsRecipeView.php");
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
                    } else {
                        require_once("Views/MemberView.php");
                        $_SESSION['status'] = "member";
                    }
                } elseif ($_GET['action'] == "signup") {
                    if (isset(
                        $_POST['name'],
                        $_POST['firstname'],
                        $_POST['profile_picture'],
                        $_POST['phone'],
                        $_POST['email'],
                        $_POST['password'],
                        $_POST['passwordConfirmation'],
                        $_POST['payment'])) {
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
                                $_POST['passwordConfirmation'],
                                $_POST['payment']);
                            header("Location:index.php");
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