<?php namespace Mobkly\Services;

use Mobkly\Repositories\UserRepository;
use Mobkly\Interfaces\UserEntityInterface;
use Mobkly\Interfaces\UserRepositoryInterface;

class RegisterService {

    protected $repository;

    function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function register(UserEntityInterface $user)
    {
        return $this->repository->register($user);
    }

}