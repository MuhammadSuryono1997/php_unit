<?php

namespace App\Test;

use Exception;

class JumlahKaratkter 
{
    protected $string;

    public function countCharacter($string)
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
            return "Jumlah karakter pada '".$string."' adalah ".count(str_split($string));
        }
    }
}