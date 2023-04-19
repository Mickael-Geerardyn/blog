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
    protected const REQUIRED_FIELD_KEYS = ["title", "content", "postId", "userEmail"];

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

            if (!UserService::checkIfUserIsAlreadyLoginInSession()) {
                throw new Exception('Créez un compte ou connectez-vous pour pouvoir laisser un commentaire');
            }
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();

            foreach (self::REQUIRED_FIELD_KEYS as $key) {

                if (!empty($_POST[$key])) {

                    $title = strip_tags(htmlspecialchars($_POST['title']));
                    $content = strip_tags(htmlspecialchars($_POST['content']));
                    $postId = htmlspecialchars($_POST["postId"]);
                    $userEmail = filter_input(INPUT_POST, "userEmail", FILTER_VALIDATE_EMAIL);

                } else {

                    throw new Exception("Veuillez renseigner tous les champs");
                }
            }

            if (empty($_SESSION["userObject"]->getEmail() || !empty($_SESSION["userObject"]->getEmail()) != $userEmail)) {
                throw new Exception("Une erreur est intervenue lors de l'enregistrement du commentaire");
            }

            $commentModel = new CommentModel();
            $commentModel->setTitle($title);
            $commentModel->setContent($content);
            $commentModel->setPostId($postId);
            $commentModel->setUserId($_SESSION["userObject"]->getId());
            $commentModel->setStatus();

            $commentModel->createComment();

            self::makeFlashMessage("success", "Le commentaire a bien été transmis pour validation");

            RouterController::redirectToHomepage();

            return true;
        } catch (Exception $exception) {

            self::makeFlashMessage("error", $exception->getMessage());

            RouterController::redirectToHomepage();

            return false;
        }
    }
}

