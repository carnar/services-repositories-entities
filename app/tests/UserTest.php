<?php 

use Mobkly\Entities\User;

/**
 * TODO: Use mockery instead of database
 */
class UserTest extends TestCase {

    public function test_save_an_user_with_complete_data()
    {
        User::where('email', '=', 'enner@clasificados.com')->first()->delete();

        $user = new User;
        $user->username = 'enner';
        $user->email = 'enner@clasificados.com';
        $user->save();

        $dbUser = User::where('email', '=', 'enner@clasificados.com')->first();

        $this->assertEquals('enner', $dbUser->username);       
    }

    
}