<?php

namespace App\Controllers\Admin;

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

            foreach($pendingComments as $comment) {
                $comment->author = UserService::getCommentAuthorById($comment->getUserId());
            }

            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['pendingComments' =>
                $pendingComments]);
            return true;
        } catch (Exception $exception) {
            $this->twigEnvironment->display('/adminMain/blog-list.html.twig', ['error' => $exception->getMessage()]);
            return false;
        }
    }

    public function approvedComment()
    {
        try {
            $commentTitle = htmlspecialchars($_GET["commentTitle"]);
            CommentService::approvedComment($commentTitle);
            $this->twigEnvironment->display('/adminMain/admin-comment.html.twig', ['success' => 'Le commentaire a bien été approuvé']);
        } catch (Exception $exception) {
            $this->twigEnvironment->display('/adminMain/admin-comment.html.twig', ['error' => $exception->getMessage
            ()]);
        }
    }

    public function addnewComment()
    {
        try {

        } catch (Exception $exception)
        {

        }
    }
}