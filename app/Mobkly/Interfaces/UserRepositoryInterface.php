<?php namespace Mobkly\Interfaces;

use Mobkly\Interfaces\UserEntityInterface;

interface UserRepositoryInterface {

    /**
     * Regiter an user
     *
     * @param  User $user
     * @return bool
     */
    public function register(UserEntityInterface $user);

}