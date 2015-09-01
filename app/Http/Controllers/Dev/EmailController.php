<?php

namespace App\Http\Controllers\Dev;

class EmailController extends DevController
{
    public function showPasswordReminder()
    {
        return View::make('emails.auth.reminder', array(
            'token' => 'ce5a8751d0c59f90329fd1efb367ec605a650305'
        ));
    }
    
    public function showEmailVerification()
    {
        return View::make('emails.auth.verification', array(
            'code' => 'FlDUfiv3wIK8IoxEciXkpkuQ7HKEirw8', 
            'name' => 'User',
            'user_id' => 1
        ));
    }
}
