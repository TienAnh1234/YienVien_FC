@extends('layouts.app')
@section('title','footballer')

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
                        <form action="/searchFootballer" method="get">
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
        <th>Image</th>
        <th>ID</th>
        <th>Name</th>
        <th>Year Of Birth</th>
        <th>Ethnic</th>
        <th>Gender</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($footballer as $footballer1)  
    <tr>
        <td><img src="http://127.0.0.1:8000{{$footballer1->image}}" class="img-fluid" alt="Responsive image" style="width:70px;height:90px"></td>
        <td>{{$footballer1->id}}</td>
        <td><a href="/footballer/{{$footballer1->id}}" style="text-decoration: none;color:black">{{$footballer1->name}}<a/></td>
        <td>{{$footballer1->year_of_birth}}</td>
        <td>{{$footballer1->ethnic}}</td>
        <td>{{$footballer1->gender}}</td>        
        <td><a href="/footballer/{{$footballer1->id}}/edit" class="btn btn-success">Edit</a></td>
        <td>
        <form action ="/footballer/{{$footballer1->id}}" method="post">
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
<a href="/footballer/create" class="btn btn-success">Create footballer</a>
@endsection