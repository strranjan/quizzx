<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
	{
		
	}
	
	public function getAllUser(Request $request)
	{
		// $users  = User::all();
		// if(! $users){
		// 	return response()->json([
		// 	    'success' => false,
		// 		'data' => 'Not Found.'
		// 	] , 422);
		// }
		
		// return response()->json([
		//     'succcess' => true,
		// 	'data' => $users
		// ] , 200);
		return view('admin.user_list');
	}
}
