<?php
declare(strict_types=1);

namespace App\Controllers\Admin;
use App\Controllers\RouterController;
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
    protected array $postsArray;
    protected bool|object $postObject;

    public function __construct()
    {
        parent::__construct();
        $this->getPostsArray();
        $this->twigEnvironment->addGlobal("postsArray", $this->postsArray);
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function getPostsArray(): bool
    {
        try {
            $this->postsArray = PostService::getAllNotValidatedPosts();
            foreach($this->postsArray as $post){
                $post->author = UserService::getPostAuthorById($post->getUserId());
                $post->commentsNumber = CommentService::getNumberOfComments($post->getId());
            }

            return true;
        } catch(Exception $exception)
        {
            self::makeFlashMessage("error", $exception->getMessage());

            $this->twigEnvironment->display('/adminMain/blog-list.html.twig');
            return false;
        }
    }

    /**
     * @param int|string $postId
     * @return bool
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getPostObject(int|string $postId): bool
    {
        try {
            $this->postObject = PostService::getPostByAdmin($postId);
            $this->postObject->author = UserService::getPostAuthorById($this->postObject->getUserId());
            $this->postObject->comments = CommentService::getNumberOfComments($postId);

            return true;
        } catch(Exception $exception)
        {
            self::makeFlashMessage("error", $exception->getMessage());

            $this->twigEnvironment->display('/adminMain/blog-list.html.twig');
            return false;
        }
    }

    /**
	 * @return bool
     * @throws Exception
	 */
	public function displayPostsPage(): bool
	{
		try{
            UserService::checkUserRole();

            $this->twigEnvironment->display('/adminMain/blog-list.html.twig');

            return true;

		}catch (Exception $exception){

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/adminMain/blog-list.html.twig');
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig');
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
            $this->getPostObject($postId);
            $this->twigEnvironment->addGlobal("postObject", $this->postObject);

            $this->twigEnvironment->display('/adminMain/blog-details.html.twig');

			return true;
		}catch (Exception $exception){

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/adminMain/blog-list.html.twig');
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig');
            }
            return false;

		}

	}

    /**
     * @return bool
     * @throws Exception
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

            self::makeFlashMessage("success", "L'article a bien été validé");

            AdminRouterController::redirectToBlogListPage();

            return true;
        } catch (Exception $exception) {

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                AdminRouterController::redirectToBlogListPage();
            } else {

                RouterController::redirectToHomepage();
            }
            return false;

        }
    }

    /**
     * @return bool
     * @throws Exception
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

            self::makeFlashMessage("success", "L'article a bien été supprimé");

            AdminRouterController::redirectToBlogListPage();

            return true;

        }catch(Exception $exception){

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                AdminRouterController::redirectToBlogListPage();
            } else {

                RouterController::redirectToHomepage();
            }
            return false;
        }
    }
}