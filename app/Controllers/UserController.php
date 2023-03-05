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
			$adminUserController = new AdminUserController();
			$adminUserController::displayLoginPage('sign-in', informations: ['referer' => $_GET["action"]]);
		} catch(Exception $exception){
			$adminUserController = new AdminUserController();
			$adminUserController::displayLoginPage('sign-in', informations: ['error' => $exception->getMessage()]);
		}
	}

	public function getSignUpPage()
	{
		try {
			$adminUserController = new AdminUserController();
			$adminUserController::displayLoginPage('sign-up', informations: ['referer' => $_GET["action"]]);
		}catch (Exception $exception){
			$adminUserController = new AdminUserController();
			$adminUserController::displayLoginPage('sign-in', informations: ['error' => $exception->getMessage()]);
		}
	}

	/**
	 * @return bool
	 */
	public function userLogin(): bool
	{
		try {

			UserService::userLogin();

			return true;
		} catch(Exception $exception){

			$adminUserController = new AdminUserController();
			$adminUserController::displayLoginPage('sign-in', informations: ['error' => $exception->getMessage(), 'email' => $userEmail] );

			return false;
		}
	}
}