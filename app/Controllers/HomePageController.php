<?php

namespace App\Controllers;

use App\Services\PostService;
use Exception;

class HomePageController extends CoreController
{
	/**
	 * @return bool
	 * @throws Exception
	 */
	public static function getHomePage(): bool
	{
		try {
			$latestPosts = PostService::getHomePageRecentPosts();
			self::pageToDisplay('landing-blog', $latestPosts);
			return true;
		} catch (Exception $exception){
			self::pageToDisplay('landing-blog', informations: ['error' => $exception->getMessage()]);
			return false;
		}
	}
}