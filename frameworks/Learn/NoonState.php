<?php
namespace Framelibs\Learn;

class NoonState extends State
{

    public function writeProgram(Worker $worker)
    {
        if ($worker->hour < 13) {
            echo "当前时间：{$worker->hour}点 饿了，吃午饭；犯困，午休。<br>";
        } else {
            $worker->setState(new AfternoonState());
            $worker->writeProgram();
        }
    }
}