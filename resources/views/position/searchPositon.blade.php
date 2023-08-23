@extends('layouts.app')
@section('title','position')

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
           
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Abbreviations</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($position as $position1)  
    <tr>
        
        <td>{{$position1->name}}</td>
        <td>{{$position1->abbreviations}}</td>
        <td>{{$position1->description}}</td>
        <td><a href="/position/{{$position1->id}}/edit" class="btn btn-success">Edit</a></td>
        <td>
        <form action ="/position/{{$position1->id}}" method="post">
                @csrf
                @method ('DELETE')
                <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?');">Delete</button>
                </form> 
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection


@section('button')
<a href="position/create" class="btn btn-success">Create position</a>
@endsection

