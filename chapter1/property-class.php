<?php

class Student
{
    var $name;
    var $country = 'None';
}

$student1 = new Student;
$student2 = new Student;

$student1->name = "Dede";
$student2->name = "Sunarwan";

echo $student1->name . '<br>' . $student2->name . '<br>';

$class_vars = get_class_vars('Student');
echo "Properti milik Student: ";
echo "<pre>";
print_r($class_vars);
echo "</pre>";

if (class_exists('Student', 'name')) {
    echo "Properti Nama tersedia";
} else {
    echo "Properti Nama tidak tersedia";
}
