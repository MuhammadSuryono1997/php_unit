<?php

use PHPUnit\Framework\TestCase;
use App\Test\FilmRating;

class FilmRatingTest extends TestCase
{
    public function testClassAttributeUsia()
    {
        $this->assertClassHasAttribute('usia', FilmRating::class);
    }
}