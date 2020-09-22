<?php


class User
{
    protected $username;
    protected $password;

    public function __construct($name,$pass){
        $this->username=$name;
        $this->password=$pass;
    }

    public function __destruct()
    {

    }


    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }
}

?>