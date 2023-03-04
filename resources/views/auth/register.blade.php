@extends('layouts.app')

@section('content')
<section class="signin-page account">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="block text-center">
            <a class="logo" href="index.html">
              <img src="images/logo.png" alt="">
            </a>
            <h2 class="text-center">Create Your Account</h2>
            <form class="text-left clearfix" action="index.html">
              <div class="form-group">
                <input type="text" class="form-control" name="fname" placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="lname" placeholder="Last Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="uname" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-main text-center">Sign In</button>
              </div>
            </form>
            <p class="mt-20">Already hava an account ?<a href="login.html"> Login</a></p>
            <p><a href="forget-password.html"> Forgot your password?</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('title','Register')
