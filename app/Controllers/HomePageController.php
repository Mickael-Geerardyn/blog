<?php

namespace App\Controllers;

use App\Services\PostService;
use App\Services\UserService;
use Exception;

class HomePageController extends CoreController
{
	private array $latestPosts;

	public function __construct()
	{
		try {
			parent::__construct();
			$this->latestPosts = PostService::getHomePageRecentPosts();
            return true;
		} catch (Exception $exception){
			$this->twigEnvironment->render('main/landing-blog.html.twig', ['error' => $exception->getMessage()]);
			return false;
		}
	}

	/**
	 * @return bool
	 * @throws Exception
	 */
	public function getHomePage(): bool
	{
		try {
            //$template = $this->twigEnvironment->load('main/landing-blog.html.twig');
            //$template->render(["latestPosts" => $this->latestPosts]);
			$this->twigEnvironment->render("main/landing-blog.html.twig",
				["latestPosts" => $this->latestPosts]);
			return true;
		} catch (Exception $exception){
			var_dump($exception->getMessage());
			$this->twigEnvironment->render("main/landing-blog.html.twig", ["ownerUser" => $this->ownerUser ,'error'
            => $exception->getMessage()]);
			return false;
		}
	}
}