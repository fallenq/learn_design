<?php
namespace Framelibs\Learn;

class RestState extends State
{

    public function writeProgram(Worker $worker)
    {
        echo "当前时间：{$worker->hour}点下班回家了。<br>";
    }
}