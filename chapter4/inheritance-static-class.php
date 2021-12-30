<?php

use Student as GlobalStudent;

class Student
{
    public static $grades = ['SD', 'SMP', 'SMA'];
    private static $totalStudents = 0;

    public static function motto()
    {
        return 'Learn PHP OOP';
    }

    public static function count()
    {
        return self::$totalStudents;
    }

    public static function addstudent()
    {
        return self::$totalStudents++;
    }
}

echo Student::$grades[2] . '<br>';
echo Student::motto() . '<br>';

// echo Student::$totalStudents;

echo Student::count() . '<br>';
Student::addStudent();
echo Student::count() . '<br>';

class PartTimeStudent extends Student
{
}

echo PartTimeStudent::$grades[1] . '<br>';
echo PartTimeStudent::motto() . '<br>';

PartTimeStudent::$grades[] = 'Alumni';
echo implode(', ', Student::$grades);

Student::addStudent();
Student::addStudent();
PartTimeStudent::addStudent();

echo Student::count() . '<br>';
echo PartTimeStudent::count() . '<br>';
