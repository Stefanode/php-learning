<?php

class Todo
{
    public $name;

    public $due;

    public $completed;

    public function __construct($name, $due, $completed = false)
    {
        $this->name = $name;
        $this->due = $due;
        $this->completed = $completed;
    }
}

$task = new Todo('Finish work', '2018', true);