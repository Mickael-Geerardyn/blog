<?php

use App\Controllers\Admin\AdminCommentController;
use App\Controllers\Admin\AdminUserController;
use App\Controllers\Admin\AdminPostController;
use App\Controllers\AuthController;
use App\Controllers\CommentController;
use App\Controllers\HomePageController;
use App\Controllers\PostController;
use App\Controllers\UserController;

require_once '../vendor/autoload.php';
/**
 * Start new session for each new visitor.
 * Session will be open before write any code script and html entities (before DOCTYPE too)
 */
session_start();

if(isset($_GET['action']) && !empty($_GET['action']))
{
	switch ($_GET['action'])
	{
		case 'sign-in':
            $authController = new AuthController();
            $authController->userLogin();
			break;
		case 'user-register':
			$adminUserController = new AdminUserController();
            $adminUserController->registeredNewUser();
			break;
        case 'new-user-register':
            $userController = new UserController();
            $userController->newUserRegister();
            break;
        case 'update-user':
            $newUser = new AdminUserController();
            $newUser->updatedUser();
            break;
		case 'logout':
			$userLogout = new AuthController();
			$userLogout->userLogout();
			break;
		case 'landing-dashboard':
			$landingDashboard = new AuthController();
			$landingDashboard->displayLandingDashboard();
			break;
		case 'display-add-form-user':
			$AddFormUser = new AdminUserController();
			$AddFormUser->displayAddFormUser();
			break;
		case 'users-page':
			$usersPage = new AdminUserController();
			$usersPage->displayUsersPage();
			break;
		case 'user-delete':
			$userDelete = new AdminUserController();
			$userDelete->deleteUser();
			break;
		case 'user-modifications-page':
			$userUpdate = new AdminUserController();
			$userUpdate->displayUpdateFormUser();
			break;
		case 'blog-list':
			$postsPage = new AdminPostController();
			$postsPage->displayPostsPage();
			break;
		case 'single-post-page':
			$postPage = new AdminPostController();
			$postPage->displayOnePostById();
			break;
		case 'new-post-page':
			$newPostPage = new AdminPostController();
			$newPostPage->newPostPage();
			break;
        case 'send-new-post':
            $adminPostController = new AdminPostController();
            $adminPostController->createPost();
            break;
        case 'validated-post':
            $adminPostController = new AdminPostController();
            $adminPostController->validatePostById();
            break;
        case 'rejected-post':
            $adminPostController = new AdminPostController();
            $adminPostController->rejectedPostById();
            break;
		case 'login-page':
			$loginPage = new UserController();
			$loginPage->getLoginPage();
			break;
        case "sign-up-page":
            $userController = new UserController();
            $userController->getSignUpPage();
            break;
		case 'register-page':
			$userController = new UserController();
			$userController->getSignUpPage();
			break;
		case 'single-blog':
			$postPage = new PostController();
			$postPage->displayPostPage();
			break;
        case "send-new-comment":
            $commentController = new CommentController();
            $commentController->sendNewComment();
            break;
        case "comments-list":
            $adminCommentController = new AdminCommentController();
            $adminCommentController->displayPendingCommentsPage();
            break;
        case "comment-validated":
            $adminCommentController = new AdminCommentController();
            $adminCommentController->approvedComment();
            break;
        case "rejected-comment":
            $adminCommentController = new AdminCommentController();
            $adminCommentController->deletedComment();
            break;
        case "homepage":
            $homePageController = new HomePageController();
            $homePageController->getHomePage();
            break;
		default:
			header('Location:'.$_SERVER['BASE_URI']."app/templates/admin/404.html.twig");

	}

} else {
	try {
	$homePage = new HomePageController();
		$homePage->getHomePage();
	} catch (Exception $exception) {
		echo $exception->getMessage();
	}
}