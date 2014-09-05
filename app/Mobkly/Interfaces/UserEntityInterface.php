<?php namespace Mobkly\Interfaces;

interface UserEntityInterface {

    /**
     * Persist the user
     *
     * @return bool
     */
    public function save(array $options = array());

}