<?php

namespace App\Controllers;

use App\Controllers\CoreController;
use App\Services\CommentService;
use App\Services\PostService;
use App\Services\UserService;
use Exception;

class PostController extends CoreController
{
	public function displayPostPage()
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

		}catch(Exception $exception){
            $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
		}
	}
}