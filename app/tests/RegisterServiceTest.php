<?php 

use Mobkly\Entities\User;
use Mobkly\Services\RegisterService;
use Mobkly\Repositories\UserRepository;

/**
 * TODO: Use mockery instead of database
 */
class ResgisterUserTest extends TestCase {

    public function test_register_user()
    {
        //
        // TODO: Add Mocks
        //
         
        if($user = User::where('email', '=', 'cnarez@clasificados.com')->first())
        {
                $user->delete();
        }

        $user = new User;
        $user->username = 'carnar';
        $user->email = 'cnarez@clasificados.com';

        $registerService = new RegisterService(new UserRepository);

        $response = $registerService->register($user);

        $this->assertTrue($response);
    }
    
}