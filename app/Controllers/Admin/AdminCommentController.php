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

    /**
     * @return bool
     * @throws Exception
     */
    public function displayPendingCommentsPage(): bool
    {
        try {
            UserService::checkUserRole();
            $pendingComments = CommentService::getPendingComments();

            foreach ($pendingComments as $comment) {
                $comment->author = UserService::getCommentAuthorById($comment->getUserId());
            }

            $this->twigEnvironment->display('/adminMain/comments-list.html.twig', ['pendingComments' => $pendingComments, "CSRFToken" => $_SESSION["CSRFToken"]]);
            return true;

        } catch (Exception $exception) {

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display('/adminMain/comments-list.html.twig', ['error' => $exception->getMessage()]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            }
            return false;
        }
    }

    /**
     * @return bool
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
            $pendingComments = CommentService::getPendingComments();
            $this->twigEnvironment->display('/adminMain/comments-list.html.twig', ['pendingComments' => $pendingComments, 'success' => `Le commentaire a bien été
            approuvé`]);

            return true;
        } catch (Exception $exception) {

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $pendingComments = CommentService::getPendingComments();
                $this->twigEnvironment->display('/adminMain/comments-list.html.twig', ['pendingComments' => $pendingComments, 'error' => $exception->getMessage()]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            }
            return false;
        }
    }

    /**
     * @return bool
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
            $this->twigEnvironment->display('/adminMain/comments-list.html.twig', ['pendingComments' => $pendingComments, 'success' => `Le commentaire a bien été
            supprimé`]);

            return true;
        } catch (Exception $exception) {

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $pendingComments = CommentService::getPendingComments();
                $this->twigEnvironment->display('/adminMain/comments-list.html.twig', ['pendingComments' => $pendingComments, 'error' => $exception->getMessage()]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            }

            return false;
        }
    }
}