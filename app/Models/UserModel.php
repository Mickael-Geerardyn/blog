<?php

declare(strict_types=1);

namespace App\Models;

use Exception;
use App\Services\UserExceptions;

class UserModel extends CoreModel
{
    const ROLE_USER = 2;
    const ROLE_ADMIN = 1;
    /**
     * @var string
     */
    private string $firstname;

    /**
     * @var string
     */
    private string $lastname;

    /**
     * @var string
     */
    private string $email;

    /**
     * @var string
     */
    private string $hash_password;

    /**
     * @var string
     */
    private string $phone_number;

    /**
     * @var string
     */
    private string $social_linkedin;

    /**
     * @var string
     */
    private string $social_twitter;

    /**
     * @var int
     */
    private int $role_id;

	/**
	 * Create user data and throw exception if an error occurs ($statement->execute return false if an error occurs)
	 * @return bool|string
	 * @throws UserExceptions
	 */
	public function createUser(): bool|string
	{
		$pdo = parent::getDataBase();

		$statement = $pdo->prepare('INSERT INTO user (firstname, lastname, email, hash_password, phone_number, social_linkedin, social_twitter, role_id)
					   VALUES (:firstname, :lastname, :email, :hash_password, :phone_number, :social_linkedin, :social_twitter, :role_id)');

		$status = $statement->execute([
			':firstname' => $this->firstname,
			':lastname' => $this->lastname,
			':email' => $this->email,
			':hash_password' => $this->hash_password,
			':phone_number' => $this->phone_number,
			':social_linkedin' => $this->social_linkedin,
			':social_twitter' => $this->social_twitter,
			':role_id' => $this->role_id,
		]);

		if (!$status)
		{
			$statement->rollback();
			throw new UserExceptions("Une erreur est intervenue durant l'enregistrement de l'utilisateur");
		}


		return $pdo->lastInsertId();
	}

	/**
	 * Update user data and throw exception if an error occurs ($statement->execute return false if an error occurs)
	 * @return bool
	 * @throws Exception
	 */
	public function updateUser(): bool
	{
		$statement = parent::getDataBase()
			->prepare('UPDATE user 
					   SET firstname = :firstname,
					       lastname = :lastname,
					       email = :email,
					       phone_number = :phone_number,
					       social_linkedin = :social_linkedin,
					       social_twitter = :social_twitter,
					       role_id = :role_id');

		$status = $statement->execute([
			':firstname' => $this->firstname,
			':lastname' => $this->lastname,
			':email' => $this->email,
			':phone_number' => $this->phone_number,
			':social_linkedin' => $this->social_linkedin,
			':social_twitter' => $this->social_twitter,
			':role_id' => $this->role_id
		]);

		if (empty($status))
		{
			throw new Exception("Une erreur est intervenue durant la mise à jour de l'utilisateur");
		}

		return true;
	}

	/**
	 * Delete user data and throw exception if an error occurs ($statement->execute return false if an error occurs)
	 * @param string $userEmail
	 * @return bool
	 * @throws Exception
	 */
	public static function deleteUser(string $userEmail): bool
	{
		$statement = parent::getDataBase()
			->prepare('DELETE FROM user
					   WHERE email = :userEmail');

		$status = $statement->execute([
			':userEmail' => $userEmail,
		]);

		if (!$status)
		{
			throw new Exception("Une erreur est survenue lors de la suppression de l'utilisateur");
		}

		return true;
	}

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
	 * @return object
     */
    public function setFirstname(string $firstname): object
    {
        $this->firstname = $firstname;

		return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;

    }

    /**
     * @param string $lastname
	 * @return object
     */
    public function setLastname(string $lastname): object
    {
        $this->lastname = $lastname;

		return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
	 * @return object
     */
    public function setEmail(string $email): object
    {
        $this->email = $email;

		return $this;
    }

    /**
     * @return string
     */
    public function getHashPassword(): string
    {
        return $this->hash_password;
    }

    /**
     * @param string $hash_password
	 * @return object
     */
    public function setHashPassword(string $hash_password): object
    {
        $this->hash_password = password_hash($hash_password, PASSWORD_DEFAULT);

		return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @param string $phone_number
	 * @return object
     */
    public function setPhoneNumber(string $phone_number): object
    {
        $this->phone_number = $phone_number;

		return $this;
    }

    /**
     * @return string
     */
    public function getSocialLinkedin(): string
    {
        return $this->social_linkedin;
    }

    /**
     * @param string $social_linkedin
	 * @return object
     */
    public function setSocialLinkedin(string $social_linkedin): object
    {
        $this->social_linkedin = $social_linkedin;

		return $this;
    }

    /**
     * @return string
     */
    public function getSocialTwitter(): string
    {
        return $this->social_twitter;
    }

    /**
     * @param string $social_twitter
	 * @return object
     */
    public function setSocialTwitter(string $social_twitter): object
    {
        $this->social_twitter = $social_twitter;

		return $this;
    }

    /**
     * @return int
     */
    public function getRoleId(): int
    {
        return $this->role_id;
    }

    /**
     * @param int $role_id
	 * @return object
     */
    public function setRoleId(int $role_id = self::ROLE_USER): object
    {
        $this->role_id = $role_id;

		return $this;
    }
}