<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Controllers\HomePageController;
use App\Models\UserModel;
use App\Services\UserService;
use App\Services\UserExceptions;
use Exception;

class AdminUserController extends AdminCoreController
{

	/**
	 * @return bool
	 * @throws UserExceptions
	 */
	public function userLogin(): bool
	{
		try {

			UserService::userLogin();

			return true;

		} catch (UserExceptions|Exception $UserExceptions) {

			self::displayLoginPage('sign-in', informations: ['error' => $UserExceptions->getMessage()]);

			return false;
		}
	}

	/**
	 * @return bool
	 * @throws UserExceptions
	 */
	public function userLogout(): bool
	{
		try{
			UserService::unsetDataInSession();
			$homePage = new HomePageController();
            $homePage->getHomePage();

			return true;
		} catch (UserExceptions $userExceptions) {

			self::displayCalledPage('landing-dashboard', informations:['error' => $userExceptions->getMessage()]);

			return false;
		}
	}

	/**
	 * @return bool
	 * @throws UserExceptions
	 */
	public function newUserRegister(): bool
	{
		try {
			UserService::checkCSRFTokenSubmittedCorrespondWithSession();

			$email = filter_input(INPUT_POST, 'email' ,FILTER_VALIDATE_EMAIL);

			UserService::checkIfUserEmailAlreadyExist($email);

			$firstname = htmlspecialchars($_POST['firstname']);
			$lastname = htmlspecialchars($_POST['lastname']);
			$hash_password = $_POST['password'];
			$phone_number = htmlspecialchars($_POST['phone_number']);
			$linkedin = htmlspecialchars($_POST['linkedin']);
			$twitter = htmlspecialchars($_POST['twitter']);
			$role_title = htmlspecialchars($_POST['role_title']);

			$newAdminRole = new AdminRoleController();

			$selectedRole = $newAdminRole->getOneRoleByTitle($role_title);

			$userModel = new UserModel();

			$userModel->setFirstname($firstname)->setLastname($lastname)->setEmail($email)->setHashPassword($hash_password)->setPhoneNumber($phone_number)->setSocialLinkedin($linkedin)->setSocialTwitter($twitter)->setRoleId($selectedRole->getId());

			$lastRegisteredUserId = $userModel->createUser();

			UserService::unsetDataInGlobalPost();

			self::displayCalledPage('form-add-or-update-user', UserService::getOneUserById($lastRegisteredUserId));

			return true;

		} catch (UserExceptions | Exception $Exception) {

			self::displayCalledPage('form-add-or-update-user', informations: ['error' => $Exception->getMessage()]);

			return false;
		}
	}

	/**
	 * @return bool
	 */
	public function deleteUser():bool
	{
		try {
			$userEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

			if(!UserService::checkCSRFTokenSubmittedCorrespondWithSession() && !UserService::checkUserAuthenticationByEmail($userEmail)){
				self::displayUsersPage();
			}

			UserModel::deleteUser($userEmail);

			self::displayUsersPage();

		} catch(Exception $exception){
			echo $exception->getMessage();
			return false;
		}

		return true;
	}

	/**
	 * @return bool
	 *
	 */
	public function displayUsersPage(): bool
	{
		try {
			if(!UserService::checkIfUserIsAlreadyLoginInSession())
			{
				self::displayLoginPage('sign-in');
			}

			$allUsers = UserService::getAllUsers();

			self::displayCalledPage('users-page', $allUsers);
		} catch (Exception $exception){
			echo $exception->getMessage();
			return false;
		}
		return true;
	}

	/**
	 * @return bool
	 * @throws UserExceptions
	 */
	public function displayLandingDashboardIfUserIsAlreadyLoggedInSession(): bool
	{
		try {
			self::displayCalledPage('landing-dashboard', $_SESSION['userObject']);
			return true;
		} catch (UserExceptions $userExceptions) {
			AdminUserController::displayLoginPage('sign-in', informations: ['error' => $userExceptions->getMessage()]);
			return false;
		}
	}

	/**
	 * @return bool
	 * @throws UserExceptions
	 */
	public function displayAddFormUser(): bool
	{
		try {
			self::displayCalledPage('form-add-or-update-user');
			return true;

		} catch (UserExceptions $userExceptions)
		{
			AdminUserController::displayLoginPage('sign-in', informations: ['error' => $userExceptions->getMessage()]);
			return false;
		}
	}

	/**
	 * @return bool
	 */
	public function displayUpdateFormUser(): bool
	{
		try {

			if(!UserService::checkCSRFTokenSubmittedCorrespondWithSession() && !UserService::checkIfUserIsAlreadyLoginInSession())
			{
				self::displayUsersPage();
			}
			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			$updatedUser = UserService::getOneUser($email);

			self::displayCalledPage('form-add-or-update-user', $updatedUser);

			return true;
		} catch (Exception $exception){
			echo $exception->getMessage();
			return false;
		}
	}
}