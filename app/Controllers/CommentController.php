<?php

namespace App\Controllers;

use App\Services\UserExceptions;
use App\Services\UserService;
use Exception;

class CommentController extends CoreController
{
    public function registerNewComment()
    {
        try {
            if(!UserService::checkIfUserIsAlreadyLoginInSession()){
                throw new UserExceptions('Connectez-vous pour laisser un commentaire');
                return false;
            }

            $comment =


        }catch (Exception $exception) {

        }
    }
}