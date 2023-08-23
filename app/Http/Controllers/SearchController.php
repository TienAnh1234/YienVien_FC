<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Footballer;
use App\Models\Position;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function searchFootballer(Request $request)
    {
        $keyword = $request->keyword;
        $footballer =  Footballer::where('name', 'LIKE', '%'.$keyword.'%')->get();
        // bản thân  cú pháp Footballer::where('name', 'LIKE', '%'.$keyword.'%')->get(); đã trả về một mảng
        // do vậy biến lưu nó k cần dạng mảng nữa.
        if(count($footballer) > 0)
        {
            return view('footballer.searchFootballer',['footballer' => $footballer]);
        }
        else{
            return redirect('/footballer');
        }
    }

    public function searchAddress(Request $request)
    {
        $keyword = $request->keyword;
        $address =  Address::where('name', 'LIKE', '%'.$keyword.'%')->get();

        if(count($address) > 0)
        {
            return view('address.searchAddress',['address' => $address]);
        }
        else{
            return redirect('/address');
        }
    }

    public function searchPosition(Request $request)
    {
        $keyword = $request->keyword;
        $position =  Position::where('name', 'LIKE', '%'.$keyword.'%')->get();
        
        if(count($position) > 0)
        {
            return view('position.searchPositon',['position' => $position]);
        }
        else{
            return redirect('/position');
        }
    }




}
