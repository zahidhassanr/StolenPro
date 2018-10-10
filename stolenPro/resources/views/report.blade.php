@extends('layouts/layout')

@section('header')


    <title>Report</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



@endsection


@section('content')



 <div style="padding-top: 30px;display: flex;align-items: center;justify-content: center;padding-bottom: 30px">

    @if($errors->any())
        <p style="color: red">{{$errors->first()}}</p>
    @endif
    </div>

    <div style="padding-top: 30px;display: flex;align-items: center;justify-content: center;">
        <h3>Report lost or stolen device</h3>
    </div>
<div class="main">

    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2"></div>

        <div class="col-lg-8 col-md-8 col-sm-8" style="background: #F5F5F5;border: 0.5px solid black">
<div style="padding-top: 20px">
            <a href="{{route('al_reg_device')}}"><button  type="button" style="background: #286090;color:white">Device is already resigtered?</button></a>
</div>
<form method="post" action="{{route('report_submit')}}" enctype="multipart/form-data">

    {{csrf_field()}}
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6">

                    <h3 style="padding-top: 20px">Missing Item Description</h3>
                <div class="row" style="padding-top: 20px">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="lost_date">Date since lost</label>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <input type="date" name="lost_date" value="<?php echo date('Y-m-d'); ?>"  style="width: 60%;box-shadow: 2px 2px #888888">
                    </div>
                </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label for="type">Type</label>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <select id="type" name="type"  style="box-shadow: 2px 2px #888888" >
                                <option value="mobile">Mobile</option>
                                <option value="Desktop">Desktop</option>
                                <option value="Laptop">Laptop</option>
                                <option value="Motor-cycle">Motor-cycle</option>
                                <option value="bicycle">bicycle</option>
                                <option value="Car">Car</option>
                                <option value="other Electronics"> Other Electronics </option>
                                <option value="Tools">Tools</option>

                            </select>
                        </div>


                    </div>


                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label for="identify">Item Identifier Type</label>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" name="identify_type" placeholder="Ex: IMEI" style="width: 60%;box-shadow: 2px 2px #888888">
                        </div>
                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label for="identify">Item Identifier</label>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" name="identify" style="width: 60%;box-shadow: 2px 2px #888888">
                        </div>
                    </div>
                <div class="row" style="padding-top: 20px">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <label for="location">Item description</label>
                    </div>

                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <textarea rows="3" cols="25" style="box-shadow: 2px 2px #888888;" placeholder="Item Description"  name="description" required autofocus></textarea>
                    </div>
                </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label for="location">Location of lost</label>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" name="location" placeholder="loaction of lost or stolen" style="width: 60%;box-shadow: 2px 2px #888888">
                        </div>
                    </div>


                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <label for="status">Device Status</label>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <input type="radio" name="status" value="lost" checked>Lost
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <input type="radio" name="status" value="stolen" >Stolen
                        </div>
                    </div>

                    <div class="file" style="padding-top: 20px;padding-bottom: 30px">
                        <input type="file" id="myfile" name="photos[]" accept="image/*" multiple required>
                    </div>


                </div>


                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h3 style="padding-top: 20px">Contact Information</h3>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="name">Name</label>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" name="name" placeholder="Your name" style="width: 60%;box-shadow: 2px 2px #888888">
                        </div>

                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="email">Email</label>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="email" name="email" placeholder="Your Email" style="width: 60%;box-shadow: 2px 2px #888888">
                        </div>

                    </div>

                    <div class="row" style="padding-top: 20px">
                        <div class="col-lg-2 col-md-2 col-sm-2">
                            <label for="phone">Phone</label>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" name="phone" placeholder="Ex: 01*********" style="width: 60%;box-shadow: 2px 2px #888888">
                        </div>

                    </div>



                </div>





            </div>

    <div style="padding-top: 20px;padding-bottom: 30px;display: flex;align-items: center;justify-content: center;">
        <button type="submit" onclick="fileFuction()">Register</button>
    </div>


</form>


<script>
            function fileFuction() {
            var file = document.getElementById('myfile');

            var count = 0;
            for (var i = 0; i < file.files.length; i++) {
            count = count + 1;
            }



            if (count == 1) {


            createCookie("report_image1",  file.files.item(0).name,"1");
            createCookie("report_image2", 0,"1");
            createCookie("report_image3",0,"1");
            }

            if (count == 2) {

            createCookie("report_image1",  file.files.item(0).name,"1");
            createCookie("report_image2", file.files.item(1).name,"1");
            createCookie("report_image3",0,"1");

            }

            if (count > 2) {

            createCookie("report_image1",  file.files.item(0).name);
            createCookie("report_image2", file.files.item(1).name);
            createCookie("report_image3",file.files.item(2).name);

            }
            }

            function createCookie(name, value, days) {
            var expires;

            if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toGMTString();
            } else {
            expires = "";
            }
            document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
            }


</script>

        </div>
    </div>

</div>


@endsection