<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Profiles;

class LoginController extends Controller
{
    public function val(Request $reqest){
		$this->validate($reqest, [
			'username' => 'required',
			'password' => 'required'
		]);
		return redirect('/home');
	}
}
