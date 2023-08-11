<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Footballer;
use Illuminate\Http\Request;

class FootballerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footballer = Footballer::All();
        return view('footballer.index',['footballer' => $footballer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $address = Address::all();
        return view('footballer.create',['address'=>$address]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Footballer::create($request->all());
        return redirect()->route('footballer.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $footballer = Footballer::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
