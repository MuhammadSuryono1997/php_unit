<?php 

use PHPUnit\Framework\TestCase;
use App\Test\AddArray;

class AddArrayTest extends TestCase
{
    public function testClassHasAttributeData()
    {
        $this->assertClassHasAttribute('data', AddArray::class);
    }

    public function testClassNoHasAttributeDataArray()
    {
        $this->assertClassNotHasAttribute('data_array', AddArray::class);
    }

    public function testInputHandukInArrayValue()
    {
        $data = ['Handuk','Celana'];
        $array = new AddArray();
        $expect = array('Handuk','Meja', 'Buku', 'Topi', 'Baju', 'Kayu','Celana');
        $actual = $array->add($data);
        $this->assertTrue($this->arrays_are_similar($expect,$actual));
        // $this->assertEquals($expect, $array->add($data));
        // $this->arrays_are_similar($expect,$array->add($data));
    }

    public function testInputInteger()
    {
        $data = 6;
        $array = new AddArray();
        $this->assertIsArray($array->add($data));
    }

    public function testInputString()
    {
        $data = 'Handuk';
        $array = new AddArray();
        $this->assertIsArray($array->add($data));
    }

    /**
     * @param array $a
     * @param array $b
     * @return bool
     */
    function arrays_are_similar($a, $b) {
        if ($a === $b)
        {
            return true;
        }else{
            return false;
        }
    }
}

