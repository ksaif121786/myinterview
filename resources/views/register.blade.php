
@extends('layouts.default')
@section('content')

<div class="col-sm-12 d-flex justify-content-center">
<form method="post" action="{{ url('register-post')}}">
 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
   <!--  <small id="emailHelp" class="form-text text-muted"></small> -->

   @if($errors->has('name'))
   <span class="alert alert-danger">{{ $errors->first('name')}}</span>
   @endif

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

    @if($errors->has('email'))
   <span class="alert alert-danger">{{ $errors->first('email')}}</span>
   @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

    @if($errors->has('password'))
   <span class="alert alert-danger">{{ $errors->first('password')}}</span>
   @endif
  </div>
  <!-- <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{ url('/')}}">login</a>
</form>
</div>

@endsection