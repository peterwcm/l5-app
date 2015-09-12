<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SignupTest extends TestCase
{
    /**
     * Testing the front-end of the sign up page.
     *
     * @return void
     */
    public function testAppearance()
    {
        $this->visit('/signup')
            ->see('Sign Up');
    }

    /**
     * Testing the functions of the signup form.
     *
     * @return void
     */
    public function testSignupForm()
    {
        $this->visit('/signup')
            ->type('SIGN UP', 'name')
            ->press('Sign Up')
            ->seePageIs('/dashboard');
    }
}
