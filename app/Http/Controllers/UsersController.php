<?php

namespace App\Http\Controllers;
use App\Models\user;

class UsersController extends Controller {
	public function show(User $user) {
		return view('users.show', compact('user'));
	}
}
