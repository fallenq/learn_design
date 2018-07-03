<?php
namespace Framelibs\Learn;

class EveningState extends State
{

    public function writeProgram(Worker $worker)
    {
        if ($worker->taskFinished) {
            $worker->setState(new RestState());
            $worker->writeProgram();
        } else {
            if ($worker->hour < 21) {
                echo "当前时间：{$worker->hour}点，加班哦，疲劳至极。<br>";
            } else {
                $worker->setState(new SleepingState());
                $worker->writeProgram();
            }
        }
    }
}