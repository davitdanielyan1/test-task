<?php

namespace App\Helper;

use App\Services\HammingService;
use App\Services\LevenshteinService;

class Helper
{

    public static function levenshtein_dis($str1, $str2)
    {
        $levenshteinService = new LevenshteinService($str1, $str2);
        return $levenshteinService->calculateLevenshteinDis();
    }

    public static function hamming_dis($str1, $str2)
    {
        $hammingService = new HammingService($str1, $str2);
        return $hammingService->calculateHammingDis();
    }

}
