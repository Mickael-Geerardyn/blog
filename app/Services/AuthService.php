<?php

namespace App\Services;

use App\Controllers\AuthController;
use App\Controllers\CoreController;
use Exception;

class AuthService
{
    /**
     * @param object $userObject
     * @return bool
     * @throws Exception
     */
    public function setDataInGlobalSession(object $userObject): bool
    {
            $_SESSION["userObject"] = $userObject;
            $_SESSION["CSRFToken"] = bin2hex(random_bytes(32));

            if(empty($_SESSION["userObject"] && empty($_SESSION["CSRFToken"]))) {
                throw new Exception("Un problème est survenu lors de la mise en session des informations");
            }

            return true;
    }

    /**
     * @return bool
     * @throws UserExceptions;
     */
    public static function checkCSRFTokenSubmittedCorrespondWithSession(): bool
    {
        if(!empty($_POST['CSRFToken']) && $_SESSION['CSRFToken'] === $_POST['CSRFToken'])
        {
            return true;
        } else {
            throw new UserExceptions("Une erreur est survenue lors de l'authentification du token à la soumission du formulaire d'ajout d'un utilisateur");
        }
    }

    /**
     * @return bool
     * @throws UserExceptions
     */
    public static function unsetDataInSession(): bool
    {
        unset($_SESSION['userObject'], $_SESSION['isConnected'], $_SESSION['CSRFToken']);
        session_destroy();

        if (!empty($_SESSION['userObject']) && !empty($_SESSION['isConnected']) && !empty($_SESSION['CSRFToken']))
        {
            throw new UserExceptions("Une erreur est intervenue lors de la tentative de déconnexion");
        }

        return true;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public static function unsetDataInGlobalPost(): bool
    {
        if(!empty($_POST)){
            unset($_POST);
            return true;
        }
        throw new Exception ("Aucune donnée n'a été soumise");
    }
}