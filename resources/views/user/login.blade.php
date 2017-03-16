@extends('layouts.bootstrap') 
@section('styles')
<link rel="stylesheet" href="css/login.css">
@endsection
@section('content')
<div class="login">
  <div class="d-flex justify-content-center align-items-center window-height">
    <div class="row">
        <div class="card">
          <div class="card-block">
            <div class="card-title text-center"><h4>Crazy Collections</h4></div>
            <form action="login" method="post">
              <div class="form-group">
                <input type="text" name="mobile" id="mobile" class="form-control mobile" placeholder="Enter your mobile number">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control password" placeholder="Enter your password">
              </div>
              <div>
              <a href="">Forgot Password</a>
              <button type="submit" class="btn btn-primary btn-md pull-right">Login</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
<script src="js/login.js"></script>
@endsection