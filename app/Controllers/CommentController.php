<?php

namespace App\Controllers;

use App\Models\CommentModel;
use App\Services\UserExceptions;
use App\Services\UserService;
use Exception;

class CommentController extends CoreController
{
    public function registeredNewComment()
    {
        try {
            if(!UserService::checkIfUserIsAlreadyLoginInSession()){
                throw new UserExceptions('Créez un compte ou connectez-vous pour pouvoir laisser un commentaire');
            }

            $content = strip_tags(htmlspecialchars($_POST['content']));
            $title = strip_tags(htmlspecialchars($_POST['title']));

            $commentModel = new CommentModel();
            $commentModel->setTitle($title)
                ->setContent($content)
                ->setPostId($_POST['postId'])
                ->setUserId($_SESSION['user']->getId())
                ->setStatus()
                ->createComment();

        }catch (Exception $exception) {
            $this->twigEnvironment->display("/landing-blog.html.twig", ["error" => $exception->getMessage()]);
        }
    }
}