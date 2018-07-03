<?php
namespace App\Http\Controllers\Learn;

use App\Http\Controllers\Controller;
use Framelibs\Learn\Worker;

class StateLearnController extends Controller
{
    public function index()
    {
        $activeWorker = new Worker();
        $activeWorker->hour = 9;
        $activeWorker->writeProgram();
        $activeWorker->hour = 10;
        $activeWorker->writeProgram();
        $activeWorker->hour = 12;
        $activeWorker->writeProgram();
        $activeWorker->hour = 13;
        $activeWorker->writeProgram();
        $activeWorker->hour = 14;
        $activeWorker->writeProgram();
        $activeWorker->hour = 17;
        $activeWorker->writeProgram();
        $activeWorker->hour = 19;
        $activeWorker->writeProgram();
        $activeWorker->hour = 22;
        $activeWorker->writeProgram();
    }
}