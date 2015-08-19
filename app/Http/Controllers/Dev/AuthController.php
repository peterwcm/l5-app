<?php namespace App\Http\Controllers\Dev;

class AuthController extends DevController {

    public function fbLogin()
    {
        return \View::make('dev.fb-login');
    }

}
