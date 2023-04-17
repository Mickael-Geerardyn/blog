<?php

namespace App\Controllers;

use App\Controllers\Admin\AdminRoleController;
use App\Controllers\Admin\AdminUserController;
use App\Models\UserModel;
use App\Services\AuthService;
use App\Services\UserService;
use Exception;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class UserController extends CoreController
{
    /**
     * @return bool
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
	public function getLoginPage(): bool
    {
		try {
			$this->twigEnvironment->display("/loginMain/sign-in.html.twig");

            return true;
		} catch(Exception $exception){
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

			$this->twigEnvironment->display('/loginMain/sign-in.html.twig');

            return false;
		}
	}

    /**
     * @return bool
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
	public function getSignUpPage():bool
	{
		try {
            $_SESSION["referer"] = "login-page";
            self::storeInAddGlobalIfSessionIsNotEmpty();
            $this->twigEnvironment->display('/loginMain/sign-up.html.twig');
            return true;
		}catch (Exception $exception){
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

            $this->twigEnvironment->display('/loginMain/sign-in.html.twig');
            return false;
		}
	}

    /**
     * @return bool
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
public function newUserRegister(): bool
{
    try {
        UserService::checkInputs();

        $email = filter_input(INPUT_POST, 'email' ,FILTER_VALIDATE_EMAIL);
        UserService::checkIfUserEmailAlreadyExist($email);

        $firstname = htmlspecialchars($_POST['firstname']);
        $lastname = htmlspecialchars($_POST['lastname']);

        $hash_password = $_POST['password'];

        $userModel = new UserModel();

        $userModel->setFirstname($firstname)->setLastname($lastname)->setEmail($email)->setHashPassword($hash_password)->setRoleId();

        $lastRegisteredUserId = $userModel->createUser();
        $newUser = UserService::getOneUserById($lastRegisteredUserId);

        AuthService::unsetDataInGlobalPost();

        $authService = new AuthService();
        $authService->setDataInGlobalSession($newUser);
        $_SESSION["success"] = "Vous êtes maintenant inscrit!";
        self::storeSuccessOrErrorMessageInAddGlobalSession();

        RouterController::redirectToHomepage();

        return true;
    } catch(Exception $exception){
        $_SESSION["error"] = $exception->getMessage();
        self::storeSuccessOrErrorMessageInAddGlobalSession();

        $this->twigEnvironment->display('/loginMain/sign-up.html.twig');

        return false;
    }
}

}