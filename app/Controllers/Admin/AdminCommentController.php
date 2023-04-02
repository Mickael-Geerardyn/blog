<?php

namespace App\Controllers\Admin;

use App\Services\AuthService;
use App\Services\CommentService;
use App\Services\UserService;
use Exception;

class AdminCommentController extends AdminCoreController
{

    /**
     * @return bool
     * @throws Exception
     */
    public function displayPendingCommentsPage(): bool
    {
        try {
            $pendingComments = CommentService::getPendingComments();

            foreach ($pendingComments as $comment) {
                $comment->author = UserService::getCommentAuthorById($comment->getUserId());
            }

            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['pendingComments' => $pendingComments, "CSRFToken" => $_SESSION["CSRFToken"]]);
            return true;
        } catch (Exception $exception) {
            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['error' => $exception->getMessage()]);
            return false;
        }
    }

    public function approvedComment()
    {
        try {
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $commentTitle = htmlspecialchars($_POST["commentTitle"]);
            CommentService::approvedComment($commentTitle);
            $pendingComments = CommentService::getPendingComments();
            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['pendingComments' => $pendingComments, 'success' => `Le commentaire ${commentTitle} a bien été approuvé`]);
        } catch (Exception $exception) {
            $pendingComments = CommentService::getPendingComments();
            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['pendingComments' => $pendingComments, 'error' => $exception->getMessage()]);
        }
    }

    public function deletedComment()
    {
        try {
            AuthService::checkCSRFTokenSubmittedCorrespondWithSession();
            $commentTitle = htmlspecialchars($_POST["commentTitle"]);
            CommentService::rejectedComment($commentTitle);
            $pendingComments = CommentService::getPendingComments();
            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['pendingComments' => $pendingComments, 'success' => `Le commentaire ${commentTitle} a bien été supprimé`]);
        } catch (Exception $exception) {
            $pendingComments = CommentService::getPendingComments();
            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['pendingComments' => $pendingComments, 'error' => $exception->getMessage()]);
        }
    }
}