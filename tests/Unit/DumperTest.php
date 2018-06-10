<?php

namespace PhpZendo\Unit;

use PhpZendo\Dumper\Dumper;
use PHPUnit\Framework\TestCase;

/**
 * DumperTest
 * 
 * @author huliuqing <huliuqing1989@gmail.com>
 */
class DumperTest extends TestCase
{
    /**
     * Test Dumper class.
     *
     * @return void
     */
    public function testDumper()
    {
        $dumper = new \PhpZendo\Dumper\Dumper();

        $this->assertInstanceOf(\PhpZendo\Dumper\Dumper::class, $dumper);
    }
}
