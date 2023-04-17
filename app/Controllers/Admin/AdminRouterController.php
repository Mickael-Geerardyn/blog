<?php

    namespace App\Controllers\Admin;

    class AdminRouterController extends AdminCoreController
    {
        /**
         * @return bool
         */
        public static function redirectToBlogListPage(): bool
        {
            header("Location:" . $_SERVER["BASE_URI"] . "index.php?action=blog-list");
            return true;
        }

        /**
         * @return bool
         */
        public static function redirectToUsersPage(): bool
        {
            header("Location:" . $_SERVER["BASE_URI"] . "index.php?action=users-page");
            return true;
        }

        public static function redirectToCommentsListPage(): bool
        {
            header("Location:" . $_SERVER["BASE_URI"] . "index.php?action=comments-list");
            return true;
        }
    }