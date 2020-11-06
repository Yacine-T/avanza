<?php

class PublicServices
{
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
        require_once("Views/joinViews.php");
    }
}