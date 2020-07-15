<?php

use PHPUnit\Framework\TestCase;
use App\Test\JumlahKaratkter;

class CountCharacterTest extends TestCase
{
    public function testClassCharacterHasAttributeString()
    {
        $attr = 'string';
        $this->assertClassHasAttribute($attr, JumlahKaratkter::class);
    }

    public function testTrueInputValues()
    {
        $string = "Saya belajar di sekolah SD 67";
        $character = new JumlahKaratkter();
        $this->assertEquals("Jumlah karakter pada '".$string."' adalah ".count(str_split($string)), $character->countCharacter($string));
    }

    public function testIsString()
    {
        $string = "OKE saya";
        $character = new JumlahKaratkter();
        $this->assertIsString($character->countCharacter($string));
    }

    public function testInputByInteger()
    {
        $string = 10;
        $character = new JumlahKaratkter();
        $this->assertIsInt($character->countCharacter($string));
    }

    public function testInputByArray()
    {
        $string = array("saya","ini","coba");
        $character = new JumlahKaratkter();
        $this->assertIsArray($character->countCharacter($string));
    }
}


?>