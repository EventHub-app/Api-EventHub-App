<?php
namespace App\Entities;
class  User
{
    public string $email;
    public string $password;
    public string $name;

    public function __construct($email, $name, $password)
    {
        $this->email = $email;
        $this->name = $name;
        $this->password = $password;
    }
}
