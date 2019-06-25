<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EarlierController extends Controller
{
    public function changeEmailAndPassword() {
		$surname = $_POST['surname'];
		$name = $_POST['name'];
    	$email = $_POST['email'];
		$password = $_POST['password'];

		$user = Auth::user();
		$user->surname = $surname;
		$user->name = $name;
		$user->email = $email;
		$user->password = Hash::make($password);
		$user->save();
		return redirect('/home');
	}
}
