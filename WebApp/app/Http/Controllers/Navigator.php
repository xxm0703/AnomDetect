<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Navigator extends Controller
{
	public function getDevices()
    {
    	return view('devices');
    }
	public function getHome()
    {
    	return view('main');
    }
	public function getLogin()
    {
    	return view('welcome');
    }
}
