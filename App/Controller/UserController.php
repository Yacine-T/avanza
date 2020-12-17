<?php

require_once("Model/UserManager.php");
require_once("Model/MemberManager.php");

class UserController
{
    private $_userManager;
    private $_memberManager;
    private $_userData;

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
        $userData = $this->_userManager->getUsersDatasByEmail($email);
        $userStatus = $this->_userManager->getUserStatus($email);
        $emailVerify = $this->_userManager->email_verify($email);
        if ($emailVerify > 0) {
            if (isset($userData["password"]) && password_verify($password, $userData["password"])) {
                if (isset($userData["account_verified"]) && $userData["account_verified"] == true) {
                    $_SESSION = $userData;
                    $_SESSION['status'] = $userStatus;
                    return $_SESSION;
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
        } else {
            echo "Vous n'êtes pas encore connecté !";
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

    public function createAccount($name, $firstname, $profilePicture, $phone, $email, $password, $passwordConfirmation, $payment)
    {
        $pathinfo = pathinfo($profilePicture);
        $emailVerify = $this->_userManager->email_verify($email);
        if ($emailVerify['nbUsers'] == 0) {
            if (preg_match("/^0[1-9]([0-9]{2}){4}$/", $phone)) {
                if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@\/+=!?&*#<>_]).{8,}$/", $password)) {
                    if ($password == $passwordConfirmation) {
                        if ($profilePicture != null) {
                            if ($pathinfo['extension'] == "jpg" ||
                                $pathinfo['extension'] == "png" ||
                                $pathinfo['extension'] == "svg" ||
                                $pathinfo['extension'] == "jpeg" ||
                                $pathinfo['extension'] == "xcf" ||
                                $pathinfo['extension'] == "bmp") {
                                $this->_userManager->addUser($name, $firstname, $profilePicture, $phone, $email, password_hash($password, PASSWORD_DEFAULT), $payment);
                                $this->_memberManager->addMember();
                            } else {
                                echo "Veuillez télécharger une image (seules les extensions '.jpg' sont autorisées)";
                            }
                        } else {
                            $this->_userManager->addUser($name, $firstname, $profilePicture, $phone, $email, password_hash($password, PASSWORD_DEFAULT), $payment);
                            $this->_memberManager->addMember();
                        }
                    } else {
                        echo "Les mots de passe ne se correspondent pas, veuillez réssayer s'il vous plaît !";
                        exit();
                    }
                } else {
                    echo "Votre mot de passe doit contenir au moins un chiffre, une lettre minuscule, une majuscule ainsi qu'un 
                     symbole spéciale et être d'une longueur supérieure ou égale à 8 caractères !";
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

    public function editUserParameters($id, $name, $firstname, $profilePicture, $phone, $email, $password)
    {
        $pathinfo = pathinfo($profilePicture);
        $emailVerify = $this->_userManager->email_verify($email);
        if ($emailVerify['nbUsers'] == 0) {
            if (preg_match("/^0[1-9]([0-9]{2}){4}$/", $phone)) {
                if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@\/+=!?&*#<>_]).{8,}$/", $password)) {
                    if ($profilePicture != null) {
                        if ($pathinfo['extension'] == "jpg" ||
                            $pathinfo['extension'] == "png" ||
                            $pathinfo['extension'] == "svg" ||
                            $pathinfo['extension'] == "jpeg" ||
                            $pathinfo['extension'] == "xcf" ||
                            $pathinfo['extension'] == "bmp") {
                                $this->_userManager->updateUser($id, $name, $firstname, $profilePicture, $phone, $email, password_hash($password, PASSWORD_DEFAULT));
                                $_SESSION['id'] = $id;
                                $_SESSION['name'] = $name;
                                $_SESSION['firstname'] = $firstname;
                                $_SESSION['profilePicture'] = $profilePicture;
                                $_SESSION['email'] = $email;
                                $_SESSION['phone'] = $phone;
                                $_SESSION['password'] = $password;
                        } else {
                            echo "Veuillez télécharger une image (seules les extensions '.jpg' sont autorisées)";
                        }
                    } else {
                        $this->_userManager->addUser($name, $firstname, $profilePicture, $phone, $email, password_hash($password, PASSWORD_DEFAULT), $payment);
                        $this->_memberManager->addMember();
                    }
                } else {
                    echo "Votre mot de passe doit contenir au moins un chiffre, une lettre minuscule, une majuscule ainsi qu'un 
                     symbole spéciale et être d'une longueur supérieure ou égale à 8 caractères !";
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

    public function removeAccount($id)
    {
        $this->_userManager->removeUser($id);
        $this->_memberManager->removeMember($id);
        $this->logOut();
    }


}