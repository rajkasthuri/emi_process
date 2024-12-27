<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Auth;
use Log;

class LoginController extends Controller
{
    public function login() {
		
		return view('login');
	}
	
	public function postLogin(Request $request) {
		
		$validator = Validator::make($request->all(),[
			'username' => 'required',
			'pwd' => 'required',
		]);
		
		if ($validator->fails()) {
			return response()->json(['status'=>'Fail','message'=>'Please fill the mandatory values']);
        }
		
		$credentials = [
			'name' => $request['username'],
			'password' => $request['pwd'],
		];

		if (Auth::attempt($credentials)) {
			return response()->json(['status'=>'Success','message'=>'Login Success']);
		} else {
			return response()->json(['status'=>'Fail','message'=>'Invalid Credential']);
		}
		
	}
	
	public function logout() {

		Auth::logout();
		return redirect('/');
	}
}
