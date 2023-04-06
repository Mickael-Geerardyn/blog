<?php
declare(strict_types=1);
namespace App\Services;

use App\Controllers\AuthController;
use App\Controllers\HomePageController;
use App\Models\UserModel;
use Exception;
use PDO;

class UserService
{
    protected const NEW_USER_KEYS = ["firstname" => "Prénom", "lastname" => "Nom", "email" => "Email", "password" => "Mot de passe"];
	/**
	 * Return an array which contains user objects
	 * @return array|bool
	 */
	public static function getAllUsers(): array|bool
	{
		try{
		$statement = UserModel::getDataBase()->query('SELECT id, firstname, lastname, email, phone_number, social_linkedin, social_twitter, role_id, created_at, updated_at FROM user');

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS, UserModel::class);

		}catch (Exception $exception) {
			echo $exception->getMessage();
			return false;
		}
	}

    public static function getCommentAuthorById(int $userId): object|bool
    {
        try{

            $statement = UserModel::getDataBase()->prepare("SELECT firstname, lastname FROM user INNER JOIN comment ON user.id = comment.user_id WHERE user.id = :id");
            $statement->execute([
                ':id' => $userId,
            ]);
            $status = $statement->fetchObject(UserModel::class);

            if(empty($status)){
                throw new Exception("Erreur lors de la recherche de l'auteur du commentaire");
            }

                return $status;

        }catch (Exception $exception) {
            echo $exception->getMessage();
            return false;
        }
    }

    /**
     * Get the PDOStatement object stored in the static attribute in the parent class (CoreModel)
     * Static attribute allows to block possibilities of attributes modifications by children but can be called by them to use it's return
     *
     * @param int $postUserId
     * @return object|bool
     * @throws Exception
     */
	public static function getPostAuthorById(int $postUserId): object|bool
	{
		$statement = UserModel::getDataBase()
			->prepare('SELECT firstname, lastname
					 FROM user
					 INNER JOIN post
					 ON user.id = post.user_id
					 WHERE post.user_id = :postUserId');

		$statement->execute([':postUserId' => $postUserId]);

		$status = $statement->fetchObject(UserModel::class);

		if(empty($status))
		{
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
		$statement = UserModel::getDataBase()->prepare("SELECT email
					 FROM user
					 WHERE EXISTS (SELECT email FROM user WHERE user.email = :email)");

		$statement->execute([':email' => $email]);

		$userModel = $statement->fetchObject(UserModel::class);

		if (!empty($userModel)){
			unset($userModel);
			throw new Exception("L'adresse courriel: ${email} est déjà utilisée");
		}
		return false;
	}

    /**
     * @return bool
     * @throws Exception
     */
	public static function checkIfUserIsAlreadyLoginInSession(): bool
	{
			return (!empty($_SESSION['CSRFToken']) && !empty($_SESSION['userObject']));
	}

	/**
	 * @param string $email
	 * @return object|bool
	 * @throws Exception
	 */
	public static function checkUserAuthenticationByEmail(string $email): object|bool
	{
		$statement = UserModel::getDataBase()->prepare('SELECT id, firstname, lastname, email, hash_password, phone_number, social_linkedin, social_twitter, role_id, created_at, updated_at
					   FROM user
					   WHERE email = :email');

		$statement->execute([':email' => $email,]);

		$userObject = $statement->fetchObject(UserModel::class);

		if (empty($userObject)) {

			throw new Exception("Une erreur est survenue lors de la recherche de l'utilisateur");
		}

		return $userObject;
	}

	/**
	 * @param string $userPassword
	 * @param string $userHashPassword
	 * @return bool
	 * @throws Exception
	 */
	public static function checkPasswordUserAuthentication(string $userPassword, string $userHashPassword): bool
	{
		if (!password_verify($userPassword, $userHashPassword))
		{
			throw new Exception('Problème lors de la vérification du mot de passe');
		}

		return true;
	}

    /**
     * @return bool
     * @throws Exception
     */
    public static function checkUserRole(): bool
    {
        if(!empty($_SESSION["userObject"]) && $_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
        {
            return true;

        } else {

            throw new Exception("Vous n'êtes pas autorisé à accéder à cette page");
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    public static function checkInputs(): bool
    {
        $emptyInputs = "";
        foreach(self::NEW_USER_KEYS as $key => $value){
            if(!array_key_exists($key, $_POST) || empty($_POST[$key])){
                $emptyInputs .= ", " . $value;
            }
        }

        if(!empty($emptyInputs))
        {
            throw new Exception("Les champs" . $emptyInputs . " sont requis");
        }

        return true;
    }
}