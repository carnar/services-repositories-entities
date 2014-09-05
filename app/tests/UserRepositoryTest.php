<?php

use Mobkly\Entities\User;
use Mobkly\Repositories\UserRepository; 

/**
 * TODO: Use mockery instead of database
 */
class UserRepositoryTest extends TestCase {

    public function test_save_user_by_user_repository()
    {
        if($user = User::where('email', '=', 'cnarez@clasificados.com')->first())
        {
                $user->delete();
        }

        $user = new User;
        $user->username = 'carnar';
        $user->email = 'cnarez@clasificados.com';

        $repo = new UserRepository;
        $response = $repo->register($user);

        $this->assertTrue($response);

    }

    public function test_save_user_by_user_repository_and_compare_usernames()
    {
        if($user = User::where('email', '=', 'cnarez@clasificados.com')->first())
        {
                $user->delete();
        }
        
        $user = new User;
        $user->username = 'carnar';
        $user->email = 'cnarez@clasificados.com';

        $repo = new UserRepository;
        $response = $repo->register($user);

        $dbUser = User::where('email', '=', 'cnarez@clasificados.com')->first();

        $this->assertEquals('carnar', $dbUser->username);
    }    

}