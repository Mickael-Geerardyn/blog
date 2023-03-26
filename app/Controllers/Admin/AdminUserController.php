<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Controllers\HomePageController;
use App\Models\UserModel;
use App\Services\AuthService;
use App\Services\UserService;
use App\Services\UserExceptions;
use Exception;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class AdminUserController extends AdminCoreController
{
	/**
	 * @return bool
	 * @throws Exception
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

            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig',
                ["userObject" => UserService::getOneUserById($lastRegisteredUserId)]);

			return true;

		} catch (UserExceptions | Exception $Exception) {

            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig', ['error' =>
                $Exception->getMessage()]);

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
				$this->twigEnvironment->display('/loginMain/sign-in.html.twig');
			}

            $this->twigEnvironment->display('/adminMain/users-page.html.twig', ["usersArrayObject" => UserService::getAllUsers()]);
		} catch (Exception $exception){
			echo $exception->getMessage();
			return false;
		}
		return true;
	}

	/**
	 * @return bool
	 * @throws Exception
	 */
	public function displayLandingDashboardIfUserIsAlreadyLoggedInSession(): bool
	{
		try {
            $this->twigEnvironment->display('/adminMain/landing-dashboard.html.twig');
			return true;
		} catch (UserExceptions $userExceptions) {
            $this->twigEnvironment->display('/loginMain/sign-in', ['error' => $userExceptions->getMessage()]);
			return false;
		}
	}

	/**
	 * @return bool
	 * @throws Exception
	 */
	public function displayAddFormUser(): bool
	{
		try {
            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig');
			return true;

		} catch (UserExceptions $userExceptions)
		{
            $this->twigEnvironment->display('/loginMain/sign-in.html.twig', ['error' =>
                $userExceptions->getMessage()]);
			return false;
		}
	}

	/**
	 * @return bool
     * @throws Exception
	 */
	public function displayUpdateFormUser(): bool
	{
		try {

			if(!AuthService::checkCSRFTokenSubmittedCorrespondWithSession() && !UserService::checkIfUserIsAlreadyLoginInSession())
			{
				self::displayUsersPage();
			}
			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			$updatedUser = UserService::getOneUserByEmail($email);

            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig',
                ["updatedUser" => $updatedUser]);

			return true;
		} catch (Exception $exception){
			echo $exception->getMessage();
			return false;
		}
	}
}