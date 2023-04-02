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
}