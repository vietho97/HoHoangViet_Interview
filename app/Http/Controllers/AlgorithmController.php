<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgorithmController extends Controller
{
    public function __construct()
    {
    }

    public function atm(Request $request)
    {
        $amount = $request->get('amount');
        $values = [50, 10, 5, 1];
        rsort($values);
        $result = ['total' => 0];
        foreach ($values as $value) {
            $result[$value . '$'] = floor($amount / $value);
            $amount -= $result[$value . '$'] * $value;
            $result['total'] += $result[$value . '$'] * $value;
        }
        return $result;
    }

    public function findGoogle(Request $request)
    {
        $word = trim($request->get('word'));
        $pattern = "/(g{1})((o|0){1}|(([\(]){1}([\)]){1})|([\[]){1}([\]]){1}|([\<]){1}([\>]){1}){2}(g{1})([il]{1})(e|3{1}\b)/i";
        return (preg_match($pattern, $word) != 0) ? "TRUE" : "FALSE";
    }

    public function matrix(Request $request)
    {
        $matrix = $request->get('matrix');
        $length = count($matrix);
        $primaryDiagonal = 0;
        $secondaryDiagonal = 0;
        $lastIndex = $length - 1;
        for ($i = 0; $i < $length; $i++) {
            $primaryDiagonal += $matrix[$i][$i];
            $secondaryDiagonal += $matrix[$i][$lastIndex--];
        }
        return abs($primaryDiagonal - $secondaryDiagonal);
    }
}
