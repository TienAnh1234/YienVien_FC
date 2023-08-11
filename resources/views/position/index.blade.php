@extends('layouts.app')
@section('title','position')
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