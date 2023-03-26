<?php

namespace App\Controllers;

use App\Services\AuthService;
use App\Services\UserExceptions;
use App\Services\UserService;
use Exception;

class AuthController extends CoreController
{
    /**
     * @return bool
     * @throws Exception
     */
    public function userLogin(): bool
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

            $homePage = new HomePageController();
            $homePage->getHomePageAfterLoggedIn();

            return true;

        } catch (UserExceptions|Exception $UserExceptions) {

            $this->twigEnvironment->display('/loginMain/sign-in.html.twig', ['error' =>
                $UserExceptions->getMessage()]);

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
            $homePage = new HomePageController();
            $homePage->getHomePage();

            return true;
        } catch (UserExceptions|Exception $exceptions) {

            $this->twigEnvironment->display('/adminMain/landing-dashboard.html.twig', ['error' =>
                $exceptions->getMessage()]);

            return false;
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function displayLandingDashboard(): bool
    {
        try {
            $this->twigEnvironment->display('/adminMain/landing-dashboard.html.twig', ['userObject' =>
                $_SESSION["userObject"]]);

            return true;
        } catch(Exception $exception){
            $this->twigEnvironment->display('/loginMain/sign-in.html.twig', ['error' =>
                $exception->getMessage()]);

            return false;
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function displayHomePage(): bool
    {
        try {
            $homePage = new HomePageController();
            $homePage->getHomePage();

            return true;
        }catch (Exception $exception) {
            $this->twigEnvironment->display('/loginMain/sign-in.html.twig', ['error' =>
                $exception->getMessage()]);

            return false;
        }
    }
}