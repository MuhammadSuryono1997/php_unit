<?php
namespace App\Test;

use Exception;

class FizzBuzz
{
    protected $fizzBuzz;
    public function getFizzBuzz()
    {
        $this->fizzBuzz = '';
        $data = range(1,50);
        foreach($data as $i)
        {
            if ($i % 3 == 0 and $i % 5 == 0) 
            {
                $this->fizzBuzz .= $i." FizzBuzz\n";
            }
            elseif($i % 5 == 0)
            {
                $this->fizzBuzz .= $i." Buzz\n";
            }
            elseif($i % 3 == 0)
            {
                $this->fizzBuzz .= $i." Fizz\n";
            }
            else{
                $this->fizzBuzz .= $i."\n";
            }
        }

        return $this->fizzBuzz;
    }

    public function fizzbuzz($i)
    {
        if($i % 3 == 0 and $i % 5 == 0)
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function fizz($i)
    {
        if($i % 3 == 0)
        {
            return true;
        }
        else{
            return false;
        }
    }

    public function buzz($i)
    {
        if($i % 5 == 0)
        {
            return true;
        }
        else{
            return false;
        }
    }
}

?>