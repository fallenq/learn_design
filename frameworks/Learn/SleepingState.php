<?php
namespace Framelibs\Learn;

class SleepingState extends State
{

    public function writeProgram(Worker $worker)
    {
        echo "当前时间：{$worker->hour}点，不行了，睡着了。<br>";
    }
}