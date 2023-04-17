<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\UserModel;
use App\Services\CommentService;
use App\Services\PostService;
use App\Services\UserService;
use Exception;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

abstract class CoreController
{
	protected const OWNER_USER_EMAIL = "contact@mickael-geerardyn.com";
	protected object $ownerUser;
	protected string $directory;
	private FilesystemLoader $loader;
	protected Environment $twigEnvironment;
	// parse and clean the base url before index.php and store it in BASE_URI key on
	// the $_SERVER['BASE_URI'] global variable for link and script html entities
    /**
     * @throws Exception
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
	public function __construct()
	{
        try {
            $this->directory = dirname(__DIR__, 1);

            $this->loader = new FilesystemLoader([$this->directory . '/templates', $this->directory . '/templates/main', $this->directory . '/templates/login',
                $this->directory . '/templates/admin']);

            $this->twigEnvironment = new Environment($this->loader, [
                'debug' => true,
            ]);

            $this->twigEnvironment->addExtension(new DebugExtension());
            $this->ownerUser = UserService::getOneUserByEmail(self::OWNER_USER_EMAIL);

            $this->twigEnvironment->addGlobal('ownerUser', $this->ownerUser);
            $this->twigEnvironment->addGlobal('_SERVER', $_SERVER);
            $this->twigEnvironment->addGlobal('ROLE_ADMIN', UserModel::ROLE_ADMIN);

            self::storeBaseUriInGlobalServer();
            self::storeInAddGlobalIfSessionIsNotEmpty();
            self::storeSuccessOrErrorMessageInAddGlobalSession();

        }catch(Exception $exception){
            $this->twigEnvironment->addGlobal("_SESSION", $_SESSION["error"] = $exception->getMessage());

            $this->twigEnvironment->display("/landing-blog.html.twig");
        }
	}

    /**
     * @return bool
     * @throws Exception
     */
    protected function storeBaseUriInGlobalServer(): bool
    {
        try {
            /**
             * filter_input is used to check the url contained in the 'REQUEST_URI'
             * key which is contained in the INPUT_SERVER const
             * parse_url is used to check if "index.php" is inside the url
             */
            $stringIndexToRemoveInPath = strpos(parse_url(filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_URL), PHP_URL_PATH), "index.php");

            if ($stringIndexToRemoveInPath) {
                $_SERVER['BASE_URI'] = substr($_SERVER['REQUEST_URI'], 0, $stringIndexToRemoveInPath);
            } else {
                $_SERVER['BASE_URI'] = $_SERVER['REQUEST_URI'];
            }

            return true;
        } catch (Exception $exception){
            $this->twigEnvironment->addGlobal("_SESSION", $_SESSION["error"] = $exception->getMessage());

            $this->twigEnvironment->display("/landing-blog.html.twig");
            return false;
        }
    }

    /**
     * @return bool
     * @throws Exception
     */
    protected function storeInAddGlobalIfSessionIsNotEmpty():bool
    {
        try {
            if(!empty($_SESSION["userObject"]) && !empty($_SESSION["CSRFToken"]))
            {
                $this->twigEnvironment->addGlobal("_SESSION", $_SESSION);

            }
        }catch(Exception $exception){
            $this->twigEnvironment->addGlobal("_SESSION", $_SESSION["error"] = $exception->getMessage());

            $this->twigEnvironment->display("/landing-blog.html.twig");
            return false;
        }
        return true;
    }

    /**
     * @return bool
     * @throws Exception
     */
    protected function storeSuccessOrErrorMessageInAddGlobalSession():bool
    {
        try {
            if(!empty($_SESSION["success"]) || !empty($_SESSION["error"]))
            {

                $this->twigEnvironment->addGlobal("_SESSION", $_SESSION);
                unset($_SESSION["success"]);
                unset($_SESSION["error"]);
            }
        }catch(Exception $exception){
            $this->twigEnvironment->addGlobal("_SESSION", $_SESSION["error"] = $exception->getMessage());

            RouterController::redirectToHomepage();
            unset($_SESSION["error"]);
            return false;
        }
        return true;
    }

    /**
     * @param array $postsArray
     * @return bool
     * @throws Exception
     */
    public function insertPostAuthorAndPostCommentsInArray(array $postsArray): bool
    {
        try {
            foreach ($postsArray as $post)
            {
                $post->postAuthor = UserService::getPostAuthorById($post->getUserId());
                $post->postComments = CommentService::getPostComments($post->getId());
            }
            return true;
        } catch (Exception $exception) {
            $this->twigEnvironment->addGlobal("_SESSION", $_SESSION["error"] = $exception->getMessage());

            RouterController::redirectToHomepage();
            return false;
        }
    }

    /**
     * @param array $postsArray
     * @return bool
     * @throws Exception
     */
    public function insertCommentAuthorInCommentObject(array $postsArray): bool
    {
        try {
            foreach ($postsArray as $post){
                foreach($post->postComments as $comment){
                    $comment->commentAuthor = CommentService::getAuthorComments($comment->getUserId());
                }
            }

            return true;

        } catch (Exception $exception) {
            $this->twigEnvironment->addGlobal("_SESSION", $_SESSION["error"] = $exception->getMessage());

            RouterController::redirectToHomepage();
            return false;

        }
    }
}