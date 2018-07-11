<?php
/**
 * Date: 2018/7/11
 * Time: 15:22
 */
namespace Framelibs\Test;

class B
{
    protected $aObj;

    public function __construct(A $a)
    {
        $this->aObj = $a;
    }

    public function bb(C $c, $b)
    {
        $c->cc();
        echo "\r\n";
        echo 'params:'.$b;
    }

    public function bbb()
    {
        $this->aObj->aac();
    }
}