<?php
namespace App\Test;

use Exception;
class TahunKabisat
{
    protected $tahun;
    public function determineKabisat($tahun)
    {
        if (!is_int($tahun)) 
        {
            if(is_array($tahun))
            {
                throw new Exception("your data is ".gettype($tahun)." value must be integer", 1);
            }
            else
            {
                throw new Exception($tahun." is ".gettype($tahun)." value must be integer", 1);
            }
            
        }
        else
        {
            return $this->checkKabisat($tahun);
        }
    }

    public function checkKabisat($tahun)
    {
        if ($tahun % 400 == 0 or $tahun % 100 == 0 or $tahun % 4 == 0) 
        {
            return $tahun." Kabisat";
        }
        else
        {
            return $tahun." Bukan Kabisat";
        }
    }
}

