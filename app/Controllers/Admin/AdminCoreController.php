<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Services\UserService;
use Exception;
use Twig\Environment;
use Twig\Extension\DebugExtension;
use Twig\Loader\FilesystemLoader;

abstract class AdminCoreController
{
    protected const OWNER_USER_EMAIL = "contact@mickael-geerardyn.com";
    protected string $directory;
    private FilesystemLoader $loader;
    protected Environment $twigEnvironment;
// parse and clean the base url before index.php and store it in BASE_URI key on
// the $_SERVER global variable for link and script html entities
    public function __construct()
    {
        $this->directory = dirname(__DIR__, 2);

        $this->loader = new FilesystemLoader([$this->directory .'/templates/main', $this->directory.'/templates/login',
            $this->directory.'/templates/admin']);

        $this->twigEnvironment = new Environment($this->loader, [
            'debug' => true,
            'auto_reload' => true,
        ]);

        $this->twigEnvironment->addExtension(new DebugExtension());
        $this->twigEnvironment->addGlobal('ownerUser', UserService::getOneUserByEmail(self::OWNER_USER_EMAIL));

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

        $this->twigEnvironment->addGlobal('_SERVER', $_SERVER);
    }
}

