<?php

class User
{
    var $firstName;
    var $lastName;
    var $userName;

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

class Customer extends User
{
}

$customer = new Customer;
$customer->firstName = 'Haha';
$customer->lastName = 'Hihi';

echo $customer->fullName() . '<br>';

if (is_subclass_of($customer, 'User')) {
    echo "Instance Customer merupakan subclass Class User <br>";
}

$parents = class_parents($customer);
echo implode(', ', $parents);
