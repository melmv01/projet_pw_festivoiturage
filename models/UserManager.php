<?php
class UserManager extends Model
{
    public function verifyUser($login, $pwd)
    {
        return $this->getOne('compte', $login, $pwd);
    }

    public function getUsers()
    {

        return $this->getAll('compte', 'User');
    }

    public function getNumber()
    {

        return $this->countAll('compte');
    }
    public function createUser($user)
    {
        return $this->createOneUser('compte', $user);
    }
}
