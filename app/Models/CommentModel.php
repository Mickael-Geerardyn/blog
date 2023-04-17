<?php

namespace App\Models;

use DateTime;
use DateTimeZone;
use Exception;
use mysql_xdevapi\Executable;

class CommentModel extends CoreModel
{
    const STATUS_PENDING = 1;
    const STATUS_PUBLISHED = 2;

    private string $title;
    private string $content;
    private string $status;
    private int $post_id;
    private int $user_id;
    private string $deletedAt;

    /**
     * @return bool
     * @throws Exception
     */
    public function createComment(): bool
    {
        $statement = parent::getDataBase();

        $statement = $statement->prepare('INSERT INTO comment (title, content, status, post_id, user_id)
					   VALUES (:title, :content, :status_pending, :post_id, :user_id)');

        $status = $statement->execute([
            ':title' => $this->title,
            ':content' => $this->content,
            ':status_pending' => $this->status,
            ':post_id' => $this->post_id,
            ':user_id' => $this->user_id,
        ]);

        if(!$status) {
            throw new Exception("Une erreur est intervenue lors de l'enregistrement du commentaire");
        }

        return $status;
    }

    /**
     * @param string $commentTitle
     * @return bool
     * @throws Exception
     */
    public function deleteComment(string $commentTitle): bool
    {
        $statement = parent::getDataBase()
            ->prepare("DELETE FROM comment WHERE title = :title");

        $status = $statement->execute([
            ":title" => $commentTitle
        ]);

        if(!$status){
            throw new Exception("La suppression du commentaire à échoué");
        }

        return true;
    }

    /**
     * @param int|string $userId
     * @return bool
     * @throws Exception
     */
    public static function deleteUserComments(int|string $userId): bool
    {
        $statement = parent::getDataBase()
            ->prepare("DELETE FROM comment WHERE user_id = :userId");

        $status = $statement->execute([
            ":userId" => $userId
        ]);

        if(!$status){
            throw new Exception("La suppression du commentaire à échoué");
        }

        return true;
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

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string|int $status
     */
    public function setStatus(string|int $status = self::STATUS_PENDING): void
    {
        $this->status = $status;
    }

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->post_id;
    }

    /**
     * @param int $post_id
     */
    public function setPostId(int $post_id): void
    {
        $this->post_id = $post_id;
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
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return string
     */
    public function getDeletedAt(): string
    {
        return $this->deletedAt;
    }

    /**
     * @param string $deletedAt
     */
    public function setDeletedAt(string $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

}