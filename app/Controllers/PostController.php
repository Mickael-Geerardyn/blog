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
    protected array $allValidatedPosts = [];

    public function __construct()
    {
        parent::__construct();
        $this->allValidatedPosts = PostService::getHomePageRecentPosts();
        self::insertPostAuthorAndPostCommentsInArray($this->allValidatedPosts);
        self::insertCommentAuthorInCommentObject($this->allValidatedPosts);
    }

    /**
     * @return bool
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function displayPostsPage():bool
    {
        try {
            $this->twigEnvironment->addGlobal("postsArray", $this->allValidatedPosts);

            $this->twigEnvironment->display("/posts-page.html.twig");

            return true;
        }catch(Exception $exception){
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

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
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

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

            $content = strip_tags(htmlspecialchars($_POST["content"]));
            $heading = strip_tags(htmlspecialchars($_POST["heading"]));
            $title = strip_tags(htmlspecialchars($_POST["title"]));

            $newPost = new PostModel();

            $newPost
                ->setTitle($title)
                ->setHeading($heading)
                ->setContent($content)
                ->setUserId($_SESSION["userObject"]->getId());

            $thisNewPostId = $newPost->createOnePost();

            AuthService::unsetDataInGlobalPost();
            $_SESSION["success"] = "L'article a bien été soumis pour modération";
            self::storeSuccessOrErrorMessageInAddGlobalSession();

            RouterController::redirectToHomepage();

            return true;
        } catch (Exception $exception) {
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

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
    public function deletePost(): bool
    {
        try{
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $postId = filter_input(INPUT_POST, "post-id", FILTER_VALIDATE_INT);
            $postObject = PostService::getPostById($postId, $_SESSION["userObject"]->getId());
            PostService::rejectedPost($postId);

            $_SESSION["success"] = "L'article a bien été supprimé";
            self::storeSuccessOrErrorMessageInAddGlobalSession();

            RouterController::redirectToHomepage();

            return true;

        }catch(Exception $exception)
        {
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

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
    public function modifiedPostPage(): bool
    {
        try {

            $postId = filter_input(INPUT_POST, "postId", FILTER_VALIDATE_INT);
            $postObject = PostService::getPostById($postId, $_SESSION["userObject"]->getId());

            $this->twigEnvironment->display('/new-post.html.twig', ["postObject" => $postObject]);
            return true;

        }catch(Exception $exception){
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

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
            $postId = filter_input(INPUT_POST, "postId", FILTER_VALIDATE_INT);
            $currentPost = PostService::getPostById($postId, $_SESSION["userObject"]->getId());

            $currentPost->setHeading(htmlspecialchars($_POST['heading']));
                $currentPost->setContent(htmlspecialchars($_POST['content']));
                $currentPost->setTitle(htmlspecialchars($_POST['title']));
                $currentPost->setUpdatedAt(PostModel::getCurrentDateTime());
                $currentPost->setUserId($_SESSION["userObject"]->getId());

            $currentPost->updateSelectedPost();
            $_SESSION["success"] = "La demande de mise à jour de l'article a bien été transmise pour validation";
            self::storeSuccessOrErrorMessageInAddGlobalSession();

            RouterController::redirectToHomepage();

            return true;
        } catch (Exception $exception) {
            $_SESSION["error"] = $exception->getMessage();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

            RouterController::redirectToHomepage();
            return false;
        }
    }
}