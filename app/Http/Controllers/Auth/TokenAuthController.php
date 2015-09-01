<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use \Input;
use \Config;
use \Hash;
use \JWTAuth;
use \JsonHelper;
use App\Models\User;

class TokenController extends Controller
{
	public function __construct() { }

    /**
     * Show the signup screen to the user.
     *
     * @return Response
     */
    public function signup()
    {
        return view('auth.signup');
    }

    /**
     * Show the login screen to the user.
     *
     * @return Response
     */
    public function login()
    {
        return view('auth.login');
    }

    public function fbLogin() {
        $fb_user_id = Input::get('fb_user_id');
        $email = Input::get('email');
        $first_name = Input::get('first_name');
        $last_name = Input::get('last_name');
        $username = Input::get('username');
        $avatar = Input::get('avatar');
        $password = str_random(Config::get('validate.password_length_min'));

        $user = User::where('email', $email)->first();
        // User doesn't exist in the database, create a new one.
        if (!$user) {
            // Create a new user.
            $user = User::create([
                'email' => $email,
                'password' => Hash::make($password),
                'first_name' => $first_name,
                'last_name' => $last_name,
                'username' => $username,
                'avatar' => $avatar,
                'fb_user_id' => $fb_user_id,
                'is_email_verified' => 1,
            ]);
        }
        // User exists in the database, merge data if needed.
        else {

        }

        $token = JWTAuth::fromUser($user);

        return JsonHelper::getSuccessResponse([
//            'user' => $user,
            'token' => $token,
        ]);
    }
}
