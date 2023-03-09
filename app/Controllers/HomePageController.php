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
		} catch (Exception $exception){
			$this->twigEnvironment->render('app/main/landing-blog.html.twig', ['error' => $exception->getMessage()]);
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
			$latestPosts = PostService::getHomePageRecentPosts();
			$this->twigEnvironment->render('app/main/landing-blog.html.twig',
				["ownerUser" => $this->ownerUser
				,"latestsPosts" => $latestPosts]);
			return true;
		} catch (Exception $exception){
			$this->twigEnvironment->render('app/main/landing-blog.html.twig', ["ownerUser" => $this->ownerUser ,'error' => $exception->getMessage()]);
			return false;
		}
	}
}