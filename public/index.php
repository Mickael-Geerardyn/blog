<?php

use App\Controllers\Admin\AdminUserController;
use App\Controllers\Admin\AdminPostController;
use App\Controllers\AuthController;
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
			$newUser = new AdminUserController();
			$newUser->registeredNewUser();
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
		case 'single-post':
			$postPage = new AdminPostController();
			$postPage->displayOnePostByTitle();
			break;
		case 'new-post-page':
			$newPostPage = new AdminPostController();
			$newPostPage->newPostPage();
			break;
		case 'login-page':
			$loginPage = new UserController();
			$loginPage->getLoginPage();
			break;
		case 'register-page':
			$userController = new UserController();
			$userController->getSignUpPage();
			break;
		case 'single-blog':
			$postPage = new PostController();
			$postPage->displayPostPage();
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