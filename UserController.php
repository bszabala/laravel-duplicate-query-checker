<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
	$duplicates = [];
	$uniques = [];

	$users = User::select('Id', 'FirstName', 'LastName', 'DateCreated')->get();

	$uniques = $users->unique(['FirstName', 'LastName'])->values()->all();
	$duplicates = $users->duplicates(['FirstName', 'LastName']);

	return [
		'duplicateUsers' => $duplicates,
		'uniqueUsers' 	 => $uniques
	];
}
