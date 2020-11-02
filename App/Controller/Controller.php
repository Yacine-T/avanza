<?php

require_once ("Model/UserDAO.php");


class Controller
{
    private $_userDAO;


    /**
     * Controller constructor.
     * @param $_userDAO
     */
    public function __construct()
    {
        $this->_userDAO = new UserDAO();
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

    public function logIn()
    {
        $references = $this->_userDAO->getAllUser();
    }

    public function signUp($name, $firstname, $profilePicture, $phone, $email, $password, $passwordConfirmation)
    {

        if (isset($name) && isset($firstname)
            && isset($profilePicture)
            && isset($phone) && isset($email)
            && isset($password) && isset($passwordConfirmation)) {

            if ($this->_userDAO->ifExistUser($email, $password) == false) {
                if (preg_match("/^0[1-9]([0-9]{2}){4}$/",$phone)) {
                    if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@\/+=!?&*#<>_]).{8,}$/", $password)) {
                        if ($password == $passwordConfirmation) {
                            $this->_userDAO->addUser($name, $firstname, $profilePicture, $phone, $email, password_hash($password, PASSWORD_DEFAULT));
                            header("Location:index.php");
                        } else {
                            echo "Les mots de passe ne se correspondent pas !";
                        }
                    }
                    else {
                        echo "Votre mot de passe doit contenir au moins un chiffre, une lettre minuscule, une majuscule ainsi qu'un 
                     symbole spéciale et d'une longueur supérieur à 8 caractères !";
                    }
                }

                else {
                    echo "Veuillez saisir un numéro de téléphone valide !";
                }
            }

            else {
                echo "Un des identifiants (email ou mot de passe) saisis est déjà utilisé ! Veuillez en saisir un autre !";
            }

        }
    }

}