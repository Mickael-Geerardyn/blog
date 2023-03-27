<?php
declare(strict_types=1);

namespace App\Services;

use App\Models\CommentModel;
use App\Models\PostModel;
use Exception;
use PDO;

class PostService
{
    const POSTS_PER_PAGE = 4;
    const COMMENT_STATUS_PUBLISHED = CommentModel::STATUS_PUBLISHED;
    const COMMENT_STATUS_PENDING = CommentModel::STATUS_PENDING;
	/**
	 * Method which return a number of recent posts with optionally parameter
	 * @param int $limit
	 * @return array
	 * @throws Exception
	 */
	public static function getHomePageRecentPosts(int $limit = self::POSTS_PER_PAGE): array
	{
		$statement = PostModel::getDataBase()
			->prepare('SELECT id, title, heading, content, user_id, is_published, created_at, updated_at
					   FROM `post`
					   ORDER BY created_at ASC 
					   LIMIT :limit');

		$statement->bindParam(
				':limit', $limit, PDO::PARAM_INT
			);
		$statement->execute();

		$status = $statement->fetchAll(PDO::FETCH_CLASS,PostModel::class);

		if(empty($status))
		{
			throw new Exception("Une erreur est intervenue lors de la recherche des ${limit} derniers posts");
		}
		return $status;
	}

    /**
     * @param int $commentStatusPublished
     * @return array
     * @throws Exception
     */
	public static function getPostWithItsComments(int $commentStatusPublished = self::COMMENT_STATUS_PUBLISHED): array
	{
		$statement = PostModel::getDataBase()
			->query("SELECT post.id, post.title, heading, post.content, post.user_id, is_published, post.created_at, post.updated_at, comment.post_id ,comment.title, comment.content, status, comment.created_at, comment.updated_at
                     FROM post
                     INNER JOIN comment
                     ON post.id = comment.post_id
                     WHERE comment.status = $commentStatusPublished
                     ORDER BY post.created_at DESC");

		$statement->execute();

		$status = $statement->fetchAll();

		if(empty($status)){
			$statement->rollBack();
			throw new Exception("Erreur lors de la recherche de l'ensemble des articles");
		}
		return $status;
	}

	/**
	 * Method who return all posts without condition
	 * @return array
	 */
	public static function getAllValidatedPosts(): array
	{
		$statement = PostModel::getDataBase()
        ->prepare('SELECT id, title, heading, content, user_id, created_at, updated_at
					 FROM post
					 WHERE is_published IS NOT NULL');

        $statement->execute();

        $result =  $statement->fetchAll(PDO::FETCH_CLASS, PostModel::class);

        var_dump($result); die;
		return $result;
	}

	/**
	 * Method who return all posts of the current user
	 * @param int $userId
	 * @return object
	 */
	public static function getAllPostsOfTheCurrentUser(int $userId): object
	{
		$statement = PostModel::getDataBase()
			->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
			->query('SELECT id, title, heading, content, user_id, is_published, created_at, updated_at
					   FROM post
					   WHERE (user_id = :userId AND is_published IS NOT NULL)')
			->execute([
				':userId' => $userId,
			]);

		return $statement->fetchAll();
	}

	/**
	 * Method who return one post by its unique identifier
	 * @param string $postTitle
	 * @return object
	 * @throws Exception
	 */
	public static function getOnePostByTitle(string $postTitle): object
	{
		$statement = PostModel::getDataBase()
			->prepare('SELECT *
					   FROM post
					   WHERE title = :postTitle');

		$statement->execute([
				':postTitle' => $postTitle,
			]);

			$status = $statement->fetchObject(PostModel::class);

			if(empty($status)){
				$statement->rollBack();
				throw new Exception("Une erreur est intervenue lors de la recherche de l'article");
			}

		return $status;
	}

	/**
	 * @param int $postId
	 * @return object
	 * @throws Exception
	 */
	public static function getPostById(int $postId): object
	{
		$statement = PostModel::getDataBase()
			->prepare('SELECT post.id AS id_post, user.id AS id_user, title, heading, content, user_id, is_published, post.created_at, post.updated_at, user.firstname, user.lastname, user.social_linkedin, user.social_twitter, user.phone_number, user.email
					   FROM post
					   INNER JOIN user
					   ON user_id = user.id
					   WHERE post.id = :postId');

		$statement->execute([
				':postId' => $postId
			]);

		$status = $statement->fetchObject(PostModel::class);

		if(empty($status)){
			$statement->rollBack();
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
			->prepare('SELECT id, title, heading, content, user_id, is_published, created_at, updated_at
					   FROM post
					   WHERE is_published IS NULL');
        $statement->execute();

        $result = $statement->fetchAll(PDO::FETCH_CLASS, PostModel::class);

		return $result;
	}
}