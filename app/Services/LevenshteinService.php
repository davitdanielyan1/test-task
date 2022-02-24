<?php


namespace App\Services;


class LevenshteinService
{
    protected $str1;
    protected $str2;

    /**
     * LevenshteinService constructor.
     * @param $str1
     * @param $str2
     */
    public function __construct($str1, $str2)
    {
        $this->str1 = $str1;
        $this->str2 = $str2;
    }

    /**
     * Calculate levenshtein distance with giving strings
     * @return int
     */
    public function calculateLevenshteinDis()
    {
        return array(
            'str1' => $this->str1,
            'str2' => $this->str2,
        );
    }

}
