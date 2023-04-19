<?php

namespace App\Controllers\Admin;

use App\Controllers\RouterController;
use App\Models\RoleModel;
use App\Models\UserModel;
use App\Services\UserService;
use Exception;

class AdminRoleController extends AdminCoreController
{

	/**
	 * @param string $roleTitle
	 * @return object|bool
     * @throws Exception
	 */
	public function getOneRoleByTitle(string $roleTitle): object|bool
	{
		try {
            UserService::checkUserRole();
			$newRole = new RoleModel();

			return $newRole->getOneRoleByTitle($roleTitle);

		}catch(Exception $exception)
		{
            self::makeFlashMessage("error", $exception->getMessage());

            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                AdminRouterController::redirectToBlogListPage();
            } else {

                RouterController::redirectToHomepage();
            }
			return false;
		}
	}
}