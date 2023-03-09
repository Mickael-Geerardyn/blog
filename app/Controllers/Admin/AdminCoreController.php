<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

abstract class AdminCoreController
{

// parse and clean the base url before index.php and store it in BASE_URI key on
// the $_SERVER global variable for link and script html entities
    public function __construct()
    {
        /**
         * filter_input is used to check the url contained in the 'REQUEST_URI'
         * key which is contained in the INPUT_SERVER const
         * parse_url is used to check if "index.php" is inside the url
         */
        $stringIndexToRemoveInPath = strpos(parse_url(filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_URL), PHP_URL_PATH), "index.php");
        if ($stringIndexToRemoveInPath)
        {
            $_SERVER['BASE_URI'] = substr($_SERVER['REQUEST_URI'],0, $stringIndexToRemoveInPath);
        } else {
            $_SERVER['BASE_URI'] = $_SERVER['REQUEST_URI'];
        }
    }

	/**
	 * @param string $template
	 * @param object|array|null $objectData
	 * @param array|null $informations
	 * @return void
	 */
	public static function displayCalledPage(string $template, object|array $objectData = null, array $informations = null): void
	{
		if(is_array($objectData)){
			extract($objectData);
		}
		require_once 'src/templates/admin/base.html.twig';
		require_once 'src/templates/admin/navbar.html.twig';
		require_once 'src/templates/admin/' . $template . '.tpl.php';
		require_once 'src/templates/admin/body-scripts.html.twig';
	}

	/**
	 * @param string $template
	 * @param object|null $ObjectData
	 * @param array|null $informations
	 * @return void
	 */
	public static function displayLoginPage(string $template, object $ObjectData = null, array $informations = null): void
	{
		require_once 'src/templates/admin/login/base.html.twig';
		require_once 'src/templates/admin/login/navbar.html.twig';
		require_once 'src/templates/admin/login/' . $template . '.tpl.php';
		require_once 'src/templates/admin/login/body-scripts.html.twig';
	}

}

