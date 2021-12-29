<?php

class Student
{
    var $first_name;
    var $last_name;
    var $country = 'None';

    function sayHello()
    {
        return "Hello, world!";
    }

    function fullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

$student1 = new Student;

$student1->first_name = "Dede";
$student1->last_name = "Sunarwan";

echo $student1->fullName() . '<br>';
echo $student1->sayHello() . '<br>';

$class_methods = get_class_methods('Student');
echo "Method milik Student: ";
echo "<pre>";
print_r($class_methods);
echo "</pre>";

if (method_exists('Student', 'sayHello')) {
    echo "Method sayHello tersedia";
} else {
    echo "Method sayHello tidak tersedia";
}
