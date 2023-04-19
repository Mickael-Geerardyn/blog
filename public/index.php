<?php

use App\Controllers\Admin\AdminCommentController;
use App\Controllers\Admin\AdminUserController;
use App\Controllers\Admin\AdminPostController;
use App\Controllers\AuthController;
use App\Controllers\CommentController;
    use App\Controllers\ContactController;
    use App\Controllers\HomePageController;
use App\Controllers\PostController;
    use App\Controllers\RouterController;
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
            $authController->userSignIn();
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
			$adminPostController = new AdminPostController();
            $adminPostController->displayPostsPage();
			break;
		case 'single-post-page':
			$postPage = new AdminPostController();
			$postPage->displayOnePostById();
			break;
        case 'new-post-page':
            $postController = new PostController();
            $postController->displayNewPostPage();
            break;
        case 'send-new-post':
            $postController = new PostController();
            $postController->createPost();
            break;
        case 'update-post-page':
            $postController = new PostController();
            $postController->updatePostPage();
            break;
        case 'send-update-post':
            $postController = new PostController();
            $postController->updatePost();
            break;
        case 'delete-post':
            $postController = new PostController();
            $postController->deletePost();
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
        case "send-message":
            $contactController = new ContactController();
            $contactController->sendEmail();
            break;
        case "posts-page":
            $postController = new PostController();
            $postController->displayPostsPage();
            break;
		default:
            $notFoundPage = new RouterController();
            $notFoundPage->getNotFoundPage();
            break;
	}

} else {
	try {
	$homePage = new HomePageController();
		$homePage->getHomePage();

	} catch (Exception $exception) {
        $notFoundPage = new RouterController();
        $notFoundPage->getNotFoundPage($exception->getMessage());

	}
}