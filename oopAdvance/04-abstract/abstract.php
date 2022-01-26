<?php

abstract class Database
{
    abstract public function connectiion();

    public function disconnect()
    {
        // implementation
    }
}

class Model extends Database
{
    public function connection()
    {
        //
    }
}

$model = new Model();
