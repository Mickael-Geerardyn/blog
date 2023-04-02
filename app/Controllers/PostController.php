<?php

namespace App\Controllers;

use App\Controllers\CoreController;
use App\Models\PostModel;
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
    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
	public function displayPostPage(): bool
    {
		try {
			$postTitle = htmlspecialchars($_GET['title']);

			$postObject = PostService::getOnePostByTitle($postTitle);

            $postObject->postAuthorObject = UserService::getPostAuthorById($postObject->getUserId());

			$postObject->commentsObject = CommentService::getPostComments($postObject->getId());

            foreach ($postObject->commentsObject as $comment){
                $comment->commentAuthorObject = UserService::getCommentAuthorById($comment->getUserId());
            }

			$this->twigEnvironment->display('/modals.html.twig', ["postObject" => $postObject]);

            return true;
		}catch(Exception $exception){
            $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);

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

            $this->twigEnvironment->display('/new-post.html.twig', ["loggedInUser" => $_SESSION["userObject"], "CSRFToken" => $_SESSION["CSRFToken"] ]);

            return true;
        }catch (Exception $exception){

            $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);

            return false;
        }

    }

    /**
     * Function which allows to try to create a new post and save it in
     * database with createPost method
     * If there is a problem with the creation, a message exception will catch.
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

            $this->twigEnvironment->display('/landing-blog.html.twig',
                ["latestPosts" => $this->latestPosts, "userObject" => $_SESSION["userObject"] ,"success" => "L'article a bien été soumis pour modération"]);

            return true;
        } catch (Exception $exception) {
            $this->twigEnvironment->display('/adminMain/blog-post.html.twig', ["error" => $exception->getMessage()]);
            return false;
        }
    }

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function modifiedPostPage(): bool
    {
        try {

            $postId = filter_input(INPUT_POST, "postId", FILTER_VALIDATE_INT);
            $postObject = PostService::getPostById($postId);
            $this->twigEnvironment->display('/new-post.html.twig', ["postObject" => $postObject ,"loggedInUser" =>
                $_SESSION["userObject"], "CSRFToken" => $_SESSION["CSRFToken"] ]);
            return true;

        }catch(Exception $exception){
            $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
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
            $currentPost = PostService::getPostById($postId);

            $currentPost
                ->setHeading(htmlspecialchars($_POST['heading']))
                ->setContent(htmlspecialchars($_POST['content']))
                ->setTitle(htmlspecialchars($_POST['title']))
                ->setUpdatedAt(PostModel::getCurrentDateTime())
                ->setUserId($_SESSION["userObject"]->getId());

            $currentPost->updateSelectedPost();

            $this->twigEnvironment->display('/landing-blog.html.twig', ["loggedInUser" => $_SESSION["userObject"], "success" => "La demande de mise à jour de l'article a bien été transmise pour vérification" ]);

            return true;
        } catch (Exception $exception) {
                $this->twigEnvironment->display('/landing-blog.html.twig', ["loggedInUser" => $_SESSION["userObject"], "error" => $exception->getMessage() ]);
            return false;
        }
    }
}