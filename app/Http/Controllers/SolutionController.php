<?php

namespace App\Http\Controllers;

use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SolutionController extends Controller {

    /**
     * Retourner les valeurs de la plus grande à la plus petite.
     */
    public function exo1()
    {
        $result = [
            50,95,740,9,0,23,-9
        ];

        rsort($result);

        return view('algo.array')
            ->with('result', $result);
    }

    /**
     * Convertir les trois dernières lettres d'un mot en majuscule.
     * Si le mot fait moins de trois lettres, retourner tout en majuscule.
     */
    public function exo2(string $word)
    {
        $result = strlen($word) < 3 ?
            strtoupper($word) :
            substr($word, 0, strlen($word) - 3) .
            strtoupper(substr($word, strlen($word) -3));

        return view('algo.index')
            ->with('result', $result);
    }

    /**
     * Convertir le nombre en chiffre romains.
     */
    public function exo3(int $num)
    {
        $mapping = [
            'M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1
        ];
        $result = '';
        while ($num > 0) {
            foreach ($mapping as $roman => $int) {
                if($num >= $int) {
                    $num -= $int;
                    $result .= $roman;
                    break;
                }
            }
        }

        return view('algo.index')
            ->with('result', $result);
    }

}
