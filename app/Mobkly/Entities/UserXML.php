<?php namespace Mobkly\Entities;

class UserXML implements UserEntityInterface {

    public $username;

    public $email;

    public function save(array $options = array())
    {
        return true;
    }

}