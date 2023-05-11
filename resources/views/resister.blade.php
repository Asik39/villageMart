@extends('layout.app')

@section('title','Register')

@section('content')
<sectionnP class="main">
<div class="container my-5">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <p class="fs-1">Registration Form</p>
        <form action="{{url('./signup')}}" method="post">
          @csrf
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" >
          </div>
          @error('username')
            <p class="text-danger mb-2">{{ $message }}</p>
        @enderror
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" >
          </div>
          @error('email')
            <p class="text-danger mb-2">{{ $message }}</p>
        @enderror
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" >
            @error('password')
            <p class="text-danger mb-2">{{ $message }}</p>
        @enderror
            <label for="password">Confirm Password:</label>
            <input type="password" class="form-control" id="password" name="conPassword" >
          </div>
          @error('conPassword')
            <p class="text-danger mb-2">{{ $message }}</p>
        @enderror
          <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
      </div>
    </div>
  </div>
</sectionnP

@endsection