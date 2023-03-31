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
    /**
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
	public function __construct()
	{
		try {
			parent::__construct();

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
                    $_SESSION["CSRFToken"] ,"ROLE_ADMIN" => UserModel::ROLE_ADMIN]);

            return true;
        } catch (Exception $exception){
            $this->twigEnvironment->display("/landing-blog.html.twig", ['error'
            => $exception->getMessage()]);
            return false;
        }
    }
}