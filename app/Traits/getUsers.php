<?php

namespace App\Traits;


use App\User;
use Config;

trait getUsers
{

	/* Get all users */
	public function allUsers()
	{

		$users = User::all();

		return $users;

	}

	/* Get manager */
	public function getManagers()
	{

		$managers = $this->getUserByRoles(Config::get('constants.roles.MANAGER'));

		return $managers;
	}

	/* Get Staff */
	public function getStaffs()
	{

		$staffs = $this->getUserByRoles(Config::get('constants.roles.STAFF'));
 
		return $staffs;
	}

	/* Get Managers and Staffs 
	   Convert the data in the array
	*/
	public function getManagerAndStaff()
	{
		$staffs = $this->getStaffs()->toArray();
		$managers = $this->getManagers()->toArray();

		$all = array_merge($managers, $staffs);


		return $all;
	}

	/* Get users base on request */
	public function getUserByRoles($role_id)
	{

		$users = User::whereHas('roles', function($q) use ($role_id) { $q->where('id', $role_id); })->get();

		return $users;
	}

}

