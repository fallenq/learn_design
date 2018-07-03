<?php
namespace Framelibs\Learn;

class AfternoonState extends State
{

    public function writeProgram(Worker $worker)
    {
        if ($worker->hour < 17) {
             echo "当前时间：{$worker->hour}点，下午工作状态还不错，继续努力。<br>";
        } else {
            $worker->setState(new EveningState());
            $worker->writeProgram();
        }
    }
}