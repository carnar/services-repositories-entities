<?php namespace Mobkly\Repositories;

use Mobkly\Interfaces\UserEntityInterface;
use Mobkly\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {

    public function register(UserEntityInterface $user)
    {
        error_log('User was created');

        return $user->save();
    }

}