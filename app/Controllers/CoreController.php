<?php
declare(strict_types=1);
namespace App\Controllers;

use App\Services\UserService;
use Exception;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

abstract class CoreController
{
	protected object $ownerUser;
	private string $directory;
	private FilesystemLoader $loader;
	protected Environment $twigEnvironment;
	// parse and clean the base url before index.php and store it in BASE_URI key on
	// the $_SERVER['BASE_URI'] global variable for link and script html entities
	public function __construct()
	{

		try {
			$this->ownerUser = UserService::getOneUserByEmail("contact@mickael-geerardyn.com");

			$this->directory = dirname(__DIR__, 1);


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

			$this->loader = new FilesystemLoader($this->directory .'\templates');

			$this->twigEnvironment = new Environment($this->loader, [
				'cache' => $this->directory .'/var/cache',
				'debug' => true,
			]);

		} catch (Exception|LoaderError|RuntimeError|SyntaxError $exception){
			$this->twigEnvironment->render('/main/landing-blog.html.twig', ['error' => $exception->getMessage()]);
		}

	}

}