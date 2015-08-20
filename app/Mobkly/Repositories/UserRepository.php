<?php namespace Mobkly\Repositories;

use Mobkly\Interfaces\UserEntityInterface;
use Mobkly\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface {

    public function register(UserEntityInterface $user)
    {
        return $user->save();
    }

}