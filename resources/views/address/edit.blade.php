@extends('layouts.app')
@section('title','edit_address')
@section('main')


<div class="container">

    <form action="/address/{{$address->id}}" method="post">
        @csrf
        @method ('PUT')
    <div class="form-group">
        <label for="enterName">Name</label>
        <input type="text" class="form-control" id="enterName" value="{{$address->name}}" name="name"><br>
    </div>

    <div class="form-group">
        <label for="enterPopulation">Population</label>
        <input type="text" class="form-control" id="enterPopulation" value="{{$address->population}}" name="population"><br>
    </div>

    <div class="form-group">
        <label for="enterDescription">Description</label>
        <textarea class="form-control" rows="5" id="enterDescription" name="description">{{$address->description}}</textarea><br>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Update">
    </form>

</div>

@endsection