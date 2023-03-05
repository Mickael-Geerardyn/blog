<?php

namespace App\Controllers\Admin;

use App\Models\RoleModel;
use App\Services\RoleExceptions;
use Exception;

class AdminRoleController extends AdminCoreController
{
	/**
	 * @return object|bool
	 */
	public function getAllRoles(): object|bool
	{
		try
		{
			$getAllRoles = new RoleModel();

			return $getAllRoles->getAllRoles();

		} catch (RoleExceptions $roleExceptions) {

			self::displayCalledPage('landing-dashboard', $_SESSION['userObject']);
			return false;
		}
	}

	/**
	 * @param string $roleTitle
	 * @return object|bool
	 */
	public function getOneRoleByTitle(string $roleTitle): object|bool
	{
		try {
			$newRole = new RoleModel();

			return $newRole->getOneRoleByTitle($roleTitle);

		}catch(RoleExceptions|Exception $Exceptions)
		{
			self::displayCalledPage('form-validation', $_SESSION['userObject']);
			return false;
		}
	}
}