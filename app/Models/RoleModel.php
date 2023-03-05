<?php

declare(strict_types=1);

namespace App\Models;

use App\Services\RoleExceptions;
use Exception;
use PDO;
use PDOException;

class RoleModel extends CoreModel
{
    private string $title;

	/**
	 * @return object
	 * @PDO
	 */
	public function getAllRoles(): object
	{
		$statement = RoleModel::getDataBase();

		$statement->query('SELECT id, title, created_at, updated_at
							FROM role')
					->execute();

		$result = $statement->fetchAll(PDO::FETCH_CLASS, self::class);

		if(empty($result))
		{
			throw new RoleExceptions("Une erreur est intervenue lors de l'extraction des roles");
		}

		return $result;
	}

	/**
	 * @param string $roleTitle
	 * @return object|bool
	 * @throws RoleExceptions
	 */
	public function getOneRoleByTitle(string $roleTitle): object|bool
	{
		try {
			$statement = RoleModel::getDataBase()->prepare('SELECT id, title, created_at, updated_at
							FROM role
							WHERE title = :title');


			$statement->execute([':title' => $roleTitle]);

			$result = $statement->fetchObject(self::class);

			if (empty($result)) {
				$statement->rollBack();
				throw new RoleExceptions("Une erreur est intervenue lors de la recherche du role");
			}

			return $result;

		} catch (PDOException $exception) {
			echo $exception->getMessage();
		}

	}

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
}