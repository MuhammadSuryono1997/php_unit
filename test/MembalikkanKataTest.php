<?php

use PHPUnit\Framework\TestCase;
use App\Test\MembalikkanKata;

class MembalikkanKataTest extends TestCase
{
    public function testClassHasAttributeString()
    {
        $this->assertClassHasAttribute('string', MembalikkanKata::class);
    }

    public function testResultValueTrue()
    {
        $data = 'saya ingin makan nasi goreng';
        $reverse = new MembalikkanKata();
        $this->assertEquals("goreng nasi makan ingin saya",$reverse->Reverse($data));
    }

    public function testArray()
    {
        $data = ['ini','data'];
        $reverse = new MembalikkanKata();
        $this->assertIsString($reverse->Reverse($data));
    }

    public function testInteger()
    {
        $data = 12;
        $reverse = new MembalikkanKata();
        $this->assertIsString($reverse->Reverse($data));
    }
}

?>