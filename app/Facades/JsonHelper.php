<?php namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class JsonHelper extends Facade {

    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor() {
        return 'helper.json';
    }

}
