<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function xinChao()
    {
        return view('login');
    }

    public function display(Request $request)
    {
        $number1 = $request->number1;
        $number2 = $request->number2;
        $calulation = $request->caculation;

        switch ($calulation) {
            case '+':
                return $number1 + $number2;
                break;
            case '-':
                return $number1 - $number2;
                break;
            case '*':
                return $number1 * $number2;
                break;
            case '/':
                return $number1 / $number2;
                break;
            default:
               return "<script>alert('Vui lòng nhập phương thức tính toán')</script>";
                break;
        }
        
    }
}
