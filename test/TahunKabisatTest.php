<?php

use PHPUnit\Framework\TestCase;
use App\Test\TahunKabisat;

class TahunKabisatTest extends TestCase
{
    public function testCheckAttributeTahun()
    {
        $this->assertClassHasAttribute('tahun', TahunKabisat::class);
    }
}
