@extends('layouts/layout')

@section('header')
<title>Log In</title>
@endsection


@section('content')

<div class="loging" style="padding-top: 120px;">
    <div style="padding-top: 30px;display: flex;align-items: center;justify-content: center;padding-bottom: 30px">
    @if($errors->any())
        <p style="color: red">{{$errors->first()}}</p>
    @endif
    </div>

    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2"></div>

        <div class="col-lg-6 col-md-6 col-sm-6" style="background: #F5F5F5;height: 300px;box-shadow: 2px 2px #888888;">

            <h2>Log In</h2>
            <form  method="post" action="{{route('login-user')}}">
                {{csrf_field()}}
            <div class="row" style="padding-top: 50px">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="email">Email Address</label>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="email" style="width: 70%" placeholder="Email Address" name="email" >
                </div>


            </div>

            <div class="row" style="padding-top: 20px">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="password">Password</label>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-8">
                    <input type="password" style="width: 70%" placeholder="Password" name="password">
                </div>


            </div>

                <div class="loginBtn" style="padding-top: 30px;display: flex;align-items: center;justify-content: center;">
                    <button type="submit" style="width: 25%">Login</button>
                </div>


            </form>
            <div class="container">
            <div class="row" style="">
                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <a href="#" style="text-decoration: none;color: red">Forgot password?</a>
                </div>

                <div class="col-lg-5 col-md-5 col-sm-5">
                    <a href="{{route('register')}}" style="text-decoration: none;color: red">Not registered?</a>
                </div>
            </div>
        </div>


        
    </div>
</div>

@endsection