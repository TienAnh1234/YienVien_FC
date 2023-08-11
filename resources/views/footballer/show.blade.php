@extends('layouts.app')
@section('title','show')
@section('main')

<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-striped">
        <tbody>
          <tr>
            <th>ID</th>
            <td>{{ $footballer->id }}</td>
          </tr>
          <tr>
            <th>Name</th>
            <td>{{ $footballer->name }}</td>
          </tr>
          <tr>
            <th>Year_of_birth</th>
            <td>{{ $footballer->year_of_birth }}</td>
          </tr>
          <tr>
            <th>Ethnic</th>
            <td>{{ $footballer->ethnic }}</td>
          </tr>
          <tr>
            <th>Gender</th>
            <td>{{ $footballer->gender }}</td>
          </tr>
          <tr>
            <th>Height</th>
            <td>{{ $footballer->height }}</td>
          </tr>
          <tr>
            <th>Weight</th>
            <td>{{$footballer->weight}}</td>
          </tr>

          <tr>
            <th>Address</th>
            <td>{{$footballer->address->name}}</td>
          </tr>

        
            @foreach($footballer->positions as $position)
          <tr>
            <th>Position</th>  
            <td>{{$position->name}}<br></td>
          </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection