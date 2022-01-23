<?php

use Table as GlobalTable;

trait Log
{
    protected function log($message)
    {
        echo "{$message}\n";
    }
}

class Table
{
    use Log;

    public function save()
    {
        $this->log("create log");
    }
}

(new GlobalTable())->save();
