<?php

namespace App\Controllers\Admin;

use App\Models\UserModel;
use App\Services\AuthService;
use App\Services\CommentService;
use App\Services\UserService;
use Exception;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class AdminCommentController extends AdminCoreController
{
    protected array $pendingComments;

    public function __construct()
    {
        parent::__construct();
        $this->getPendingComments();
    }

    /**
     * @return bool
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function getPendingComments(): bool
    {
        try {
            $this->pendingComments = CommentService::getPendingComments();

            foreach ($this->pendingComments as $comment) {
                $comment->author = UserService::getCommentAuthorById($comment->getUserId());
            }

            return true;
        } catch(Exception $exception)
        {
            self::makeFlashMessage("error", $exception->getMessage());

            $this->twigEnvironment->display('/adminMain/comments-list.html.twig');
            return false;
        }
    }
    /**
     * @return bool
     * @throws Exception
     */
    public function displayPendingCommentsPage(): bool
    {
        try {
            UserService::checkUserRole();

            $this->twigEnvironment->addGlobal("pendingComments", $this->pendingComments);

            $this->twigEnvironment->display('/adminMain/comments-list.html.twig');
            return true;

        } catch (Exception $exception) {

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/adminMain/comments-list.html.twig');
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig');
            }
            return false;
        }
    }

    /**
     * @return bool
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function approvedComment(): bool
    {
        try {
            UserService::checkUserRole();
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $commentId = filter_input(INPUT_POST,"commentId", FILTER_VALIDATE_INT);
            CommentService::approvedComment($commentId);

            self::makeFlashMessage("success", "Le commentaire a bien été approuvé");
            $this->twigEnvironment->addGlobal("pendingComments", $this->pendingComments);

            AdminRouterController::redirectToCommentsListPage();

            return true;
        } catch (Exception $exception) {

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $pendingComments = CommentService::getPendingComments();
                $this->twigEnvironment->display('/adminMain/comments-list.html.twig', ['pendingComments' => $pendingComments]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig');
            }
            return false;
        }
    }

    /**
     * @return bool
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function deletedComment(): bool
    {
        try {
            UserService::checkUserRole();
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $commentId = filter_input(INPUT_POST ,"commentId", FILTER_VALIDATE_INT);
            CommentService::rejectedComment($commentId);
            $pendingComments = CommentService::getPendingComments();

            self::makeFlashMessage("success", "Le commentaire a bien été supprimé");

            $this->twigEnvironment->display('/adminMain/comments-list.html.twig', ['pendingComments' => $pendingComments]);

            return true;
        } catch (Exception $exception) {

            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $pendingComments = CommentService::getPendingComments();
                $this->twigEnvironment->display('/adminMain/comments-list.html.twig', ['pendingComments' => $pendingComments]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig');
            }
            return false;
        }
    }
}