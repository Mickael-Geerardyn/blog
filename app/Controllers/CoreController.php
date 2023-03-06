<?php
declare(strict_types=1);
namespace App\Controllers;

use App\Services\UserService;
use Exception;

abstract class CoreController
{
	// parse and clean the base url before index.php and store it in BASE_URI key on
	// the $_SERVER['BASE_URI'] global variable for link and script html entities
	public function __construct()
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

		} catch (Exception $exception){
			self::pageToDisplay('landing-blog', informations: ['error' => $exception->getMessage()]);
		}

	}

	/**
	 * @param string $path
	 * @param object|array|null $objectData
	 * @param array|null $informations
	 * @return void
	 * @throws Exception
	 */
		public static function pageToDisplay(string $path, object|array $objectData = null, array $informations = null, ): void
	{
		try{
			$adminUserObject = UserService::getOwnerOfTheWebsite('contact@mickael-geerardyn.com');

		} catch (Exception $exception){
			self::pageToDisplay('landing-blog', ['error' => $exception->getMessage()]);
		}

		require '../app/templates/header.tpl.php';
		require '../app/templates/navbar.tpl.php';
		require '../app/templates/'.$path.'.tpl.php';
		require '../app/templates/footer.tpl.php';
		require '../app/templates/modals.tpl.php';
		require '../app/templates/scripts.tpl.php';
		require_once "../app/templates/layout.php";
	}
}