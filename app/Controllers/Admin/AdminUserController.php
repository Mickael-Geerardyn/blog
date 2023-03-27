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
	public function registeredNewUser(): bool
	{
		try {
			AuthService::checkCSRFTokenSubmittedCorrespondWithSession();

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

			AuthService::unsetDataInGlobalPost();

            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig',
                ["userObject" => UserService::getOneUserById($lastRegisteredUserId), "success" => "L'utilisateur a bien été enregistré"]);

			return true;

		} catch (UserExceptions | Exception $Exception) {

            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig', ['error' =>
                $Exception->getMessage()]);

			return false;
		}
	}

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function updatedUser (): bool
    {
        try {
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();

            $lastEmail = filter_input(INPUT_POST, "lastEmail", FILTER_VALIDATE_EMAIL);
            $email = filter_input(INPUT_POST, 'email' ,FILTER_VALIDATE_EMAIL);

            if ($email != $lastEmail) {
                UserService::checkIfUserEmailAlreadyExist($email);
            }

            $firstname = htmlspecialchars($_POST['firstname']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $phone_number = htmlspecialchars($_POST['phone_number']);
            $linkedin = htmlspecialchars($_POST['linkedin']);
            $twitter = htmlspecialchars($_POST['twitter']);
            $role_title = htmlspecialchars($_POST['role_title']);

            $newAdminRole = new AdminRoleController();

            $selectedRole = $newAdminRole->getOneRoleByTitle($role_title);

            $userModel = new UserModel();

            $userModel->setFirstname($firstname)->setLastname($lastname)->setEmail($email)->setPhoneNumber($phone_number)->setSocialLinkedin($linkedin)->setSocialTwitter($twitter)->setRoleId($selectedRole->getId());

            AuthService::unsetDataInGlobalPost();

            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig',
                ["userObject" => UserService::getOneUserByEmail($userModel->getEmail()), "success" => "L'utilisateur ${email} à été mis à jour"]);

        return true;

        } catch (Exception $exception) {

            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig',
                ["error" => $exception->getMessage()]);

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

			if(!AuthService::checkCSRFTokenSubmittedCorrespondWithSession() && !UserService::checkUserAuthenticationByEmail($userEmail)){
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
            $this->twigEnvironment->display('/adminMain/users-page.html.twig', ["usersArrayObject" => UserService::getAllUsers(), "CSRFToken" => $_SESSION["CSRFToken"]]);
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
            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig', ["CSRFToken" => $_SESSION["CSRFToken"]]);
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
                ["userObject" => $updatedUser, "CSRFToken" => $_SESSION["CSRFToken"], "ROLE_ADMIN" => UserModel::ROLE_ADMIN, "ROLE_USER" => UserModel::ROLE_USER]);

			return true;
		} catch (Exception $exception){

            $this->twigEnvironment->display('/adminMain/users-page.html.twig',
                ["error" => $exception->getMessage()]);

			return false;
		}
	}
}