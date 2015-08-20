<?php

use Mobkly\Entities\User;
use Mobkly\Repositories\UserRepository;

/**
 * TODO: Use mockery instead of database
 */
class UserRepositoryTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    public function tearDown()
    {
        Artisan::call('migrate:rollback');
    }

    public function test_verify_data_type_returned_by_register()
    {
        $user = new User;
        $user->username = 'carnar';
        $user->email = 'carnar@example.com';

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
