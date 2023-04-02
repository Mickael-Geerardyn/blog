<?php

namespace App\Controllers;

use App\Models\UserModel;
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

		} catch (Exception $exception){

			$this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
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
            if(!empty($_SESSION["userObject"]) && !empty($_SESSION["CSRFToken"]))
            {
                $this->getHomePageAfterLoggedIn();
                return false;
            }
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
            if(empty($_SESSION["userObject"]) && empty($_SESSION["CSRFToken"]))
            {
                $this->getHomePage();
                return false;
            }

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

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getNotFoundPage(): bool
    {
        try{
            $this->twigEnvironment->display("/errors/404.html.twig");
            return true;
        }catch (Exception $exception){
            $this->twigEnvironment->display("/errors/404.html.twig", ["error" => $exception->getMessage()]);
            return false;
        }
    }
}