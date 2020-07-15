<?php

use PHPUnit\Framework\TestCase;
use App\Test\TahunKabisat;

class TahunKabisatTest extends TestCase
{
    public function testCheckAttributeTahun()
    {
        $this->assertClassHasAttribute('tahun', TahunKabisat::class);
    }

    public function testInputInteger()
    {
        $tahun = 2010;
        $t_kabisat = new TahunKabisat();
        $get = $t_kabisat->determineKabisat($tahun);
        $get = explode(' ',$get);
        $this->assertIsInt((int)$get[0]);
    }

    public function testIsKabisat()
    {
        $tahun = 2004;
        $t_kabisat = new TahunKabisat();
        $this->assertEquals($tahun.' Kabisat',$t_kabisat->determineKabisat($tahun));
    }

    public function testIsNoKabisat()
    {
        $tahun = 2002;
        $t_kabisat = new TahunKabisat();
        $this->assertEquals($tahun.' Bukan Kabisat',$t_kabisat->determineKabisat($tahun));
    }

    public function testInputString()
    {
        $tahun = '2010';
        $t_kabisat = new TahunKabisat();
        $this->assertIsInt($t_kabisat->determineKabisat($tahun));
    }

    public function testInputArray()
    {
        $tahun = ['2010','20111', 2019];
        $t_kabisat = new TahunKabisat();
        $this->assertIsInt($t_kabisat->determineKabisat($tahun));
    }
}
