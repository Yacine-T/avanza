<?php

require_once("Model/UserManager.php");
require_once("Model/MemberManager.php");

class UserController
{
    private $_userManager;
    private $_memberManager;

    /**
     * UserController constructor.
     * @param $_userManager
     * @param $_memberManager
     */
    public function __construct()
    {
        $this->_userManager = new UserManager();
        $this->_memberManager = new MemberManager();
    }

    public function logIn($email, $password)
    {
        $userData = $this->_userManager->getAllUsers();
        $userStatus = $this->_userManager->getUserStatus($email);

        if ($userData['email'] == $email) {
            if (isset($userData["password"]) && password_verify($password, $userData["password"])) {
                if (isset($userData["account_verified"]) && $userData["account_verified"] == true) {
                    $_SESSION = $userData;
                    if ($userStatus == "admin") {
                        require_once("Views/AdminView.php");
                        $_SESSION['status'] = "admin";
                        exit();
                    } else {
                        require_once("Views/MemberView.php");
                        $_SESSION['status'] = "member";
                        exit();
                    }
                } else {
                    echo "Votre compte n'est pas validé ! Veuillez régler vos frais d'adhésion. Si cela est le cas, envoyer un mail 
                    au support d'Avanza afin que votre compte soit validé !";
                    exit();
                }
            } else {
                echo "Le mot de passe saisie est incorrect ou bien ne pas dispose de compte qui lui est associé !";
                exit();
            }

        } else {
            echo "L'email saisie est incorrect ou bien ne pas dispose de compte qui lui est associé !";
            exit();
        }
    }

    public function logOut()
    {
        if (isset($_SESSION)) {
            $_SESSION = array();
            session_destroy();
            unset($_SESSION);
            header("Location:index.php");
            exit();
        } else {
            header("Location:index.php");
            exit();
        }
    }

    public function LoggedIn()
    {
        if ($_SESSION['status'] == "admin") {
            require_once("Views/AdminView.php");
        } else {
            require_once("Views/MemberView.php");
        }
    }

    public function createAccount($name, $firstname, $profilePicture, $phone, $email, $password, $passwordConfirmation)
    {
        $userData = $this->_userManager->getAllUsers();
            if (isset($userData['email']) && $userData['email'] == false) {
                if (preg_match("/^0[1-9]([0-9]{2}){4}$/", $phone)) {
                    if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@\/+=!?&*#<>_]).{8,}$/", $password)) {
                        if ($password == $passwordConfirmation) {
                            $this->_userManager->addUser($name, $firstname, $profilePicture, $phone, $email, password_hash($password, PASSWORD_DEFAULT));
                            $this->_memberManager->addMember();
                            header("Location:index.php");
                            exit();
                        } else {
                            echo "Les mots de passe ne se correspondent pas, veuillez réssayer s'il vous plaît !";
                            exit();
                        }
                    } else {
                        echo "Votre mot de passe doit contenir au moins un chiffre, une lettre minuscule, une majuscule ainsi qu'un 
                     symbole spéciale et être d'une longueur supérieure à 8 caractères !";
                        exit();
                    }
                } else {
                    echo "Veuillez saisir un numéro de téléphone valide !";
                    exit();
                }
            } else {
                echo "L'email saisie est déjà utilisé, veuillez en saisir un autre !";
                exit();
            }


    }

    public function editUserParameters($id, $name, $firstname, $profilePicture, $phone, $email){
        $userData = $this->_userManager->getAllUsers();
        if (isset($userData['email']) && $userData['email'] == false) {
            $this->_userManager->updateUser($id, $name, $firstname, $profilePicture, $phone, $email);
        }
        else {
            echo "Cette adresse email est déjà utilisée. Veuillez en choisir une autre. ";
            exit();
        }
    }

    public function removeAccount($id) {
        $this->_userManager->removeUser($id);
        $this->logOut();
    }


}