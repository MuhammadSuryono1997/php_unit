<?php 

namespace App\Test;

use Exception;

class MembalikkanKata
{
    protected $string;

    public function Reverse($string)
    {
        if (!is_string($string)) 
        {
            if(is_array($string))
            {
                throw new Exception("your data is ".gettype($string)." value must be string", 1);
            }
            else
            {
                throw new Exception($string." is ".gettype($string)." value must be string", 1);
            }
            
        }
        else
        {
            $reverse = explode(' ',$string);
            $reverse = array_reverse($reverse);
            return implode(' ',$reverse);
        }
    }
}