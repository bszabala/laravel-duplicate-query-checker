<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
	$users = User::select('Id', 'FirstName', 'LastName', 'DateCreated')->where('');
	$duplicates = ;
	$uniques =;

	return ['duplicateUsers' => $duplicates, 'uniqueUsers' => $uniques];
}
