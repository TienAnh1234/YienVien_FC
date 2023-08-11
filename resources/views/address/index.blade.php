@extends('layouts.app')
@section('title','address')
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