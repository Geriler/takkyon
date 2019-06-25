<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EarlierController extends Controller
{
    public function changeEmailAndPassword() {
		$email = $_POST['email'];
		$password = $_POST['password'];

		$user = Auth::user();
		$user->email = $email;
		$user->password = Hash::make($password);
		$user->earlier_login = 1;
		$user->save();
		return redirect('/home');
	}
}
