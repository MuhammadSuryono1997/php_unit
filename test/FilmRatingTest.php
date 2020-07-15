<?php

use PHPUnit\Framework\TestCase;
use App\Test\FilmRating;

class FilmRatingTest extends TestCase
{
    public function testClassAttributeUsia()
    {
        $this->assertClassHasAttribute('usia', FilmRating::class);
    }

    public function testClassNotAttributeUmur()
    {
        $this->assertClassNotHasAttribute('umur',FilmRating::class);
    }

    public function testResultDewasa()
    {
        $usia = 23;
        $film = new FilmRating();
        $this->assertEquals($usia.' Kategori rating Dewasa', $film->determineRating($usia));
    }


    public function testResultRemaja()
    {
        $usia = 15;
        $film = new FilmRating();
        $this->assertEquals($usia.' Kategori rating Remaja', $film->determineRating($usia));
    }

    public function testResultBimbinganOrangtua()
    {
        $usia = 11;
        $film = new FilmRating();
        $this->assertEquals($usia.' Kategori rating Bimbingan Orang Tua', $film->determineRating($usia));
    }

    public function testResultAllAge()
    {
        $usia = 4;
        $film = new FilmRating();
        $this->assertEquals($usia.' Kategori rating Semua Usia', $film->determineRating($usia));
    }

    public function testInputString()
    {
        $usia = '23';
        $film = new FilmRating();
        $this->assertIsInt($film->determineRating($usia));
    }

    public function testInputArray()
    {
        $usia = [23, 40];
        $film = new FilmRating();
        $this->assertIsInt($film->determineRating($usia));
    }
}