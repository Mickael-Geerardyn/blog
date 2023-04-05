<?php

declare(strict_types=1);

namespace App\Models;

use Exception;
use PDO;

class RoleModel extends CoreModel
{
    private string $title;

    /**
     * @return object
     * @PDO
     * @throws Exception
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
			throw new Exception("Une erreur est intervenue lors de l'extraction des roles");
		}

		return $result;
	}

	/**
	 * @param string $roleTitle
	 * @return object|bool
	 * @throws Exception
	 */
	public function getOneRoleByTitle(string $roleTitle): object|bool
	{
			$statement = RoleModel::getDataBase()->prepare('SELECT id, title, created_at, updated_at
							FROM role
							WHERE title = :title');


			$statement->execute([':title' => $roleTitle]);

			$result = $statement->fetchObject(self::class);

			if (empty($result)) {
				$statement->rollBack();
				throw new Exception("Une erreur est intervenue lors de la recherche du role");
			}

			return $result;

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