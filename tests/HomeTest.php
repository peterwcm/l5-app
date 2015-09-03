<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomeTest extends TestCase
{
    /**
     * Testing the front-end of the home page.
     *
     * @return void
     */
    public function testAppearance()
    {
        $this->visit('/')->see('Laravel');
    }
}
