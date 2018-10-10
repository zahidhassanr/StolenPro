<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/layout.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @yield('header')
</head>
<body>

<header style="box-shadow: 0 2px #888888;
    padding-top: 5px;">

    <div class="container-fluid">
    <div class="row">
        <div class="col-xs-9 col-lg-9 col-md-9 col-sm-9">
            <div class="container-fluid">

            <div class="row">
                <div class="col-xs-2 col-lg-2 col-md-2 col-sm-2 ">
                    <div class="logo">
                        <i class="fa fa-cloud" style="font-size: 40px"></i>
                    </div>
                </div>

                <div class="col-xs-1 col-lg-1 col-md-1 col-sm-1 ">
                    <div class="home">
                        <a href="{{route('home')}}"  style="text-decoration: none;color: black"><button class="homeBtn" href="" value="home">Home</button></a>
                    </div>
                </div>

                <div class="col-xs-1 col-lg-1 col-md-1 col-sm-1 ">
                    <div class="check">
                       <a href="{{route('check')}}" style="text-decoration: none;color: black"><button class="checkBtn"  value="check">Check</button></a>
                    </div>
                </div>

                <div class=" col-xs-2 col-lg-2 col-md-2 col-sm-2 ">
                    <div class="search">
                        <a href="{{route('device_registration')}}" style="text-decoration: none;color: black"><button class="searchBtn" >Register Device</button></a>
                    </div>
                </div>

                <div class="col-lg-1  col-xs-1 col-md-1 col-sm-1 ">
                    <div class="report">
                        <a href="{{route('report')}}" style="text-decoration: none;color: black"><button class="reportBtn"  value="report">Report</button></a>
                    </div>
                </div>

                



                @if(session()->get('user_id') !=null)
                    <div class="col-lg-2 col-xs-2 col-md-2 col-sm-2 ">
                        <div class="my_reports">
                            <button class="myReportBtn" >My report</button>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-2 col-xs-2 col-sm-2 ">
                        <div class="my_devices">
                            <a href="{{route('my_devices')}}" style="text-decoration: none;color: black"> <button class="myDevicesBtn" >My devices</button></a>
                        </div>
                    </div>
                @endif

            </div>
        </div>
        </div>

        @if(session()->get('user_id')==null)

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <div class="register">
                <a href="{{route('register')}}" style="text-decoration: none"><button class="registerBtn"  value="register">Register</button></a>
            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <div class="login">
                <a href="{{route('login')}}" style="text-decoration: none"><button class="loginBtn" value="login">Login</button></a>
            </div>
        </div>

        @else
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <i class="fa fa-user" style="font-size: 30px"></i><br>{{session()->get('user_name')}}
        </div>



         @endif

    </div>
</div>
</header>

<div id="header" style="display: none;box-shadow: 0 2px #888888;
    padding-top: 5px;">
    
    <div class="container">
        <div class="row">
           
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                
                     <i class="fa fa-cloud" style="font-size: 30px"></i>
            
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><h4>StolenPro</h4> 
            </div>    

        
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8"></div>

        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <button><i class="fa fa-navicon" style="font-size: 25px" onclick="navbar()"></i></button>
        </div>

    </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="nav-Collapse" style="background: #F5F5F5;display: none">
        
        <table style="width: 100%">
            
<tr style="border-bottom: 0.5px solid black;"><td><a href="{{route('login')}}"  style="text-decoration: none;color: black">Login</a>
            </td></tr>

            <tr style="border-bottom: 0.5px solid black;"><td><a href="{{route('register')}}"  style="text-decoration: none;color: black">Register</a>
            </td></tr>


            <tr style="border-bottom: 0.5px solid black;"><td><a href="{{route('home')}}"  style="text-decoration: none;color: black">Home</a>
            </td></tr>
            <tr style="border-bottom: 0.5px solid black"><td><a href="{{route('check')}}" style="text-decoration: none;color: black">Check</a></td>
            </tr>
            <tr style="border-bottom: 0.5px solid black"><td><a href="{{route('device_registration')}}"  style="text-decoration: none;color: black">Register Device</a>
            </td></tr>
            <tr style="border-bottom: 0.5px solid black"><td><a href="{{route('report')}}"  style="text-decoration: none;color: black">Report</a>
            </td></tr>
            
            
            <tr style="border-bottom: 0.5px solid black"><td><a href=""  style="text-decoration: none;color: black">My Report</a></td>
            </tr>
            
            <tr style="border-bottom: 0.5px solid black"><td><a href="{{route('my_devices')}}"  style="text-decoration: none;color: black">My deices</a></td>
            </tr>
                <tr><td><a href=""  style="text-decoration: none;color: black">About</a></td>
            </tr>
            

        </table>

    </div>


</div>

<script type="text/javascript">
    
    $(document).ready(function(){
        
            if ($(window).width() < 728) {
                $("header").css("display", "none");
                $("#header").css("display", "block");

            }

});


    function navbar()
    {
        $("#nav-Collapse").toggle();
    }

</script>







@yield('content')


<div class="footer">


        <div class="row" style="padding-top: 20px">
            <div class="col-lg-2 col-md-2 col-sm-2"></div>
<div class="col-lg-5 col-md-5 col-sm-5">
    <div class="follLink">
    <h4 class="follow">Follow us</h4>
    <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1">
                <i class="fa fa-facebook" style="font-size: 30px"></i>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1">
                <i class="fa fa-twitter"  style="font-size: 30px"></i>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1">
                <i class="fa fa-google"  style="font-size: 30px"></i>
            </div>

            <div class="col-lg-1 col-md-1 col-sm-1">
                <i class="fa fa-pinterest"  style="font-size:30px"></i>
            </div>
    </div>
    </div>
</div>



    <div class="col-lg-4 col-md-4 col-sm-4">
        <h4>contact Us</h4> <br>
        <p>01878077310</p>
        <p>01878077310</p>
    </div>

    </div>



</div>



</body>
</html>