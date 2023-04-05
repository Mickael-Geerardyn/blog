<?php

namespace App\Controllers\Admin;

use App\Models\RoleModel;
use App\Models\UserModel;
use App\Services\RoleExceptions;
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
            if($_SESSION["userObject"]->getRoleId() === UserModel::ROLE_ADMIN)
            {
                $this->twigEnvironment->display("/adminMain/blog-list.html.twig", ["error" => $exception->getMessage()]);
            } else {

                $this->twigEnvironment->display('/landing-blog.html.twig', ['error' => $exception->getMessage()]);
            }
			return false;
		}
	}
}