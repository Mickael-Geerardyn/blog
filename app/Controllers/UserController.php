<?php

namespace App\Controllers;

use App\Controllers\Admin\AdminUserController;
use App\Services\UserService;
use Exception;

class UserController extends CoreController
{
	public function getLoginPage()
	{
		try {
			$this->twigEnvironment->display("/loginMain/sign-in.html.twig");
		} catch(Exception $exception){
			$this->twigEnvironment->display('/loginMain/sign-in.html.twig', ["error" => $exception->getMessage
            ()]);
		}
	}

	public function getSignUpPage()
	{
		try {
            $this->twigEnvironment->display('/loginMain/sign-up.html.twig', ['referer' => $_GET["action"]]);
		}catch (Exception $exception){
            $this->twigEnvironment->display('/loginMain/sign-in.html.twig', ['error' =>
                $exception->getMessage()]);
		}
	}

	/**
	 * @return bool
     * @throws Exception
	 */
	public function userLogin(): bool
	{
		try {

			UserService::logUser();

			return true;
		} catch(Exception $exception){

            $this->twigEnvironment->display('/loginMain/sign-in.html.twig', ['error' =>
                $exception->getMessage(), 'userEmail' => filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)]);

			return false;
		}
	}
}