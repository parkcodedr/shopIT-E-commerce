@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
<div class="d-flex align-content-center">
    
    <form class="form col-sm-4 m-5">
        <h3>Login</h3>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
</div>
    </div>
</div>
    
@endsection

