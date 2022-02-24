<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use Illuminate\Http\Request;

class CalculateController extends Controller
{
    public function calcLevenshteinDis(Request $request) {
        return Helper::levenshtein_dis($request->str1, $request->str2);
    }
}
