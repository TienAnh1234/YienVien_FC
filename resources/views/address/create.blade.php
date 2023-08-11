@extends('layouts.app')
@section('title','create_address')
@section('main')


<div class="container">

    <form action="/address" method="post">
        @csrf
    <div class="form-group">
        <label for="enterName">Name</label>
        <input type="text" class="form-control" id="enterName" placeholder="Name" name="name"><br>
    </div>

    <div class="form-group">
        <label for="enterPopulation">Population</label>
        <input type="text" class="form-control" id="enterPopulation" placeholder="Population" name="population"><br>
    </div>

    <div class="form-group">
        <label for="enterDescription">Description</label>
        <textarea class="form-control" rows="5" id="enterDescription" name="description"></textarea><br>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Submit">
    </form>

</div>


@endsection