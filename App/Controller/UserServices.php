<?php
session_start();

require_once("PublicServices.php");
require_once("Model/UserDAO.php");
require_once("Model/MemberDAO.php");

class UserServices extends PublicServices
{
    private $_userDAO;
    private $_membersDAO;

    /**
     * PublicServices constructor.
     * @param $_userDAO
     */
    public function __construct()
    {
        $this->_userDAO = new UserDAO();
        $this->_membersDAO = new MemberDAO();
    }

    public function logIn($email, $password)
    {
        $userData = $this->_userDAO->getUsersDataByEmail($email);
        $userStatus = $this->_userDAO->getUserStatus($email);
        if ($userData == true) {
            if (password_verify($password, $userData["password"])) {
                if ($userData["account_verified"] == true) {
                    $_SESSION['name'] = $userData['name'];
                    $_SESSION['firstname'] = $userData['firstname'];
                    if ($userStatus == "admin") {
                        require_once("Views/adminView.php");
                        exit();
                    } else {
                        require_once("Views/memberView.php");
                        exit();
                    }
                } else {
                    echo "Votre compte n'est pas validé ! Veuillez régler vos frais d'adhésion. Si cela est le cas, envoyer un mail 
                    au support d'Avanza afin que votre compte soit validé !";
                }
            } else {
                echo "Le mot de passe saisie est incorrect ou bien ne pas dispose de compte qui lui est associé !";
            }

        } else {
            echo "L'email saisie est incorrect ou bien ne pas dispose de compte qui lui est associé !";
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
            echo "Vous n'êtes pas connecté. Merci de vous authentifié.";
            exit();
        }
    }

    public function signUp($name, $firstname, $profilePicture, $phone, $email, $password, $passwordConfirmation)
    {
        $userData = $this->_userDAO->getUsersDataByEmail($email);
        if (isset($name) && isset($firstname)
            && isset($profilePicture)
            && isset($phone) && isset($email)
            && isset($password) && isset($passwordConfirmation)) {
            if ($userData == false) {
                if (preg_match("/^0[1-9]([0-9]{2}){4}$/", $phone)) {
                    if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@\/+=!?&*#<>_]).{8,}$/", $password)) {
                        if ($password == $passwordConfirmation) {
                            $this->_userDAO->addUser($name, $firstname, $profilePicture, $phone, $email, password_hash($password, PASSWORD_DEFAULT));
                            $this->_membersDAO->addMember();
                            header("Location:index.php");
                        } else {
                            echo "Les mots de passe ne se correspondent pas, veuillez réssayer s'il vous plaît !";
                        }
                    } else {
                        echo "Votre mot de passe doit contenir au moins un chiffre, une lettre minuscule, une majuscule ainsi qu'un 
                     symbole spéciale et être d'une longueur supérieure à 8 caractères !";
                    }
                } else {
                    echo "Veuillez saisir un numéro de téléphone valide !";
                }
            } else {
                echo "L'email saisie est déjà utilisé, veuillez en saisir un autre !";
            }

        }
    }
}