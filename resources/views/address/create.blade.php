@extends('layouts.app')
@section('title','create_address')

@section('header')
<div class="container">
    <br>
    <div class="row">
        <div class="col-sm-7">
            <ul class="nav ">
                <li class="nav-item btn btn-info" style="margin:1%"><a href="/address" class="nav-link">Address</a></li>
                <li class="nav-item btn btn-info" style="margin:1%"><a href="/position" class="nav-link">Position</a></li>
                <li class="nav-item btn btn-info" style="margin:1%"><a href="/footballer" class="nav-link">Footballer</a></li>

            </ul>
        </div>

        <div class="col-sm-5">
            
                <div class="input-group">
                    <div class="form-outline">
                        <form action="/searchAddress" method="get">
                            @csrf
                            <input type="search" class="form-control" name="keyword" placeholder="Search">
                            <input type="submit" class="btn btn-primary" value="Search"> 
                        </form>
                    </div>
                </div>
        
        </div>
    </div>
</div>
@endsection

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