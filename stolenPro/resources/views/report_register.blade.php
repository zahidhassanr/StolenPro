@extends('layouts/layout')

@section('header')
<title>Report</title>

@endsection


@section('content')

    <div style="padding-top: 30px;display: flex;align-items: center;justify-content: center;">
        <h3>Update Device Information to Report</h3>
    </div>


    <div class="main" >
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2"></div>

            <div class="col-lg-8 col-md-8 col-sm-8" style="background: #F5F5F5;border: 0.5px solid black">
                <form method="post" action="{{route('report_reg_device', ['device_id' => $device->id])}}" enctype="multipart/form-data">

                    {{csrf_field()}}
                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="type">Device Type</label>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <select id="type_select" name="type"  style="width: 48%;box-shadow: 2px 2px #888888" >
                                
                                <option value="{{$device->device_type}}" selected>{{$device->device_type}}</option>
                                

                            </select>
                        </div>

                    </div>

                    <div class="row" style="padding-top: 20px;">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="company">Device Company</label>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <select id="company_select" name="company" style="width: 48%;box-shadow: 2px 2px #888888">
                                
                                <option value="{{$device->device_company}}" selected>{{$device->device_company}} </option>
                                

                            </select>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="model">Device Model</label>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <input type="text" name="model" value="{{$device->device_model}} " style="box-shadow: 2px 2px #888888">
                        </div>

                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="identify">Device Identifier Type</label>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <input type="text" name="identity_type" value="{{$device->identity_type}}" style="box-shadow: 2px 2px #888888">
                        </div>

                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="identify">Device Identifier</label>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <input type="text" name="identify" value="{{$device->device_identity}}" style="box-shadow: 2px 2px #888888">
                        </div>

                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="status">Use Type</label>
                        </div>

                        @if($device->new == True)
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <input type="radio" name="status" value="New" checked>New
                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <input type="radio" name="status" value="Used" >Used
                        </div>

                            @else
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <input type="radio" name="status" value="New" >New
                            </div>

                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <input type="radio" name="status" value="Used" checked >Used
                            </div>
                        @endif
                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="date">Lost Date</label>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <input type="date" name="date"> <i class="fa fa-calendar"></i>
                        </div>


                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="contact">Contact number</label>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <input type="text" name="contact" value="{{$device->phoneNum}}" style="box-shadow: 2px 2px #888888">
                        </div>


                    </div>


                    <div class="row" style="padding-top: 20px;">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="company">Device status</label>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <select id="company_select" name="status" style="width: 48%;box-shadow: 2px 2px #888888">
                                @if($device->status == "good")
                                <option value="good" selected>Good</option>
                                <option value="lost">Lost</option>
                                <option value="stolen">Stolen</option>
                                    @elseif ($device->status == "lost")
                                <option value="good" >Good</option>
                                <option value="lost" selected>Lost</option>
                                <option value="stolen">Stolen</option>
                                    @else
                                <option value="good" >Good</option>
                                <option value="lost">Lost</option>
                                <option value="stolen" selected>Stolen</option>

                                    @endif
                            </select>
                        </div>
                    </div>




                    <div style="padding-top: 20px;padding-bottom: 30px;display: flex;align-items: center;justify-content: center;">
                        <button type="submit" >Report</button>
                    </div>



                </form>


            </div>
        </div>
    </div>




@endsection