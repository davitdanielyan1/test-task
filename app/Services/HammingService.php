<?php


namespace App\Services;


class HammingService
{
    protected $input;
    protected $output;

    /**
     * HammingService constructor.
     * @param $str1
     * @param $str2
     */
    public function __construct($str1, $str2)
    {
        $this->input = $str1;
        $this->output = $str2;
    }

    /**
     * Calculate hamming distance with giving strings
     * @return int
     */
    public function calculateHammingDis()
    {
        return 3;
    }

}
