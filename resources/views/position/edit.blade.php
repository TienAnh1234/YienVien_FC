@extends('layouts.app')
@section('title','edit_position')

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
                        <form action="/searchPosition" method="get">
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

    <form action="/position/{{$position->id}}" method="post">
        @csrf
        @method ('PUT')
    <div class="form-group">
        <label for="enterName">Name</label>
        <input type="text" class="form-control" id="enterName" value="{{$position->name}}" name="name"><br>
    </div>

    <div class="form-group">
        <label for="enterAbbreviations">Abbreviations</label>
        <input type="text" class="form-control" id="enterAbbreviations" value="{{$position->abbreviations}}" name="abbreviations"><br>
    </div>

    <div class="form-group">
        <label for="enterDescription">Description</label>
        <textarea class="form-control" rows="5" id="enterDescription" name="description">{{$position->description}}</textarea><br>
    </div>
    
    <input type="submit" class="btn btn-primary" value="Update">
    </form>

</div>

@endsection

