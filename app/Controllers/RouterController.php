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
         * @return void
         */
        public static function redirectToHomepage(): void
        {
                header("Location:" . $_SERVER["BASE_URI"] . "index.php");
                exit();
        }

        /**
         * @param string|null $exceptionMessage
         * @return void
         */
        public function getNotFoundPage(string $exceptionMessage = null): void
        {
            if(!empty($exceptionMessage))
            {
                self::makeFlashMessage("error", $exceptionMessage);
            }

                header("Location:" . $_SERVER["BASE_URI"] . "index.php?action=default");
                exit();
        }
    }