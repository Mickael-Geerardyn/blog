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

    public function createComment()
    {
        $pdo = parent::getDataBase();

        $statement = $pdo->prepare('INSERT INTO comment (title, content, status, post_id, user_id)
					   VALUES (:title, :content, :statut, :post_id, :user_id)');

        $status = $statement->execute([
            ':title' => $this->title,
            ':content' => $this->content,
            ':statut' => $this->status,
            ':post_id' => $this->post_id,
            ':user_id' => $this->user_id,
        ]);
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
     * @param string $status
     */
    public function setStatus(string $status = self::STATUS_PENDING): void
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