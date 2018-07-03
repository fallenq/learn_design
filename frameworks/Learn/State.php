<?php
namespace Framelibs\Learn;

abstract class State
{
    public abstract function writeProgram(Worker $worker);
}