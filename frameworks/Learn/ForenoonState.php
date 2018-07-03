<?php
namespace Framelibs\Learn;

class ForenoonState extends State
{
    public  function writeProgram(Worker $worker)
    {
        if ($worker->hour < 12) {
            echo "当前时间：{$worker->hour}点 上午工作，精神百倍。<br/>";
        } else {
            $worker->setState(new NoonState());
            $worker->writeProgram();
        }
    }
}