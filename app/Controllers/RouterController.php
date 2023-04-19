<?php

    namespace App\Controllers;

    use App\Models\UserModel;
    use App\Services\CommentService;
    use App\Services\PostService;
    use App\Services\UserService;
    use Exception;
    use JetBrains\PhpStorm\NoReturn;
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
         * @param string|null $exceptionMessage
         * @return bool
         */
        public function getNotFoundPage(string $exceptionMessage = null): bool
        {
            if(!empty($exceptionMessage))
            {
                self::makeFlashMessage("error", $exceptionMessage);
            }

                header("Location:" . $_SERVER["BASE_URI"] . "index.php?action=default");
                return true;
        }
    }