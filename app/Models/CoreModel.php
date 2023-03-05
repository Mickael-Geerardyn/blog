<?php

declare(strict_types=1);

namespace App\Models;

use App\Database\DatabaseConnexion;
use Exception;
use DateTime;
use DateTimeZone;

/**
 * Properties which are used by all models
 */
abstract class CoreModel
{
    /**
     * @var int
     */
    protected int $id;

    /**
     * @var string
     */
    protected string $created_at;

    /**
     * @var string|null
     */
    protected string|null $updated_at;

    /**
     * @var object
     */
    private static object $dataBase;

	/**
	 * @return string
	 */
	public static function getCurrentDateTime(): string
	{
		try {
			$currentDateTime = new DateTime('now', new DateTimeZone('America/Toronto'));
			return $currentDateTime->format('Y-m-d H:i');
		}
		catch(Exception $exception) {

			return $exception->getMessage();
		}
	}

    /**
     * @return object
     */
    public static function getDataBase(): object
    {
		if(empty(self::$dataBase) && !isset(self::$dataBase))
		{
			self::$dataBase = DatabaseConnexion::getPDOInstance();
		}
        return self::$dataBase;
    }

	/**
	 * @return int
	 */
	public function getId(): int
	{
		return $this->id;
	}

	/**
	 * @return string
	 */
	public function getCreatedAt(): string
	{
		return $this->created_at;
	}

    /**
     * @return string|null
     */
    public function getUpdatedAt(): string|null
    {
        return $this->updated_at;
    }

	/**
	 * @param string $updated_at
	 */
	public function setUpdatedAt(string $updated_at): void
	{
		$this->updated_at = $updated_at;
	}

}