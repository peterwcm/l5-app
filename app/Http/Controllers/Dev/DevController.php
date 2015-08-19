<?php namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;

class DevController extends Controller {

    public function __construct() {
        if (! \App::environment('local')) {
            abort(404);
        }
    }

}
