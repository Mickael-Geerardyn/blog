<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Controllers\HomePageController;
use App\Controllers\RouterController;
use App\Models\CommentModel;
use App\Models\UserModel;
use App\Services\AuthService;
use App\Services\PostService;
use App\Services\UserService;
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
            UserService::checkUserRole();
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

            self::makeFlashMessage("success", "L'utilisateur a bien été enregistré");

            $this->twigEnvironment->addGlobal("userObject", UserService::getOneUserById($lastRegisteredUserId));

            AdminRouterController::redirectToUsersPage();

			return true;

		} catch (Exception $exception) {
            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {

                $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig');

            } else {

                RouterController::redirectToHomepage();
            }

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
    public function updatedUser (): bool
    {
        try {
            UserService::checkUserRole();
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

            $userModel = UserService::getOneUserByEmail($lastEmail);

            $userModel->setFirstname($firstname)->setLastname($lastname)->setEmail($email)->setPhoneNumber($phone_number)->setSocialLinkedin($linkedin)->setSocialTwitter($twitter)->setRoleId($selectedRole->getId());
            $userModel->updateUser();

            self::makeFlashMessage("success", "L'utilisateur ${email} a été mis à jour");

            $this->twigEnvironment->addGlobal("userObject", UserService::getOneUserByEmail($userModel->getEmail()));

            AdminRouterController::redirectToUsersPage();

        return true;

        } catch (Exception $exception) {

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig');

            } else {

                RouterController::redirectToHomepage();
            }

            return false;
        }
    }

	/**
	 * @return bool
     * @throws Exception
	 */
	public function deleteUser():bool
	{
		try {
            UserService::checkUserRole();
			$userEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

			if(!AuthService::checkCSRFTokenSubmittedCorrespondWithSession() && !UserService::checkUserAuthenticationByEmail($userEmail)){
				self::displayUsersPage();
			}

            $userObject = UserService::getOneUserByEmail($userEmail);

            CommentModel::deleteUserComments($userObject->getId());
            PostService::deleteUserPosts($userObject->getId());
			UserModel::deleteUser($userEmail);

            self::makeFlashMessage("success", "L'utilisateur ${userEmail} a été supprimé");
			AdminRouterController::redirectToUsersPage();

            return true;
		} catch(Exception $exception){

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {

                AdminRouterController::redirectToUsersPage();

            } else {

                RouterController::redirectToHomepage();
            }

			return false;
		}
	}

	/**
	 * @return bool
	 * @throws Exception
	 */
	public function displayUsersPage(): bool
	{
		try {
            UserService::checkUserRole();
			if(!UserService::checkIfUserIsAlreadyLoginInSession())
			{
				$this->twigEnvironment->display('/loginMain/sign-in.html.twig');
			}

            $this->twigEnvironment->display('/adminMain/users-page.html.twig', ["usersArrayObject" => UserService::getAllUsers()]);

            return true;

		} catch (Exception $exception){

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display("/adminMain/blog-list.html.twig");
            } else {

                $this->twigEnvironment->display("/landing-blog.html.twig");
            }
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
            UserService::checkUserRole();
            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig');
			return true;

		} catch (Exception $exception){

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/loginMain/sign-in.html.twig');

            } else {

                $this->twigEnvironment->display("/landing-blog.html.twig");

            }

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
            UserService::checkUserRole();
			if(!AuthService::checkCSRFTokenSubmittedCorrespondWithSession() && !UserService::checkIfUserIsAlreadyLoginInSession())
			{
				self::displayUsersPage();
			}

			$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
			$updatedUser = UserService::getOneUserByEmail($email);
            $this->twigEnvironment->addGlobal("userObject", $updatedUser);

            $this->twigEnvironment->display('/adminMain/form-add-or-update-user.html.twig');

			return true;
		} catch (Exception $exception){

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                AdminRouterController::redirectToUsersPage();
            } else {

                RouterController::redirectToHomepage();
            }
			return false;
		}
	}
}