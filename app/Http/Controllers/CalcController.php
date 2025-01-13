<?php

namespace App\Http\Controllers;

use App\Http\Controllers\CalcController;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($value1, $operator, $value2)
    {
        if ($operator == 'addition') {
            $result = $value1 + $value2;
        } elseif ($operator === 'subtraction') {
            $result  = $value1 - $value2;
        } elseif ($operator === 'multiplication') {
            $result  = $value1 * $value2;
        } else {
            $result  = $value1 / $value2;
        }
        return view('message.keisan', [
            'result' => $result,
            'value1, operator, value2'
        ]);
    }
}
