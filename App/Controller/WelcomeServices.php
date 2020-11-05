<?php


require_once("Model/UserDAO.php");
require_once("Model/MemberDAO.php");

class WelcomeServices
{
    private $_userDAO;
    private $_membersDAO;

    /**
     * WelcomeServices constructor.
     * @param $_userDAO
     */
    public function __construct()
    {
        $this->_userDAO = new UserDAO();
        $this->_membersDAO = new MemberDAO();
    }

    public function welcome()
    {
        require_once("Views/welcomeView.php");
    }

    public function connexion()
    {
        require_once("Views/connexionView.php");
    }

    public function join()
    {
        require_once("Views/signupViews.php");
    }

    public function logOut(){
        
    }

    public function logIn($email, $password)
    {
        $userData = $this->_userDAO->getUsersDataByEmail($email);
        $userStatus = $this->_userDAO->getUserStatus($email);
        if ($userData == true && password_verify($password, $userData["password"]) == true) {
            if ($userData["account_verified"] == true) {
                session_start();
                $_SESSION['data'] = $userData;
                if ($userStatus == "member") {
                    require_once("Views/memberView.php");
                } else {
                    require_once("Views/adminView.php");
                }
            } else {
                echo "Votre compte n'est pas validé veuillez régler vos frais d'adhésion. Si cela est le cas, envoyer un mail 
                    au support d'Avanza afin que celui-ci soit validé !";
            }
        } else {
            echo "notOk";
        }
    }

    public function signUp($name, $firstname, $profilePicture, $phone, $email, $password, $passwordConfirmation)
    {
        $userData = $this->_userDAO->getUsersDataByEmail($email);
        if (isset($name) && isset($firstname)
            && isset($profilePicture)
            && isset($phone) && isset($email)
            && isset($password) && isset($passwordConfirmation)) {
            if ($userData == true) {
                if (password_verify($password, $userData["password"]) == false) {
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
                    echo "Le mot de passe saisie est déjà utilisé ! veuillez en sélèctionner un autre ";
                }


            } else {
                echo "L'email saisie est déjà utilisé, veuillez en saisir un autre !";
            }

        }
    }

}