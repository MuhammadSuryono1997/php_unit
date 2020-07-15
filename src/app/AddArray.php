<?php

namespace App\Test;
use Exception;

class AddArray
{
    protected $data;

    public function add($new)
    {
        $this->data = ['Meja', 'Buku', 'Topi', 'Baju', 'Kayu'];
        if(is_array($new))
        {
            $this->data = array_splice($this->data, 0,0, $new);
            return $this->data;
        }
        else
        {
            if(is_int($new))
            {
                throw new Exception('data is integer must be Array value', 1);
            }
            elseif (is_string($new)) 
            {
                throw new Exception('data is string must be Array value', 1);
            }
            else
            {
                throw new Exception('data not defined must be Array value', 1);
            }
        }
    }
}