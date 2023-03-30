<?php

namespace App\Controllers;

use App\Models\CommentModel;
use App\Services\AuthService;
use App\Services\PostService;
use App\Services\UserExceptions;
use App\Services\UserService;
use Exception;

class CommentController extends CoreController
{
    public function sendNewComment()
    {
        try {
            if(!UserService::checkIfUserIsAlreadyLoginInSession()){
                throw new UserExceptions('Créez un compte ou connectez-vous pour pouvoir laisser un commentaire');
            }
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();

            $content = strip_tags(htmlspecialchars($_POST['content']));
            $title = strip_tags(htmlspecialchars($_POST['title']));
            $postTitle = htmlspecialchars($_POST["postTitle"]);
            $userEmail = filter_input(INPUT_POST, "userEmail", FILTER_VALIDATE_EMAIL);

            $currentPost = PostService::getOnePostByTitle($postTitle);
            $postId = $currentPost->getId();

            if(empty($_SESSION["userObject"]->getEmail() || !empty($_SESSION["userObject"]->getEmail()) != $userEmail)) {
                throw new Exception("Une erreur est intervenue lors de l'enregistrement du commentaire");
            }

            $commentModel = new CommentModel();
            $commentModel->setTitle($title);
            $commentModel->setContent($content);
            $commentModel->setPostId($postId);
            $commentModel->setUserId($_SESSION["userObject"]->getId());
            $commentModel->setStatus();

            $commentModel->createComment();

            $this->twigEnvironment->display("/landing-blog.html.twig", ["latestPosts" => $this->latestPosts, "success" => "Commentaire envoyé pour modération avec succès"]);
        }catch (Exception $exception) {
            $this->twigEnvironment->display("/landing-blog.html.twig", ["error" => $exception->getMessage()]);
        }
    }
}