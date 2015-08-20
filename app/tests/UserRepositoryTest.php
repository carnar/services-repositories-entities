<?php

use Mobkly\Entities\User;
use Mobkly\Repositories\UserRepository; 

/**
 * TODO: Use mockery instead of database
 */
class UserRepositoryTest extends TestCase {

    public function setUp()
    {
        parent::setUp();
        DB::beginTransaction();        
    }

    public function test_verify_data_type_returned_by_register()
    {
        $user = new User;
        $user->username = 'carnar';

        $repository = new UserRepository;
        $expected = $repository->register($user);

        $this->assertTrue($expected);
    }

    /**
     * @expectedException ErrorException
     */
    public function test_throw_an_exception_with_array_as_register_parameter()
    {
        $user = [];
        $repository = new UserRepository;
        $expected = $repository->register($user);
    }
}