<?php

class Student
{
    var $name;
    var $country = 'None';

    function sayHello()
    {
        return "Hello, world!";
    }
}

$student1 = new Student;
$student2 = new Student;

$student1->name = "Dede";
$student2->name = "Sunarwan";

echo $student1->name . '<br>' . $student2->name . '<br>';
echo $student1->sayHello() . '<br>' . $student2->sayHello() . '<br>';

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
