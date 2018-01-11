<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;

class AuthenticateController extends Controller
{
	public function login(Request $request)
	{
		$rules = [
			'email'    => 'required|email',
			'password' => 'required'
		];

		$this->validate($request, $rules);

		$credentials = $request->only('email', 'password');

		try {
			if(!$token = JWTAuth::attempt($credentials)) {
				return response()->json(['error' => 'Invalid login credential'], 401);
			}
		} catch(JWTException $e) {
			return response()->json(['error' => 'Could not create token'], 500);
		}

		$user = $request->user();

		return response()->json(compact('token', 'user'));
	}


    public function register(Request $request)
    {
        $rules = [
            'name'  => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ];

        $this->validate($request, $rules);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $credentials = $request->only('email', 'password');

        try {
            if(!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid login credential'], 401);
            }
        } catch(JWTException $e) {
            return response()->json(['error' => 'Could not create token'], 500);
        }

        $user = $request->user();

        return response()->json(compact('token', 'user'));
    }
}