<?php

namespace App\Controllers\Admin;

use App\Models\RoleModel;
use App\Services\RoleExceptions;
use Exception;

class AdminRoleController extends AdminCoreController
{

	/**
	 * @param string $roleTitle
	 * @return object|bool
	 */
	public function getOneRoleByTitle(string $roleTitle): object|bool
	{
		try {
			$newRole = new RoleModel();

			return $newRole->getOneRoleByTitle($roleTitle);

		}catch(Exception $exceptions)
		{
			$this->twigEnvironment->display("/adminMain/landing-dashboard.html.twig", ["error" => $exceptions->getMessage()]);
			return false;
		}
	}
}