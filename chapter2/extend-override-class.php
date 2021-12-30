<?php

use Customer as GlobalCustomer;

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
    var $city;
    var $county;

    function location()
    {
        return $this->city . ', ' . $this->county;
    }

    function fullName()
    {
        return $this->firstName . ' ' . $this->lastName . '(Customer)';
    }
}

$user = new User;
$user->firstName = 'Ligo';
$user->lastName = 'Cheng';
$user->city = 'Bandung';
$user->county = 'Indonesia';

$customer = new Customer;
$customer->firstName = 'Haha';
$customer->lastName = 'Hihi';
$customer->city = 'Bandung';
$customer->county = 'Indonesia';

echo $customer->fullName() . '<br>';
echo $customer->location() . '<br>';

echo $user->fullName() . '<br>';
echo $user->location() . '<br>';

if (is_subclass_of($customer, 'User')) {
    echo "Instance Customer merupakan subclass Class User <br>";
}

$parents = class_parents($customer);
echo implode(', ', $parents);
