<?php
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Models\PostModel;
use App\Services\PostService;
use App\Services\UserService;
use Exception;

class AdminPostController extends AdminCoreController
{
	/**
	 * @return void
	 */
	public function displayCreatePostPage(): void
	{
		$currentUser = $_SESSION['userObject']->getEmail();
		$this->displayCalledPage('blog-post', UserService::getOneUser($currentUser));
	}

	/**
	 * @return void
     * @throws Exception
	 */
	public function displayPostsPage(): void
	{
		try{
            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['postsArray' => PostService::getAllNotValidatedPosts()]);

		}catch (Exception $exception){

            $this->twigEnvironment->display('/adminMain/landing-dashboard.html.twig', ['error' => $exception->getMessage()]);
		}

	}

	/**
     *
	 * @return bool
     * @throws Exception
	 */
	public function displayOnePostByTitle(): bool
	{
		try{
			$postTitle = htmlspecialchars($_POST['post-title']);
            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['postObject' => PostService::getOnePostByTitle($postTitle)]);
			return true;
		}catch (Exception $exception){
            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['error' => $exception->getMessage()]);

			return false;
		}

	}

	/**
	 * @return bool
	 */
	public function newPostPage(): bool
	{
		self::displayCalledPage('blog-post');
		return true;
	}

	/**
	 * Function which allows to try to create a new post and save it in
	 * database with createPost method
	 * If there is a problem with the creation, a message exception will catch.
	 * @return void
	 */
	public function createOnePost(): void
	{
		try {
			$newPost = new PostModel();

			$newPost
				->setTitle($_POST['name'])
				->setHeading($_POST['header'])
				->setContent($_POST['content'])
				->setUserId($_SESSION['userId']);

			$newPost->createOnePost();

		} catch (Exception $exception) {

			echo $exception->getMessage();
		}
	}

	/**
	 * Function which allows to update one post and save it in database
	 * If there is a problem with update, a message exception will catch
	 * @param int $postId
	 * @return void
	 */
	public function updatePost(int $postId): void
	{
		try {
			$currentPost = PostService::getOnePostById($postId);

			$currentPost
				->setHeading(htmlspecialchars($_POST['header']))
				->setContent(htmlspecialchars($_POST['content']))
				->setTitle(htmlspecialchars($_POST['title']))
				->setUpdatedAt($currentPost::getCurrentDateTime());

			$currentPost->updateSelectedPost();

		} catch (Exception $exception) {

			echo $exception->getMessage();
		}
	}

	/**
	 * Function which allows to delete definitely one post in database
	 * If there is a problem with the deletion, a message exception will catch
	 * @param int $postId
	 * @return void
	 */
	public function deletePost(int $postId): void
	{
		try {
			$currentPost = PostService::getOnePostById($postId);

			$currentPost->deleteSelectedPost();

		} catch (Exception $exception) {

			echo $exception->getMessage();
		}
	}
}