<?php
/**
 * 测试类A
 * Date: 2018/7/11
 * Time: 15:15
 */
namespace Framelibs\Test;

class A
{
    protected $cObj;

    public function __construct(C $c)
    {
        $this->cObj = $c;
    }

    public function aa()
    {
        echo 'This is A->test';
    }

    public function aac()
    {
        $this->cObj->cc();
    }
}