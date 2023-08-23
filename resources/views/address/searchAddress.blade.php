@extends('layouts.app')
@section('title','address')

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
           
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Population</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
    @foreach($address as $address1)  
    <tr>
        
        <td>{{$address1->name}}</td>
        <td>{{$address1->population}}</td>
        <td>{{$address1->description}}</td>
        <td><a href="/address/{{$address1->id}}/edit" class="btn btn-success">Edit</a></td>
        <td>
        <form action ="/address/{{$address1->id}}" method="post">
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
<a href="/address/create" class="btn btn-success">Create address</a>
@endsection