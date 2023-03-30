<?php
declare(strict_types=1);

namespace App\Controllers;

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
    protected array $latestPosts = [];
	protected Environment $twigEnvironment;
	// parse and clean the base url before index.php and store it in BASE_URI key on
	// the $_SERVER['BASE_URI'] global variable for link and script html entities
	public function __construct()
	{
        try {
            $this->directory = dirname(__DIR__, 1);

            $this->loader = new FilesystemLoader([$this->directory . '/templates/main', $this->directory . '/templates/login',
                $this->directory . '/templates/admin']);

            $this->twigEnvironment = new Environment($this->loader, [
                'cache' => $this->directory . '/var/cache',
                'debug' => true,
            ]);

            $this->twigEnvironment->addExtension(new DebugExtension());
            $this->twigEnvironment->addGlobal('ownerUser', UserService::getOneUserByEmail(self::OWNER_USER_EMAIL));
            $this->ownerUser = UserService::getOneUserByEmail(self::OWNER_USER_EMAIL);

            self::storeBaseUriInGlobalServer();

            $this->twigEnvironment->addGlobal('_SERVER', $_SERVER);
            $this->latestPosts = PostService::getHomePageRecentPosts();
            self::insertPostAuthorAndPostCommentsInArray();
            self::insertCommentAuthorInCommentObject();
        }catch(Exception $exception){
            echo $exception->getMessage();
        }
	}

    /**
     * @return bool
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
            echo $exception->getMessage();
            return false;
        }
    }

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function insertPostAuthorAndPostCommentsInArray(): bool
    {
        try {
            foreach ($this->latestPosts as $post)
            {
                $post->postAuthor = UserService::getPostAuthorById($post->getUserId());
                $post->postComments = CommentService::getPostComments($post->getId());
            }
            return true;
        } catch (Exception $exception) {
            $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            return false;
        }
    }

    /**
     * @return bool
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function insertCommentAuthorInCommentObject(): bool
    {
        try {
            foreach ($this->latestPosts as $post){
                foreach($post->postComments as $comment){
                    $comment->commentAuthor = CommentService::getAuthorComments($comment->getUserId());
                }
            }

            return true;

        } catch (Exception $exception) {

            $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            return false;

        }
    }
}