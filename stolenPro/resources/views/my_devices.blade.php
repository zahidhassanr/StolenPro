@extends('layouts/layout')

@section('header')
    <title>Your Devices</title>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/photoSlider.css')}}">
    <script type="text/javascript" src="{{asset('js/simpleGal.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection


@section('content')

<?php

  $device=\App\device::where('user_id',session()->get('user_id'))->get();

?>



<div class="devices">

    <h2 style="padding-top: 30px;display: flex;align-items: center;justify-content: center;">Your Devices</h2>

@foreach($device as $item)



        <div class="row" style="padding-top: 50px;">

            <div class="col-lg-2 col-md-2 col-sm-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-8" style="border:1px solid black">

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" style="padding:20px">

                        <img src="{{asset($item->device_image1)}}">

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="row" style="padding-top: 50px;">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p>Type: {{$item->device_type}}</p>
                        </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                        <p>Model: {{$item->device_model}}</p>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 30px;">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p>Indentity: {{$item->device_identity}}</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p>Using Since: {{$item->used_year}}</p>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 30px;">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                @if($item->new == True)
                                <p>Use type: new</p>
                                    @else
                                    <p>Use type: Used</p>
                                    @endif
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <p>Status: {{$item->status}}</p>
                            </div>
                        </div>


                        <div class="update_button" style="padding-top: 50px;padding-bottom: 20px;display: flex;align-items: center;justify-content: center;">

                            <a href="{{route('update_device',['device_id' => $item->id])}}"><button>Update</button></a>
                        </div>
                    </div>

                    </div>
                </div>

            </div>


    @endforeach
</div>

<!--


<script>

    showSlides(1);
    function currentSlide(n) {
        showSlides(n);
    }

    function showSlides(n)
    {
        var i;

        var slide=document.getElementsByClassName('myImages');
        var demo=document.getElementsByClassName('demo');

        for(i=0;i<slide.length;i++)
        {
            slide[i].style.display="none";
        }

        for (i = 0; i < demo.length; i++) {
            demo[i].className = demo[i].className.replace(" active", "");
        }

        slide[n-1].style.display = "block";
        demo[n-1].className += " active";


    }


</script>

-->
@endsection


