<?php
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Models\PostModel;
use App\Models\UserModel;
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
	 * @return bool
     * @throws Exception
	 */
	public function displayPostsPage(): bool
	{
		try{
            UserService::checkUserRole();
            $postsArray = PostService::getAllNotValidatedPosts();
            foreach($postsArray as $post){
                $post->author = UserService::getPostAuthorById($post->getUserId());
                $post->commentsNumber = CommentService::getNumberOfComments($post->getId());
            }

            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['postsArray' => $postsArray]);

            return true;

		}catch (Exception $exception){

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['error' => $exception->getMessage()]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            }
            return false;
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
            UserService::checkUserRole();
			$postId = filter_input(INPUT_POST, "post-id", FILTER_VALIDATE_INT);

            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['postObject' => PostService::getPostById($postId)]);

			return true;
		}catch (Exception $exception){

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['error' => $exception->getMessage()]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            }
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
            UserService::checkUserRole();
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $postId = filter_input(INPUT_POST, "post-id", FILTER_VALIDATE_INT);
            PostService::approvedPost($postId);
            $postObject = PostService::getPostById($postId);
            $postObject->author = UserService::getPostAuthorById($postObject->getUserId());
            $postObject->comments = CommentService::getNumberOfComments($postId);

            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['postObject' => $postObject]);

            return true;
        } catch (Exception $exception) {

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ["error" => $exception->getMessage()]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            }
            return false;

        }
    }

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
        public function rejectedPostById(): bool
        {
        try{
            UserService::checkUserRole();
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $postId = filter_input(INPUT_POST, "post-id", FILTER_VALIDATE_INT);
            PostService::rejectedPost($postId);

            $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ['postObject' =>
                PostService::getPostById($postId), "success" => "L'article a bien été refusé"]);

            return true;

        }catch(Exception $exception){

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/adminMain/blog-details.html.twig', ["error" => $exception->getMessage()]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            }
            return false;
        }
    }
}