<?php
namespace Framelibs\Learn;

class Worker
{
    private $current;
    private $hour;
    private $TaskFinished = false;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }
        return null;
    }

    public function __construct()
    {
        $this->current = new ForenoonState();
    }

    public function setState(State $state)
    {
        $this->current = $state;
    }

    public function writeProgram()
    {
        $this->current->writeProgram($this);
    }
}