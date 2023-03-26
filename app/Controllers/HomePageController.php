<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Services\CommentService;
use App\Services\PostService;
use App\Services\UserService;
use Exception;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HomePageController extends CoreController
{
	private array $latestPosts = [];

    /**
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
	public function __construct()
	{
		try {
			parent::__construct();
            $this->latestPosts = PostService::getHomePageRecentPosts();

            self::insertPostAuthorAndPostCommentsInArray();
            self::insertCommentAuthorInCommentObject();

            return true;
		} catch (Exception $exception){
			$this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
			return false;
		}
	}

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function insertPostAuthorAndPostCommentsInArray(): bool
    {
        try {
            foreach ($this->latestPosts as $post)
            {
                $post->postAuthor = UserService::getPostAuthorById($post->getUserId());
                $post->postComments = CommentService::getPostComments($post->getId());
            }
            return true;
        } catch (Exception $exception) {
            $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            return false;
        }
    }

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function insertCommentAuthorInCommentObject(): bool
    {
        try {
            foreach ($this->latestPosts as $post){
                foreach($post->postComments as $comment){
                    $comment->commentAuthor = CommentService::getAuthorComments($comment->getUserId());
                }
            }

             return true;

        } catch (Exception $exception) {

            $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            return false;

        }
    }

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
	public function getHomePage(): bool
	{
		try {
			$this->twigEnvironment->display("/landing-blog.html.twig",
				["latestPosts" => $this->latestPosts]);

			return true;
		} catch (Exception $exception){
			$this->twigEnvironment->display("/landing-blog.html.twig", ['error'
            => $exception->getMessage()]);
			return false;
		}
	}

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getHomePageAfterLoggedIn (): bool
    {
        try {
            $this->twigEnvironment->display("/landing-blog.html.twig",
                ["latestPosts" => $this->latestPosts, "loggedInUser" => $_SESSION["userObject"], "CSRFToken" =>
                    $_SESSION["CSRFToken"] ,"ROLE_ADMIN" =>
                    UserModel::ROLE_ADMIN]);

            return true;
        } catch (Exception $exception){
            $this->twigEnvironment->display("/landing-blog.html.twig", ['error'
            => $exception->getMessage()]);
            return false;
        }
    }
}