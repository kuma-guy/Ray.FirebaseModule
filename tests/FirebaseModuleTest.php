<?php

namespace Ray\FirebaseModule;

use Firebase\FirebaseInterface;
use Firebase\FirebaseLib;
use Ray\Di\Injector;

class FirebaseModuleTest extends \PHPUnit_Framework_TestCase
{
    public function testGet()
    {
        $fireBaseLib = (new Injector(new FirebaseModule('http://example.com/fb', '0')))->getInstance(FirebaseInterface::class);
        $this->assertInstanceOf(FirebaseLib::class, $fireBaseLib);
    }
}
