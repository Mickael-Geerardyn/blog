<?php
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Models\PostModel;
use App\Services\AuthService;
use App\Services\CommentService;
use App\Services\PostService;
use App\Services\UserService;
use Exception;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class AdminPostController extends AdminCoreController
{

	/**
	 * @return void
     * @throws Exception
	 */
	public function displayPostsPage(): void
	{
		try{
            $postsArray = PostService::getAllNotValidatedPosts();
            foreach($postsArray as $post){
                $post->author = UserService::getPostAuthorById($post->getUserId());
                $post->commentsNumber = CommentService::getNumberOfComments($post->getId());
            }

            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['postsArray' => $postsArray]);

		}catch (Exception $exception){

            $this->twigEnvironment->display('/adminMain/landing-dashboard.html.twig', ['error' => $exception->getMessage()]);
		}

	}

	/**
     *
	 * @return bool
     * @throws Exception
	 */
	public function displayOnePostById(): bool
	{
		try{
			$postId = filter_input(INPUT_POST, "post-id", FILTER_VALIDATE_INT);
            //var_dump(PostService::getPostById($postId)); die;
            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['postObject' =>
                PostService::getPostById($postId), "CSRFToken" => $_SESSION["CSRFToken"]]);
			return true;
		}catch (Exception $exception){
            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['error' => $exception->getMessage()]);

			return false;
		}

	}

	/**
	 * @return bool
     * @throws Exception
	 */
	public function newPostPage(): bool
	{
        try{
            $this->twigEnvironment->display('/adminMain/blog-post.html.twig', ["loggedInUser" => $_SESSION["userObject"]]);
            return true;
        }catch(Exception $exception)
        {
            $this->twigEnvironment->display('/adminMain/landing-dashboard.html.twig', ["error" => $exception->getMessage()]);
            return false;
        }
	}

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function validatePostById(): bool
    {
        try {
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $postId = filter_input(INPUT_POST, "post-id", FILTER_VALIDATE_INT);
            PostService::approvedPost($postId);

            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['postObject' => PostService::getPostById($postId), "loggedInUser" => $_SESSION["userObject"]]);

            return true;
        } catch (Exception $exception) {
            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ["error" => $exception->getMessage(), "loggedInUser" => $_SESSION["userObject"]]);
            return false;
        }
    }

    /**
     * @param int $postId
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
        public function rejectedPostById(): bool
        {
        try{
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $postId = filter_input(INPUT_POST, "post-id", FILTER_VALIDATE_INT);
            PostService::rejectedPost($postId);

            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['postObject' =>
                PostService::getPostById($postId), "success" => "L'article a bien été refusé"]);

            return true;

        }catch(Exception $exception){
            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ["error" => $exception->getMessage()]);
            return false;
        }
    }

	/**
	 * Function which allows to try to create a new post and save it in
	 * database with createPost method
	 * If there is a problem with the creation, a message exception will catch.
	 * @return bool
	 */
	public function createPost(): bool
	{
		try {
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();

            $content = strip_tags(htmlspecialchars($_POST["content"]), self::ALLOWED_TAGS);
            $heading = strip_tags(htmlspecialchars($_POST["heading"]), self::ALLOWED_TAGS);
            $title = strip_tags(htmlspecialchars($_POST["title"]), self::ALLOWED_TAGS);

			$newPost = new PostModel();

			$newPost
				->setTitle($title)
				->setHeading($heading)
				->setContent($content)
				->setUserId($_SESSION["userObject"]->getId());

			$thisNewPostId = $newPost->createOnePost();

            AuthService::unsetDataInGlobalPost();

            $this->twigEnvironment->display('/adminMain/blog-details.html.twig',
                ["postObject" => PostService::getPostById($thisNewPostId), "userObject" => $_SESSION["userObject"] ,"success" => "L'article a bien été enregistré"]);

		} catch (Exception $exception) {
            $this->twigEnvironment->display('/adminMain/blog-post.html.twig', ["error" => $exception->getMessage()]);
            return false;
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