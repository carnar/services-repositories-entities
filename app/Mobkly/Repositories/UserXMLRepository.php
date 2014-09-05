<?php namespace Mobkly\Repositories;

use Mobkly\Interfaces\UserEntityInterface;

class UserXMLRepository implements UserRepositoryInterface {

    public function register(UserEntityInterface $user)
    {
        return $user->save();
    }

}