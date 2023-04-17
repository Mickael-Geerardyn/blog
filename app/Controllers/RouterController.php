<?php

    namespace App\Controllers;

    use App\Models\UserModel;
    use App\Services\CommentService;
    use App\Services\PostService;
    use App\Services\UserService;
    use Exception;
    use Twig\Error\LoaderError;
    use Twig\Error\RuntimeError;
    use Twig\Error\SyntaxError;

    class RouterController extends CoreController
    {

        /**
         * @return bool
         */
        public static function redirectToHomepage(): bool
        {
                header("Location:" . $_SERVER["BASE_URI"] . "index.php");
                return true;
        }

        /**
         * @return bool
         */
        public static function getNotFoundPage(): bool
        {
                header("Location:" . $_SERVER["BASE_URI"] . "index.php?action=default");
                return true;
        }
    }