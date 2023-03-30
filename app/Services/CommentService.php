<?php

namespace App\Services;

use App\Models\CommentModel;
use App\Models\UserModel;
use DateTime;
use DateTimeZone;
use Exception;
use PDO;

class CommentService
{
    /**
     * @return array
     * @throws Exception
     */
    public static function getPendingComments(): array
    {
            $statement = CommentModel::getDataBase()->prepare("SELECT * FROM comment WHERE (comment.status = :pendingStatus) ORDER BY comment.created_at DESC");
            $statement->execute([":pendingStatus" => CommentModel::STATUS_PENDING]);
            $status = $statement->fetchAll(PDO::FETCH_CLASS, CommentModel::class);

            return $status;
    }

    /**
     * @param int $postId
     * @return array
     * @throws Exception
     */
    public static function getPostComments(int $postId): array
    {
        $statement = CommentModel::getDataBase()->prepare("SELECT comment.* FROM comment INNER JOIN post ON comment.post_id = post.id WHERE (post.id = :postId AND comment.status = :commentStatus) ORDER BY comment.created_at ASC");
        $statement->execute([
            ':postId' => $postId,
            ':commentStatus' => CommentModel::STATUS_PUBLISHED,
        ]);

        $status = $statement->fetchAll(PDO::FETCH_CLASS, CommentModel::class);

        if(empty($status) && !isset($status))
        {
            throw new Exception("Erreur lors de la recherche de l'ensemble des commentaires validés");
        }
        return $status;
    }

    /**
     * @param string $commentTitle
     * @return bool
     * @throws Exception
     */
    public static function approvedComment(string $commentTitle): bool
    {
        $statement = CommentModel::getDataBase()
            ->prepare("UPDATE comment SET comment.status = :status, comment.updated_at = :updated_at WHERE (comment.title = :title)");

        $status =  $statement->execute([":status" => CommentModel::STATUS_PUBLISHED,
            ":updated_at" => CommentModel::getCurrentDateTime(),
            ":title" => $commentTitle]);

        if (empty($status)){
            throw new Exception("Erreur lors de la mise à jour du commentaire ${commentTitle}, veuillez réessayer");
        }
        return true;
    }

    /**
     * @param string $commentTitle
     * @return bool
     * @throws Exception
     */
    public static function rejectedComment(string $commentTitle): bool
    {
        $statement = CommentModel::getDataBase()
            ->prepare("DELETE FROM comment
					   WHERE comment.title = :commentTitle");

        $status = $statement->execute([":commentTitle" => $commentTitle]);

        if (empty($status)) {
            throw new Exception("La suppression du commentaire ${commentTitle} a échoué");
        }
        return true;
    }

    /**
     * @param string $commentTitle
     * @return object
     * @throws Exception
     */
    public static function getPublishedComment(string $commentTitle): object
    {
        $statement = CommentModel::getDataBase()->prepare("SELECT * FROM comment WHERE comment.title = :commentTitle");
        $statement->execute([
            ':commentTitle' => $commentTitle,
        ]);

        $status = $statement->fetchObject(CommentModel::class);

        if(empty($status)){
            throw new Exception("Erreur lors de la recherche du commentaire");
        }
        return $status;
    }

    /**
     * @param int $commentUserId
     * @return object
     * @throws Exception
     */
    public static function getAuthorComments(int $commentUserId): object
    {
        $statement = CommentModel::getDataBase()->prepare("SELECT user.firstname, user.lastname FROM user INNER JOIN comment ON comment.user_id = user.id WHERE (comment.user_id = :commentUserId)");
        $statement->execute([
            ":commentUserId" => $commentUserId,
        ]);

        $status = $statement->fetchObject(UserModel::class);

        return $status;
    }

    /**
     * @param int $postId
     * @return bool|array
     */
    public static function getNumberOfComments(int $postId): bool|array
    {
        $statement = CommentModel::getDataBase()
        ->prepare("SELECT COUNT(comment.id) AS total FROM comment INNER JOIN post ON (post.id = comment.post_id) WHERE (comment.post_id = :postId)");

        $statement->execute([
            "postId" => $postId
        ]);

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}