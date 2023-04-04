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
     * @param int $commentId
     * @return bool
     * @throws Exception
     */
    public static function approvedComment(int $commentId): bool
    {
        $statement = CommentModel::getDataBase()
            ->prepare("UPDATE comment SET comment.status = :status, comment.updated_at = :updated_at WHERE (comment.id = :commentId)");

        $status =  $statement->execute([":status" => CommentModel::STATUS_PUBLISHED,
            ":updated_at" => CommentModel::getCurrentDateTime(),
            ":commentId" => $commentId]);

        if (empty($status)){
            throw new Exception("Erreur lors de la mise à jour du commentaire, veuillez réessayer");
        }
        return true;
    }

    /**
     * @param int $commentId
     * @return bool
     * @throws Exception
     */
    public static function rejectedComment(int $commentId): bool
    {
        $statement = CommentModel::getDataBase()
            ->prepare("DELETE FROM comment
					   WHERE comment.id = :commentId");

        $status = $statement->execute([":commentId" => $commentId]);

        if (empty($status)) {
            throw new Exception("La suppression du commentaire a échoué");
        }
        return true;
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