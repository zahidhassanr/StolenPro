@extends('layouts/layout')

@section('header')


    <title>Matched Device</title>
    

@endsection

@section('content')

@if($device)

	<div class="matched_device">

		<h2 style="padding-top: 30px;display: flex;align-items: center;justify-content: center;">Matched Device</h2>

		 <div class="row" style="padding-top: 50px;">

            <div class="col-lg-2 col-md-2 col-sm-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-8" style="border:1px solid black">

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" style="padding:20px">

                        <img src="{{asset($device->device_image1)}}">

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="row" style="padding-top: 50px;">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p>Type: {{$device->device_type}}</p>
                        </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                        <p>Model: {{$device->device_model}}</p>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 30px;">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p>{{$device->identity_type}} :{{$device->device_identity}}</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p>Using Since: {{$device->used_year}}</p>
                            </div>
                        </div>

                        <div class="row" style="padding-top: 30px;">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                @if($device->new == True)
                                <p>Use type: new</p>
                                    @else
                                    <p>Use type: Used</p>
                                    @endif
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <p>Status: {{$device->status}}</p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
         </div>

	</div>
@endif 
	@if($report)

		<div class="matched_device">

		<h2 style="padding-top: 30px;display: flex;align-items: center;justify-content: center;">Reported Device</h2>

		 <div class="row" style="padding-top: 50px;">

            <div class="col-lg-2 col-md-2 col-sm-2"></div>
            <div class="col-lg-8 col-md-8 col-sm-8" style="border:1px solid black">

                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4" style="padding:20px">

                        <img src="{{asset($report->item_image1)}}">

                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="row" style="padding-top: 50px;">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <p>Type: {{$report->item_type}}</p>
                        </div>
                            

                        
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p>{{$report->identify_type}} :{{$report->item_identify}}</p>
                            </div>

                        </div>
                        <div class="row" style="padding-top: 50px;">   
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p>Lost Date: {{$report->lost_date}}</p>
                            </div>
                        

                        
                            
                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <p>Status: {{$report->status}}</p>
                            </div>
                        </div>
						
						<div class="row" style="padding-top: 50px;">   
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <p>Owner phone: {{$report->phone}}</p>
                            </div>
                        

                        
                            
                            <div class="col-lg-6 col-md-6 col-sm-6">

                                <p>Owner email: {{$report->email}}</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
         </div>

	</div>


@endif

	
	

@endsection