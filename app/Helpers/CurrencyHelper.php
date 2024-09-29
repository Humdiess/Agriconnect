<?php

namespace App\Helpers;

class CurrencyHelper
{
    public static function getPersenan($nilaiAwal, $nilaiTotal)
    {
        if ($nilaiTotal == 0) {
            return number_format(0, 2);
            # code...
        }
        $persenan = ($nilaiAwal / $nilaiTotal) * 100;
        return number_format($persenan, 2);
    }

    public static function getFormat($uang)
    {
        return number_format($uang);
    }
}