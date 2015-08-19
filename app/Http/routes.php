<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Models\User;

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));

Route::controllers([
	'password' => 'Auth\PasswordController',
]);

/*
|--------------------------------------------------------------------------
| Dev Email
|--------------------------------------------------------------------------
*/

Route::get('email/password-reminder', array('as' => 'email.password-reminder',
    'uses' => 'DevEmailController@showPasswordReminder'));
Route::get('email/verify-email', array('as' => 'email.verify-email',
    'uses' => 'DevEmailController@showEmailVerification'));

// Route group for API versioning
Route::group(array(
        'prefix' => 'api/v1',
        'middleware' => 'api.verify',
    ), function() {

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    */
    Route::group(array('prefix' => 'auth'), function() {
        // Facebook Login
        Route::post('fb-login', array('as' => 'fb-login', 'uses' => 'Auth\AuthController@fbLogin'));
    });

    /*
    |--------------------------------------------------------------------------
    | Authenticated
    |--------------------------------------------------------------------------
    */
    Route::group(array(
        'prefix' => 'me',
        'middleware' => 'token.auth',
    ), function() {
        Route::get('user/fetch/{id}', array('as' => 'user.fetch', 'uses' => 'UserController@fetch'));
        Route::put('user/update', array('as' => 'user.update', 'uses' => 'UserController@update'));


        Route::get('test', function () {
            $token = JWTAuth::getToken();
            $user = JWTAuth::toUser($token);
            return [$user];
//            $user = JWTAuth::authenticate($token);
//            if (!$user) {
//                return $this->respond('tymon.jwt.user_not_found', 'user_not_found', 404);
//            }

//            return JsonHelper::getSuccessResponse([
//                'email' => $user->email,
//                'registered_at' => $user->created_at->toDateTimeString()
//            ]);
        });

    });

//    Route::get('/restricted2', function () {
//        try {
//            JWTAuth::parseToken()->toUser();
//        } catch (Exception $e) {
//            return Response::json(['error' => $e->getMessage()], HttpResponse::HTTP_UNAUTHORIZED);
//        }
//
//        return ['data' => 'This has come from a dedicated API subdomain with restricted access.'];
//    });

    /*
    |--------------------------------------------------------------------------
    | Dev
    |--------------------------------------------------------------------------
    */
    Route::group(array('prefix' => 'dev'), function() {
        // Facebook Login
        Route::get('fb-login', array('as' => 'fb-login', 'uses' => 'Dev\AuthController@fbLogin'));
    });

    Route::resource('user', 'UserController');

    Route::resource('photo', 'PhotoController');

    Route::get('signup', function () {
        $credentials = Input::only('email', 'password');

        try {
            $user = User::create($credentials);
        } catch (Exception $e) {
            return Response::json(['error' => 'User already exists.'], HttpResponse::HTTP_CONFLICT);
        }

        $token = JWTAuth::fromUser($user);

        return Response::json(compact('token'));
    });

    Route::get('signin', function () {
        $credentials = Input::only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return Response::json(false, HttpResponse::HTTP_UNAUTHORIZED);
        }

        return JsonHelper::getSuccessResponse([
            'token' => $token
        ]);
    });
});
