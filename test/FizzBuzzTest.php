<?php
use PHPUnit\Framework\TestCase;
use App\Test\FizzBuzz;


class FizzBuzztest extends TestCase
{
    public function testClassHasAttributeFizzBuzz()
    {
        $this->assertClassHasAttribute('fizzBuzz', FizzBuzz::class);
    }

    public function testAngkaFizz()
    {
        $angka = 3;
        $fizz = new FizzBuzz();
        $this->assertTrue($fizz->fizz($angka));
    }

    public function testAngkaBuzz()
    {
        $angka = 5;
        $fizz = new FizzBuzz();
        $this->assertTrue($fizz->buzz($angka));
    }

    public function testAngkaFizzBuzz()
    {
        $angka = 15;
        $fizz = new FizzBuzz();
        $this->assertTrue($fizz->fizzbuzz($angka));
    }

    public function testGetFizzBuzz1Until50()
    {
        $fizz = new FizzBuzz();
        $this->assertEquals($fizz->getFizzBuzz(), $fizz->getFizzBuzz());
    }
}
?>