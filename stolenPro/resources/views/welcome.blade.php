@extends('layouts/layout')

@section('header')
    <title>StolenPro</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
@endsection

@section('content')


    <?php
            $report1=\App\report::where('id',1)->first();
            $report2=\App\report::where('id',2)->first();
            $report3=\App\report::where('id',3)->first();
            $report4=\App\report::where('id',4)->first();
            $report5=\App\report::where('id',5)->first();

    ?>



    <div class="row" style="padding-top:50px;">
        <div class="col-lg-1 col-md-1 col-sm-1"></div>

        <div class="col-xs-6 col-lg-6 col-md-6 col-sm-6 " style=" height: 250px;">
            <img src="{{asset('images/home.png')}}" width="100%" height="100%">

        </div>


        <div class="col-xs-4 col-lg-4 col-md-4 col-sm-4" style="background: #F5F5F5;">
            
            <div class="row" style="border-bottom: 1px solid black;padding-top: 20px">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3>Total Registerd Items</h3>
                </div>
            </div>
            
            <div class="row" >
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <?php
                        $device=\App\device::get()->count();

                    ?>

                    <div style="display: flex;align-items: center;justify-content: center; border: 1px solid black;margin-top: 30px;height:100px">
                        <p>{{$device}}</p>
                    </div>

                </div>
            </div>



        </div>

    </div>

    <div class="content" style="padding-top: 80px;">

        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2"></div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="checkBox">
                    <a href="{{route('check')}}" style="text-decoration: none"><i class="fa fa-search" style="font-size: 50px;display: flex;align-items: center;justify-content: center;color: black;"></i> <h4 style="text-align: center">Check</h4></a>
                    <p>Check if the item your about to buy or found is reported as lost or stolen. </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="checkBox">
                    <a href="{{route('report')}}" style="text-decoration: none"><i class="fa fa-bullhorn" style="font-size: 50px;display: flex;align-items: center;justify-content: center;color: black;"></i><h4 style="text-align: center">Report</h4></a>
                    <p>Report a lost or stolen item<br><br></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="checkBox">
                    <a href="{{route('lost_found')}}" style="text-decoration: none"><i class="fa fa-modx" style="font-size: 50px;display: flex;align-items: center;justify-content: center;color: black;"></i><h4 style="text-align: center">Lost and Found</h4></a>
                    <p>See items lost and found<br><br></p>
                </div>
            </div>
        </div>

    </div>


    <div class="missing-content" style="padding-top: 80px;">
        <div class="row">
            <div class="col-lg-1 col-md-1 col-sm-1"></div>
            @if($report1)
            <div class="col-lg-2 col-md-2 col-sm-2">

                <div class="missing">
                    <h2 style="text-align: center">MISSING</h2>
                    <h4 style="text-align: center">{{$report1->item_type}}</h4>

                    <div class="image">
                    <img src="{{$report1->item_image1}}" width="100px" height="150px" >
                    </div>
                    <h5 style="text-align: center">contact: {{$report1->phone}}</h5>
                </div>
            </div>
            @endif

            @if($report2)
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="missing">
                    <h2 style="text-align: center">MISSING</h2>
                    <h4 style="text-align: center">{{$report2->item_type}}</h4>

                    <div class="image">
                        <img src="{{$report2->item_image1}}" width="100px" height="150px" >
                    </div>
                    <h5 style="text-align: center">contact: {{$report2->phone}}</h5>
                </div>
            </div>
                @endif
                    @if($report3)
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="missing">
                    <h2 style="text-align: center">MISSING</h2>
                    <h4 style="text-align: center">{{$report3->item_type}}</h4>

                    <div class="image">
                        <img src="{{$report3->item_image1}}" width="100px" height="150px" >
                    </div>
                    <h5 style="text-align: center">contact: {{$report3->phone}}</h5>
                </div>
            </div>
                    @endif
                        @if($report4)
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="missing">
                    <h2 style="text-align: center">MISSING</h2>
                    <h4 style="text-align: center">{{$report4->item_type}}</h4>

                    <div class="image">
                        <img src="{{$report4->item_image1}}" width="100px" height="150px" >
                    </div>
                    <h5 style="text-align: center">contact: {{$report4->phone}}</h5>
                </div>
            </div>
                        @endif
                            @if($report5)
            <div class="col-lg-2 col-md-2 col-sm-2">
                <div class="missing">
                    <h2 style="text-align: center">MISSING</h2>
                    <h4 style="text-align: center">{{$report5->item_type}}</h4>

                    <div class="image">
                        <img src="{{$report5->item_image1}}" width="100px" height="150px" >
                    </div>
                    <h5 style="text-align: center">contact: {{$report5->phone}}</h5>
                </div>
            </div>
                            @endif

            <div class="col-lg-1 col-md-1 col-sm-1"></div>

        </div>
    </div>

@endsection