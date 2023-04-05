<?php

namespace App\Controllers;

use App\Models\CommentModel;
use App\Services\AuthService;
use App\Services\PostService;
use App\Services\UserService;
use Exception;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class CommentController extends CoreController
{
    /**
     * @return bool
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function sendNewComment(): bool
    {
        try {
            if(!UserService::checkIfUserIsAlreadyLoginInSession()){
                throw new Exception('Créez un compte ou connectez-vous pour pouvoir laisser un commentaire');
            }
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();

            $content = strip_tags(htmlspecialchars($_POST['content']));
            $title = strip_tags(htmlspecialchars($_POST['title']));
            $postId = htmlspecialchars($_POST["postId"]);
            $userEmail = filter_input(INPUT_POST, "userEmail", FILTER_VALIDATE_EMAIL);

            $currentPost = PostService::getPostById($postId);

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

            return true;
        }catch (Exception $exception) {
            $this->twigEnvironment->display("/landing-blog.html.twig", ["error" => $exception->getMessage()]);

            return false;
        }
    }
}