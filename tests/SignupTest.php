<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SignupTest extends TestCase
{
    use DatabaseTransactions;

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
            ->type('paulwhite@l5-app.com', 'email')
            ->type('password', 'password')
            ->type('password', 'password_confirmation')
            ->type('Paul', 'first_name')
            ->type('White', 'last_name')
            ->press('Sign Up')
            ->seeInDatabase('users', ['email' => 'paulwhite@l5-app.com']);
//            ->seePageIs('/dashboard');
    }
}
