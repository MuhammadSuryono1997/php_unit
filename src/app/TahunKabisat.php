<?php
namespace App\Test;

class TahunKabisat
{
    protected $tahun;
    public function determineKabisat($tahun)
    {
        if (!is_int($tahun)) 
        {
            if(is_array($tahun))
            {
                throw new Exception("your data is ".gettype($tahun)." value must be string", 1);
            }
            else
            {
                throw new Exception($tahun." is ".gettype($tahun)." value must be string", 1);
            }
            
        }
        else
        {
            return $this->checkKabisat($tahun);
        }
    }

    public function checkKabisat($tahun)
    {
        if ($i % 400 == 0 or $i % 100 == 0 or $i % 4 == 0) 
        {
            return $tahun." Kabisat";
        }
        else
        {
            return $tahun." Bukan Kabisat";
        }
    }
}

