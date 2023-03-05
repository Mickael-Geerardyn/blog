<?php
declare(strict_types=1);
namespace App\Services;

use App\Controllers\Admin\AdminUserController;
use App\Controllers\UserController;
use App\Models\UserModel;
use Exception;
use PDO;

class UserService
{
	/**
	 * Return an array which contains user objects
	 * @return array|bool
	 */
	public static function getAllUsers(): array|bool
	{
		try{
		$statement = UserModel::getDataBase()->query('SELECT id, firstname, lastname, email, phone_number, social_linkedin, social_twitter, role_id, created_at, updated_at
		 			   FROM user');

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS, UserModel::class);

		}catch (Exception $exception) {
			echo $exception->getMessage();
			return false;
		}
	}

	/**
	 * Get the PDOStatement object stored in the static attribute in the parent class (CoreModel)
	 * Static attribute allows to block possibilities of attributes modifications by children but can be called by them to use it's return
	 *
	 * @param string $userEmail
	 * @return object|bool
	 * @throws Exception
	 */
	public static function getOwnerOfTheWebsite(string $userEmail): object|bool
	{
		$statement = UserModel::getDataBase()
			->prepare('SELECT firstname, lastname, email, phone_number, social_linkedin, social_twitter, role_id, post.created_at, post.updated_at, post.user_id, post.id
					 FROM user
					 INNER JOIN post
					 ON user.id = post.user_id
					 WHERE email = :userEmail');

		$statement->execute([':userEmail' => $userEmail]);

		$status = $statement->fetchObject(UserModel::class);

		if(empty($status))
		{
			$statement->rollBack();
			throw new Exception("L'utilisateur ${userEmail} n'a pas été trouvé ou n'existe pas");
		}

		return $status;
	}

	/**
	 * Get the PDOStatement object stored in the static attribute in the parent class (CoreModel)
	 * Static attribute allows to block possibilities of attributes modifications by children but can be called by them to use it's return
	 *
	 * @param int $postForeignUserId
	 * @return object|bool
	 * @throws Exception
	 */
	public static function getUserOfCurrentPost(int $postForeignUserId): object|bool
	{
		$statement = UserModel::getDataBase()
			->prepare('SELECT firstname, lastname, role_id, post.created_at, post.updated_at, post.user_id, post.id
					 FROM user
					 INNER JOIN post
					 ON user.id = post.user_id
					 WHERE post.user_id = :userId');

		$statement->execute([':userId' => $postForeignUserId]);

		$status = $statement->fetchObject(UserModel::class);

		if(empty($status))
		{
			$statement->rollBack();
			throw new Exception("L'utilisateur n'a pas été trouvé ou n'existe pas");
		}

		return $status;
	}

	/**
	 * Get the PDOStatement object stored in the static attribute in the parent class (CoreModel)
	 * Static attribute allows to block possibilities of attributes modifications by children but can be called by them to use it's return
	 *
	 * @param string $userEmail
	 * @return object|bool
	 * @throws Exception
	 */
	public static function getOneUserByEmail(string $userEmail): object|bool
	{
		$statement = UserModel::getDataBase()->prepare('SELECT id, firstname, lastname, email, phone_number, social_linkedin, social_twitter, role_id, created_at, updated_at
					 FROM user
					 WHERE email = :userEmail');

		$statement->execute([':userEmail' => $userEmail]);

		$status = $statement->fetchObject(UserModel::class);

		if(empty($status))
		{
			throw new Exception("L'utilisateur ${userEmail} n'a pas été trouvé ou n'existe pas");
		}

		return $status;
	}

	/**
	 * @param string $userId
	 * @return object
	 * @throws Exception
	 */
	public static function getOneUserById(string $userId):object
	{
		$statement = UserModel::getDataBase()->prepare('SELECT id, firstname, lastname, email, phone_number, social_linkedin, social_twitter, role_id, created_at, updated_at
					 FROM user
					 WHERE id = :userId');

		$statement->execute([':userId' => $userId]);

		$status = $statement->fetchObject(UserModel::class);

		if(empty($status))
		{
			throw new Exception("L'utilisateur n'a pas été trouvé ou n'existe pas");
		}

		return $status;
	}

	/**
	 * @param string $email
	 * @return bool
	 * @throws Exception
	 */
	public static function checkIfUserEmailAlreadyExist(string $email): bool
	{
		$statement = UserModel::getDataBase()->prepare("SELECT id, firstname, lastname, email, phone_number, social_linkedin, social_twitter, role_id, created_at, updated_at
					 FROM user
					 WHERE EXISTS (SELECT email FROM user WHERE user.email = :email)");

		$statement->execute([':email' => $email]);

		$userModel = $statement->fetch();

		if (!empty($userModel)){
			unset($userModel);
			throw new Exception("L'adresse courriel: ${email} est déjà utilisée");
		}
		return false;
	}

	/**
	 * @return bool
	 */
	public static function checkIfUserIsAlreadyLoginInSession(): bool
	{
			return (!empty($_SESSION['isConnected']) && !empty($_SESSION['CSRFToken']) && !empty($_SESSION['userObject']));
	}

	/**
	 * @param string $email
	 * @return object|bool
	 * @throws UserExceptions
	 */
	public static function checkUserAuthenticationByEmail(string $email): object|bool
	{
		$statement = UserModel::getDataBase()->prepare('SELECT id, firstname, lastname, email, hash_password, phone_number, social_linkedin, social_twitter, role_id, created_at, updated_at
					   FROM user
					   WHERE email = :email');

		$statement->execute([':email' => $email,]);

		$userObjectOrFalseStatus = $statement->fetchObject(UserModel::class);

		if (empty($userObjectOrFalseStatus)) {

			throw new UserExceptions("Une erreur est survenue lors de la recherche de l'utilisateur");
		}

		return $userObjectOrFalseStatus;
	}

	/**
	 * @param string $userPassword
	 * @param string $userHashPassword
	 * @return bool
	 * @throws UserExceptions
	 */
	public static function checkPasswordUserAuthentication(string $userPassword, string $userHashPassword): bool
	{
		if (!password_verify($userPassword, $userHashPassword))
		{
			throw new UserExceptions('Problème lors de la vérification du mot de passe');
		}

		return true;
	}

	/**
	 * @param object $userObject
	 * @return bool
	 * @throws Exception
	 */
	public static function checkUserRoleToRedirectAfterSignIn(object $userObject): bool
	{
		if(empty($userObject)){
			throw new Exception("Une erreur est intervenue, veuillez réessayer de vous connecter");
		}

		if($userObject->getRoleId() === 1){
			$adminUserController = new AdminUserController();
			$adminUserController::displayCalledPage('landing-dashboard', $userObject);
			return true;
		} elseif($userObject->getRoleId() === 2) {
			$userController = new UserController();
			$userController::pageToDisplay('landing-portfolio');
			return true;
		}
		return false;
	}

	/**
	 * @return bool
	 * @throws Exception
	 */
	public static function userLogin(): bool
	{
		$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$signInPassword = $_POST['password'];


		// Filter_input return null if 'email' is not defined or false if the filter fails
		$userObject = UserService::checkUserAuthenticationByEmail($email);

		UserService::checkPasswordUserAuthentication($signInPassword, $userObject->getHashPassword());

		if(!UserService::checkIfUserIsAlreadyLoginInSession())
		{
			UserService::setDataInSession($userObject);
		}

		UserService::checkUserRoleToRedirectAfterSignIn($userObject);

		return true;
	}

	/**
	 * @param object $userObject
	 * @return bool
	 * @throws UserExceptions|Exception // Exception for random_bytes function because return a random/randomException if no random data source is found
	 */
	public static function setDataInSession(object $userObject): bool
	{
			$_SESSION = ['userObject' => $userObject,
						'isConnected' => true,
						'CSRFToken' => bin2hex(random_bytes(32))];// create token to store in user SESSION and send at user views to check if both are equal in certain conditions

		if(empty($_SESSION))
		{
			throw new UserExceptions("Une erreur est intervenue lors de l'insertion des données utilisateur en session");
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