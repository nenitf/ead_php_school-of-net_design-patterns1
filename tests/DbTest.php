<?php

namespace SON\Db;

class DbTest extends \PHPUnit\Framework\TestCase
{
    public function testClasseEstaInstanciando()
    {
        $db = new Db;
        $this->assertInstanceOf('SON\Db\Db', $db);
    }
}
