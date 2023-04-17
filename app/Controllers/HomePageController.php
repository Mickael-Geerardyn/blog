<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Services\PostService;
use Exception;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HomePageController extends CoreController
{
    protected array $homePagePosts = [];
    /**
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
	public function __construct()
	{
		try {
			parent::__construct();
            $this->homePagePosts = PostService::getHomePageRecentPosts(PostService::HOMEPAGE_POSTS_LIMIT);
            self::insertPostAuthorAndPostCommentsInArray($this->homePagePosts);
            self::insertCommentAuthorInCommentObject($this->homePagePosts);
            $this->twigEnvironment->addGlobal('postsArray', $this->homePagePosts);

		} catch (Exception $exception){
            $this->twigEnvironment->addGlobal("_SESSION", $_SESSION["error"] = $exception->getMessage());

			$this->twigEnvironment->display('/landing-blog.html.twig');
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

			$this->twigEnvironment->display("/landing-blog.html.twig");

			return true;
		} catch (Exception $exception){
            $this->twigEnvironment->addGlobal("_SESSION", $_SESSION["error"] = $exception->getMessage());

			$this->twigEnvironment->display("/landing-blog.html.twig");
			return false;
		}
	}
}