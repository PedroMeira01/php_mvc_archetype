<?php

class User 
{
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct(string $id, string $name, string $email, string $password) 
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

}