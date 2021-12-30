<?php

class User
{
    public $firstName;
    public $lastName;
    public $userName;

    protected $regId = 1;
    private $level = 'User';

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    protected function sayProtect()
    {
        return 'Hello, Protected';
    }

    private function sayPrivate()
    {
        return 'Hello, Private';
    }
}

class Customer extends User
{
    public function sayParent()
    {
        return $this->sayProtect();
    }
}

$user = new User;
$user->firstName = 'User';
$user->lastName = 'Class';

echo $user->redId . '<br>';
echo $user->level . '<br>';

echo $user->fullName() . '<br>';
echo $user->sayProtect() . '<br>';
echo $user->sayPrivate() . '<br>';

$customer = new Customer;
$customer->firstName = 'Haha';
$customer->lastName = 'Hihi';

echo $customer->fullName() . '<br>';
echo $customer->sayParent() . '<br>';
