<?php
declare(strict_types=1);

namespace App\Models;

use DateTime;
use Exception;
use PDO;

class PostModel extends CoreModel
{
	/**
	 * @var string
	 */
    private string $title;

	/**
	 * @var string
	 */
    private string $heading;

	/**
	 * @var string
	 */
    private string $content;

	/**
	 * @var int
	 */
    private int $user_id;

	/**
	 * @var string|null
	 */
    private string|null $published_at;

	/**
	 * $statement->execute return false if it has a problem with post creation in database
	 * So if the status is not true, throw new exception with message
	 * @return bool|string
	 * @throws Exception
	 */
	public function createOnePost(): bool|string
	{
			$pdo = parent::getDataBase();

			$statement = $pdo->prepare('INSERT INTO post (title, heading, content, user_id)
							VALUES (:title, :heading, :content, :user_id)');

			$status = $statement->execute(array(
				':title' => $this->title,
				':heading' => $this->heading,
				':content' => $this->content,
				':user_id' => $this->user_id,
			));

			if (empty($status)) {
				throw new Exception('Une erreur dans la création du post est intervenue');
			}

            return $pdo->lastInsertId();
	}

    /**
     *
     * $statement->execute return false if it has a problem with post update in database
     * So if the status is not true, throw new exception with message
     * @return bool
     * @throws Exception
     */
	public function updateSelectedPost(): bool
	{
			$statement = parent::getDataBase()
				->prepare('UPDATE post
						   SET title = :title,
					           heading = :heading,
					           content = :content,
					           updated_at = :updated_at
					           WHERE post.id = :postId');

			$status = $statement->execute(array(
                'postId' => $this->id,
				':title' => $this->title,
				':heading' => $this->heading,
				':content' => $this->content,
				':updated_at' => $this->updated_at,
			));

			if (empty($status)){
				throw new Exception('Une erreur dans la mise à jour du post est intervenue');
			}

            return true;
	}

	/**
	 * $statement->execute return false if it has a problem with post update in database
	 * So if the status is not true, throw new exception with message
	 * @return void
	 * @throws Exception
	 */
	public function deleteSelectedPost (): void
	{
		$statement = parent::getDataBase()
			->prepare('DELETE FROM post WHERE post.id = :postId');

		$status = $statement->execute([
			':postId' => $this->id,
		]);

		if (empty($status)) {
			throw new Exception('Un problème est survenue lors de la tentative de suppression du post');
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
	 * @return object
     */
    public function setTitle(string $title): object
    {
        $this->title = $title;

		return $this;
    }

    /**
     * @return string
     */
    public function getHeading(): string
    {
        return $this->heading;
    }

    /**
     * @param string $heading
	 * @return object
     */
    public function setHeading(string $heading): object
    {
        $this->heading = $heading;

		return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
	 * @return object
     */
    public function setContent(string $content): object
    {
        $this->content = $content;

		return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
	 * @return object
     */
    public function setUserId(int $user_id): object
    {
        $this->user_id = $user_id;

		return $this;
    }

    /**
     * @return string|null
     */
    public function getPublishedAt(): string|null
    {
        return (string) $this->published_at;
    }

    /**
     * @param string|null $published_at
	 * @return object
     */
    public function setPublishedAt(string|null $published_at): object
    {
        $this->published_at = $published_at;

		return $this;
    }

}