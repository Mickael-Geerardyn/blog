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
            self::makeFlashMessage("error", $exception->getMessage());

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
            $homePagePosts = PostService::getHomePageRecentPosts(PostService::HOMEPAGE_POSTS_LIMIT);
            $homePagePosts = self::insertPostAuthorAndPostCommentsInArray($homePagePosts);
            $homePagePosts = self::insertCommentAuthorInCommentObject($homePagePosts);

			$this->twigEnvironment->display("/landing-blog.html.twig", ["postsArray" => $homePagePosts]);

			return true;
		} catch (Exception $exception){
            self::makeFlashMessage("error", $exception->getMessage());

			$this->twigEnvironment->display("/landing-blog.html.twig");
			return false;
		}
	}
}