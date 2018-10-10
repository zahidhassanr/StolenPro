@extends('layouts/layout')

@section('header')
<title>
    Register Device
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


@endsection


@section('content')

    <div style="padding-top: 30px;display: flex;align-items: center;justify-content: center;padding-bottom: 30px">

    @if($errors->any())
        <p style="color: red">{{$errors->first()}}</p>
    @endif
    </div>
    <div style="padding-top: 30px;display: flex;align-items: center;justify-content: center;">
        <h3>Register Device</h3>
    </div>


    <div class="main" >
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2"></div>

            <div class="col-lg-8 col-md-8 col-sm-8" style="background: #F5F5F5;border: 0.5px solid black">
<form method="post" action="{{route('register_device')}}"                  enctype="multipart/form-data">

    {{csrf_field()}}
                <div class="row" style="padding-top: 20px">
                    <div class="col-lg-2 col-md-2 col-sm-2">
                        <label for="type">Device Type</label>
                    </div>

                    <div class="col-lg-5 col-md-5 col-sm-5">
                        <select id="type_select" name="type"  style="width: 48%;box-shadow: 2px 2px #888888" >
                            <option value="mobile">Mobile</option>
                            <option value="Desktop">Desktop</option>
                            <option value="Laptop">Laptop</option>
                            <option value="Motor-cycle">Motor-cycle</option>
                            <option value="bicycle">bicycle</option>
                            <option value="Car">Car</option>
                            <option value="other Electronics">other Electronics</option>
                            <option value="Tools">Tools</option>

                        </select>
                    </div>

                </div>

    <div class="row" style="padding-top: 20px;">
        <div class="col-lg-2 col-md-2 col-sm-2">
            <label for="company">Device Company</label>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-5">
            <select id="company_select" name="company" style="width: 48%;box-shadow: 2px 2px #888888">
                <option value="apple">Apple</option>
                <option value="Samsung">Samsung</option>
                <option value="Hp">Hp</option>
                <option value="Dell">Dell</option>
                <option value="Motorola">Motorola</option>
                <option value="Ford">Ford</option>
                <option value="Tesla">Tesla</option>

            </select>
        </div>
    </div>

        <div class="row" style="padding-top: 20px">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <label for="model">Device Model</label>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-5">
                <input type="text" name="model" placeholder="Example: samsung s7 edge" style="box-shadow: 2px 2px #888888">
            </div>

        </div>

         <div class="row" style="padding-top: 20px">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <label for="identify_type">Device Identifier Type</label>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-5">
                <input type="text" name="identify_type" placeholder="Example: Imei or Mac address" style="box-shadow: 2px 2px #888888">
            </div>

        </div>

        <div class="row" style="padding-top: 20px">
            <div class="col-lg-2 col-md-2 col-sm-2">
                <label for="identify">Device Identifier</label>
            </div>

            <div class="col-lg-5 col-md-5 col-sm-5">
                <input type="text" name="identify"  style="box-shadow: 2px 2px #888888">
            </div>

        </div>

    <div class="row" style="padding-top: 20px">
        <div class="col-lg-2 col-md-2 col-sm-2">
            <label for="status">Device Status</label>
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2">
            <input type="radio" name="status" value="New" checked>New
        </div>

        <div class="col-lg-2 col-md-2 col-sm-2">
            <input type="radio" name="status" value="Used" >Used
        </div>

    </div>

    <div class="row" style="padding-top: 20px">
        <div class="col-lg-2 col-md-2 col-sm-2">
            <label for="date">Date since using</label>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-5">
            <input type="date" name="date" value="2000-01-01" > <i class="fa fa-calendar"></i>
        </div>


    </div>

    <div class="row" style="padding-top: 20px">
        <div class="col-lg-2 col-md-2 col-sm-2">
            <label for="contact">Contact number</label>
        </div>

        <div class="col-lg-5 col-md-5 col-sm-5">
            <input type="text" name="contact"  style="box-shadow: 2px 2px #888888">
        </div>


    </div>


        <div class="file" style="padding-top: 20px">
            <input type="file" id="myfile" name="photos[]" accept="image/*" multiple required>
        </div>



    <script>
        function fileFuction() {
            var file = document.getElementById('myfile');

            var count = 0;
            for (var i = 0; i < file.files.length; i++) {
                count = count + 1;
            }



            if (count == 1) {


                createCookie("image1",  file.files.item(0).name,"1");
                createCookie("image2", 0,"1");
                createCookie("image3",0,"1");
            }

            if (count == 2) {

                createCookie("image1",  file.files.item(0).name,"1");
            
                createCookie("image2", file.files.item(1).name,"1");
                
                createCookie("image3",0,"1");

            }

            if (count > 2) {

                createCookie("image1",  file.files.item(0).name);
                
                createCookie("image2", file.files.item(1).name);
                
                createCookie("image3",file.files.item(2).name);
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

    <div style="padding-top: 20px;padding-bottom: 30px;display: flex;align-items: center;justify-content: center;">
        <button type="submit" onclick="fileFuction()" >Register</button>
    </div>



</form>


</div>
            </div>
        </div>


@endsection