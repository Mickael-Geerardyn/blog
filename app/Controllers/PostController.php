<?php

namespace App\Controllers;

use App\Controllers\CoreController;
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

class PostController extends CoreController
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function displayPostsPage():bool
    {
        try {
            $allValidatedPosts = PostService::getHomePageRecentPosts();
            $allValidatedPosts = self::insertPostAuthorAndPostCommentsInArray($allValidatedPosts);
            $allValidatedPosts = self::insertCommentAuthorInCommentObject($allValidatedPosts);

            $this->twigEnvironment->display("/posts-page.html.twig", ["postsArray" => $allValidatedPosts]);

            return true;
        }catch(Exception $exception){
            self::makeFlashMessage("error", $exception->getMessage());

            RouterController::redirectToHomepage();
            return false;
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    public function displayNewPostPage(): bool
    {
        try{

            $this->twigEnvironment->display('/new-post.html.twig');

            return true;
        }catch (Exception $exception){
            self::makeFlashMessage("error", $exception->getMessage());

            $this->twigEnvironment->display('/landing-blog.html.twig');

            return false;
        }

    }

    /**
     * @return bool
     * @throws Exception
     */
    public function createPost(): bool
    {
        try {
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();

            PostService::checkInputs();

            $content = strip_tags(htmlspecialchars($_POST["content"]));
            $heading = strip_tags(htmlspecialchars($_POST["heading"]));
            $title = strip_tags(htmlspecialchars($_POST["title"]));

            $newPost = new PostModel();

            $newPost
                ->setTitle($title)
                ->setHeading($heading)
                ->setContent($content)
                ->setUserId($_SESSION["userObject"]->getId());

            $newPost->createOnePost();

            self::makeFlashMessage("success", "Votre article a bien été soumis pour validation");

            $routerController = new RouterController();
            $routerController->redirectToHomepage();

            return true;
        } catch (Exception $exception) {
            self::makeFlashMessage("error", $exception->getMessage());

            $routerController = new RouterController();
            $routerController->redirectToHomepage();
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
    public function deletePost(): bool
    {
        try{
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $postId = filter_input(INPUT_POST, "post-id", FILTER_VALIDATE_INT);
            $postObject = PostService::getPostById($postId, $_SESSION["userObject"]->getId());
            PostService::rejectedPost($postId);

            self::makeFlashMessage("success", "L'article à bien été supprimé");

            RouterController::redirectToHomepage();

            return true;

        }catch(Exception $exception)
        {
            self::makeFlashMessage("error", $exception->getMessage());

            RouterController::redirectToHomepage();
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
    public function updatePostPage(): bool
    {
        try {

            $postId = filter_input(INPUT_POST, "postId", FILTER_VALIDATE_INT);
            $postObject = PostService::getPostById($postId, $_SESSION["userObject"]->getId());

            $this->twigEnvironment->display('/new-post.html.twig', ["postObject" => $postObject]);
            return true;

        }catch(Exception $exception){
            self::makeFlashMessage("error", $exception->getMessage());

            RouterController::redirectToHomepage();
            return false;
        }
    }

    /**
     * Function which allows to update one post and save it in database
     * If there is a problem with update, a message exception will catch
     * @return bool
     * @throws Exception
     */
    public function updatePost(): bool
    {
        try {
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            PostService::checkInputs();

            $postId = filter_input(INPUT_POST, "postId", FILTER_VALIDATE_INT);
            $currentPost = PostService::getPostById($postId, $_SESSION["userObject"]->getId());

            $currentPost->setHeading(htmlspecialchars($_POST['heading']));
                $currentPost->setContent(htmlspecialchars($_POST['content']));
                $currentPost->setTitle(htmlspecialchars($_POST['title']));
                $currentPost->setUpdatedAt(PostModel::getCurrentDateTime());
                $currentPost->setUserId($_SESSION["userObject"]->getId());

            $currentPost->updateSelectedPost();

            self::makeFlashMessage("success", "L'article a été mis à jour et soumis pour validation");

            RouterController::redirectToHomepage();

            return true;
        } catch (Exception $exception) {
            self::makeFlashMessage("error", $exception->getMessage());

            RouterController::redirectToHomepage();
            return false;
        }
    }
}