@extends('layouts.app')
@section('title','create_footballer')
@section('main')

<div class="container">

    <form action="/footballer" method="post">
        @csrf
    <div class="form-group">
        <label for="enterName">Name</label>
        <input type="text" class="form-control" id="enterName" placeholder="Name" name="name"><br>
    </div>

    <div class="form-group">
        <label for="enteryearofbirth">Year of Birth</label>
        <input type="text" class="form-control" id="enteryearofbirth" placeholder="Year of birth" name="year_of_birth"><br>
    </div>

    <div class="form-group">
        <label for="enterEthnic">Ethnic</label>
        <input type="text" class="form-control" id="enterEthnic" placeholder="Ethnic" name="ethnic"><br>
    </div>
    
    <div class="form-group">
    <p>Gender:</p>
    <input type="radio" class="form-check-input" id="male" name="gender" value="Male">
    <label class="form-check-label" for="male">Male</label>
    <br>
    <input type="radio" class="form-check-input" id="female" name="gender" value="Female">
    <label class="form-check-label" for="female">Female</label>
    </div>

    <div class="form-group">
        <br>
        <label for="enterHeight">Height</label>
        <input type="text" class="form-control" id="enterHeight" placeholder="Height" name="height"><br>
    </div>

    <div class="form-group">
        <label for="enterWeight">Weight</label>
        <input type="text" class="form-control" id="enterWeight" placeholder="Weight" name="weight"><br>
    </div>

    <div class="form-group">
    <label for="enterAddress">Address</label>
    <select name="address_id" id="enterAddress" class="form-select mt-3">
        @foreach($address as $address1)
            <option value="{{$address1->id}}">{{$address1->name}}</option>
        @endforeach
    </select>
    <br>
    </div>

    <input type="submit" class="btn btn-primary" value="Submit">
    </form>

</div>

@endsection