<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Footballer;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;
Paginator::useBootstrap();

class FootballerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $footballer = Footballer::paginate(5);
        return view('footballer.index',['footballer' => $footballer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $address = Address::all();
        $position = Position::all();
        return view('footballer.create',['address'=>$address],['position'=>$position]);
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $footballer = new Footballer();
        if ($request->hasFile('image')) {
            $footballer->image = $request->file('image')->store('public/images');
            // phương thức store sẽ lưu file vừa tải lên vào trong thư mục storage/app/public
            // nếu đã có public nó sẽ nhảy vào public, nếu chưa có nó sẽ tạo public rồi nhảy vào
            // nếu đã có images nó sẽ nhảy vào images, nếu chưa có nó sẽ tạo images rồi nhảy vào
            // tên ảnh sẽ có dạng public/images/....
            $footballer->image = str_replace('public/', '/upload/', $footballer->image);
        }
        $footballer->name = $request->name;
        $footballer->year_of_birth = $request->year_of_birth;
        $footballer->ethnic = $request->ethnic;
        $footballer->gender = $request->gender;
        $footballer->height = $request->height;
        $footballer->weight = $request->weight;
        $footballer->address_id = $request->address_id; 
        $footballer->save();
        $footballer->positions()->attach($request->position);
        return redirect('/footballer');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $footballer = Footballer::find($id);
       return view('footballer.show',['footballer'=>$footballer]);
       //dd($footballer);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $footballer = Footballer::find($id);
        $address = Address::all();
        $position = Position::all();
        return view('footballer.edit',['footballer'=>$footballer ,'position'=>$position,'address'=>$address]);

    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $footballer = Footballer::find($id);
        $footballer->name = $request->name;
        $footballer->year_of_birth = $request->year_of_birth;
        $footballer->ethnic = $request->ethnic;
        $footballer->gender = $request->gender;
        $footballer->height = $request->height;
        $footballer->weight = $request->weight;
        $footballer->address_id = $request->address_id;
        if ($request->hasFile('image')) {
            Storage::delete(str_replace('/upload/','public/', $footballer->image));
            //Storage::delete() trỏ tới storage/app
            $footballer->image = $request->file('image')->store('public/images');
            $footballer->image = str_replace('public/', '/upload/', $footballer->image);    
        }
        $footballer->save();
        $footballer->positions()->sync($request->position);
       return redirect('/footballer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $footballer = Footballer::find($id);
        $footballer->delete();
        return redirect('/footballer');
    }
}
