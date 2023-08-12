@extends('layouts.app')
@section('title','footballer')
@section('main')


<div class="container">
           
  <table class="table">
    <thead>
      <tr>
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