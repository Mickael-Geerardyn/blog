<?php

namespace App\Controllers;

use App\Controllers\CoreController;
use App\Services\PostService;
use App\Services\UserService;
use Exception;

class PostController extends CoreController
{
	public function displayPostPage()
	{
		try {
			$postTitle = htmlspecialchars($_GET['postTitle']);

			$postObject = PostService::getOnePostByTitle($postTitle);
			$postObject->userObject = UserService::getUserOfCurrentPost($postObject->getUserId());

			self::pageToDisplay('single-blog', $postObject);
		}catch(Exception $exception){
			self::pageToDisplay('landing-portfolio', informations: ['error' => $exception->getMessage()]);
		}
	}
}