<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Services\AuthService;
use App\Services\UserService;
use Exception;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class AuthController extends CoreController
{
    /**
     * @return bool
     * @throws Exception
     */
    public function userSignIn(): bool
    {
        try {

            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $signInPassword = $_POST['password'];

            // Filter_input return null if 'email' is not defined or false if the filter fails
            $userObject = UserService::checkUserAuthenticationByEmail($email);

            UserService::checkPasswordUserAuthentication($signInPassword, $userObject->getHashPassword());


            if(!UserService::checkIfUserIsAlreadyLoginInSession())
            {
                $authService = new AuthService();
                $authService->setDataInGlobalSession($userObject);
            }

            self::storeBaseUriInGlobalServer();

            RouterController::redirectToHomepage();
            return true;

        } catch (Exception $exception) {
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

            $this->twigEnvironment->display('/loginMain/sign-in.html.twig');

            return false;
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function userLogout(): bool
    {
        try{

            AuthService::unsetDataInSession();

            RouterController::redirectToHomepage();

            return true;
        } catch (Exception $exception) {
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

            $this->twigEnvironment->display('/adminMain/blog-list.html.twig');

            return false;
        }
    }
}