<?php 

use Mobkly\Entities\User;
use Mobkly\Services\RegisterService;
use Mobkly\Repositories\UserRepository;

/**
 * TODO: Use mockery instead of database
 */
class ResgisterUserTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
        
        DB::beginTransaction();        
    }

    public function test_register_user()
    {
        $user = new User;
        $user->username = 'carnar';
        $user->email = 'cnarez@example.com';

        $registerService = new RegisterService(new UserRepository);

        $response = $registerService->register($user);

        $this->assertTrue($response);
    }
    
}