<?php
/**
 * Date: 2018/7/11
 * Time: 15:29
 */
namespace App\Http\Controllers\Ioc;

use App\Http\Controllers\Controller;
use Framelibs\Ioc\Ioc;
use Framelibs\Test\B;

class IocController extends Controller
{
    public function index()
    {
        $bOjbj = Ioc::getInstance(B::class);
        $bOjbj->bbb();
        Ioc::make(B::class, 'bb', ['this is param b']);
    }
}