<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\CommentModel;
use App\Models\PostModel;
use Exception;
use PDO;

class PostService
{
    public const HOMEPAGE_POSTS_LIMIT = 3;
    protected const POST_KEYS = ["content" => "Contenu", "heading" => "Chapô", "title" => "Titre"];

	/**
	 * @param int $maxPerPage
	 * @return array
	 * @throws Exception
	 */
	public static function getHomePageRecentPosts(int $maxPerPage = 0): array
	{
        $select = "SELECT * ";
        $from = "FROM post ";
        $where = "WHERE published_at ";
        $isNotNull = "IS NOT NULL ";
        $orderBy = "ORDER BY created_at ";
        $asc = "ASC ";
        $limit = "";

        if(!empty($maxPerPage))
        {
            $limit = "LIMIT :limit";
        }
		$statement = PostModel::getDataBase()
			->prepare($select . $from . $where . $isNotNull . $orderBy . $asc . $limit);

        if(!empty($maxPerPage))
        {
            $statement->bindParam(
                ':limit', $maxPerPage, PDO::PARAM_INT
            );
        }

		$statement->execute();

        return  $statement->fetchAll(PDO::FETCH_CLASS,PostModel::class);
	}

	/**
	 * Method who return all posts without condition
	 * @return array
	 */
	public static function getAllValidatedPosts(): array
	{
		$statement = PostModel::getDataBase()
        ->prepare('SELECT *
					 FROM post
					 WHERE ((published_at IS NOT NULL) AND (updated_at IS NOT NULL) AND (DATEDIFF(published_at, updated_at) >= DATEDIFF(updated_at, published_at)) OR (updated_at IS NULL) AND (published_at IS NOT NULL))
					 ORDER BY published_at ASC');

        $statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS, PostModel::class);
	}

	/**
	 * @param int|string $postId
	 * @return object
	 * @throws Exception
	 */
	public static function getPostById(int|string $postId, int $postUserId): object
	{
		$statement = PostModel::getDataBase()
			->prepare('SELECT *
					   FROM post
					   WHERE (post.id = :postId) AND (post.user_id = :postUserId)');

		$statement->execute([
				':postId' => $postId,
            'postUserId' => $postUserId
			]);

		$status = $statement->fetchObject(PostModel::class);

		if(empty($status)){
			throw new Exception("L'article n'a pas été trouvé ou n'existe pas");
		}

		return $status;
	}

	/**
	 * Method who return all posts who need to be validated before displaying
	 * @return array
	 */
	public static function getAllNotValidatedPosts(): array
	{
		$statement = PostModel::getDataBase()
			->prepare('SELECT *
					 FROM post
					 WHERE ((published_at IS NULL) OR (published_at IS NOT NULL) AND (created_at IS NOT NULL) AND (DATEDIFF(updated_at, published_at) >= DATEDIFF(published_at, updated_at)))');
        $statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS, PostModel::class);
	}

    /**
     * @param int|string $postId
     * @return bool|object
     */
    public static function getPostByAdmin(int|string $postId): bool|object
    {

        $statement = PostModel::getDataBase()
            ->prepare("SELECT * FROM post WHERE post.id = :postId");

        $statement->execute([":postId" => $postId]);

        $status = $statement->fetchObject(PostModel::class);

        return $status;
    }

    /**
     * @param int $postId
     * @return bool
     * @throws Exception
     */
    public static function approvedPost(int $postId): bool
    {
        $statement = PostModel::getDataBase()
            ->prepare("UPDATE post SET post.published_at = :published_at WHERE (post.id = :postId)");

        $status =  $statement->execute([":postId" => $postId,
            ":published_at" => CommentModel::getCurrentDateTime(),
            ]);

        if (empty($status)){
            throw new Exception("Erreur lors de la validation de l'article, veuillez réessayer");
        }
        return true;
    }

    /**
     * @param int $postId
     * @return bool
     * @throws Exception
     */
    public static function rejectedPost(int $postId): bool
    {
        $statement = CommentModel::getDataBase()
            ->prepare("DELETE FROM comment WHERE (comment.post_id = :postId)");

        $status =  $statement->execute([":postId" => $postId
        ]);

        $statement = PostModel::getDataBase()
            ->prepare("DELETE FROM post WHERE (post.id = :postId)");

        $status =  $statement->execute([":postId" => $postId
        ]);

        if (empty($status)){
            throw new Exception("Erreur lors de la suppression de l'article, veuillez réessayer");
        }
        return true;
    }

    /**
     * @param int|string $userId
     * @return bool|object
     */
    public static function deleteUserPosts(int|string $userId): bool|object
    {
        $statement = PostModel::getDataBase()
            ->prepare("DELETE FROM post WHERE post.user_id = :userId");

        $status = $statement->execute([":userId" => $userId]);

        return $status;
    }

    /**
     * @return bool
     * @throws Exception
     */
    public static function checkInputs(): bool
    {
        $emptyInputs = "";
        foreach(self::POST_KEYS as $key => $value){
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