<?php

namespace App\Http\Controllers;

use App\Models\Footballer;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $footballer =  Footballer::where('name', 'LIKE', '%'.$keyword.'%')->get();
        if(count($footballer) > 0)
        {
        //    return view('footballer.index',['footballer' => $footballer]);
        //    //dd($footballer);
        // //    echo 'hanoi1';
        foreach($footballer as $footballer1)
        {
            return view('footballer.index',['footballer' => $footballer]);
        }
        }
        else{
             return redirect('/footballer');
             //echo 'hanoi';
        }

    }
}
