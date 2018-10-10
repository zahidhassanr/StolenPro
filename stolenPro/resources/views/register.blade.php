@extends('layouts/layout')

@section('header')

<title>Register</title>
@endsection


@section('content')

    <div class="registration" style="padding-top: 100px">

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2"></div>

            <div class="col-lg-8 col-md-8 col-sm-8" style="background: #F5F5F5;border: 0.5px solid black">
                <h2>Registration</h2>

                <form method="post" action="{{route('signingup')}}">
                    {{csrf_field()}}

                    <div class="row" style="padding-top: 50px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="firstname">First name</label>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4" >
                            <input type="text"  style="box-shadow: 2px 2px #888888;width: 90%" placeholder="First Name"  name="firstname" required autofocus>
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="lasttname">Last name</label>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" placeholder="Last Name"  style="box-shadow: 2px 2px #888888;width: 90%"  name="lastname" required autofocus>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="email">Email</label>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="email" name="email" placeholder="Email Address" style="box-shadow: 2px 2px #888888;width: 90%"  required autofocus>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="password">Password</label>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="password" name="password" placeholder="Password" style="box-shadow: 2px 2px #888888;width: 90%" required autofocus>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="password">Confirm Password</label>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="password" name="Conpassword" placeholder="Password" style="box-shadow: 2px 2px #888888;width: 90%" required autofocus>
                        </div>
                    </div>


                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="phone">Phone No</label>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" name="phone" placeholder="Phone Number" style="box-shadow: 2px 2px #888888;width: 90%" required autofocus>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="city">Current City</label>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" placeholder="city"  name="city" required autofocus style="box-shadow: 2px 2px #888888;width: 90%" >
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="location">Location</label>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <textarea rows="3" cols="25" style="box-shadow: 2px 2px #888888;" placeholder="Location"  name="location" required autofocus></textarea>
                        </div>
                    </div>

                    <div class="submit" style="padding-top: 30px;padding-bottom: 30px;display: flex;align-items: center;justify-content: center;">
                        <button class="submitBtn" type="submit">Register</button>
                    </div>

                </form>

            </div>
        </div>
    </div>


@endsection