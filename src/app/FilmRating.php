<?php 
namespace App\Test;

use Exception;

class FilmRating
{
    protected $usia;

    public function determineRating($usia)
    {
        if(is_int($usia))
        {
            return $usia." Kategori rating ".$this->checkRating($usia);
        }
        else 
        {
            if(is_array($usia))
            {
                throw new Exception('your data is '.gettype($usia).' value must be integer',1);
            }
            else
            {
                throw new Exception('your data is '.gettype($usia).' value must be integer',1);
            }
        }
    }

    public function checkRating($usia)
    {
        switch ($usia) {
            case $usia >= 21:
                return "Dewasa";
                break;
            case $usia >= 13:
                return "Remaja";
                break;
            case $usia >= 9:
                return "Bimbingan Orang Tua";
                break;
            case $usia < 9:
                return "Semua Usia";
                break;
            
            default:
                return "Apakah anda memasukkan usia ?";
                break;
        }
    }
}

