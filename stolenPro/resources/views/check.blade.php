@extends('layouts/layout')

@section('header')


    <title>Check</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

@endsection

@section('content')

	<div style="padding-top: 120px;display: flex;align-items: center;justify-content: center;">
        <h3>Check Device</h3>
    </div>

	<div class="container" style="padding-top: 50px;">
		

		<div class="row">
			<div class="col-lg-2 col-md-2 col-sm-2 col-1"></div>

			<div class="col-lg-8 col-md-8 col-sm-8 col-10" style="background: #F5F5F5;border: 0.5px solid black">
				<form method="post" action="{{route('matched_device')}}">

    {{csrf_field()}}

    <div class="row" style="padding-top: 50px">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-2">
                            <label for="identify_type">Device Identifier Type</label>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8 col-10">
                            <input type="text" name="identify_type" placeholder="Ex: IMEI" style="width: 90%;box-shadow: 2px 2px #888888" required>
                        </div>
                    </div>

                    <div class="row" style="padding-top: 50px">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-2">
                            <label for="identify">Device Identifier</label>
                        </div>

                        <div class="col-lg-8 col-md-8 col-sm-8 col-10">
                            <input type="text" name="identify" style="width: 90%;box-shadow: 2px 2px #888888" required>
                        </div>
                    </div>

                    <div style="padding-top: 20px;padding-bottom: 30px;display: flex;align-items: center;justify-content: center;">
        <button type="submit"> Check </button>
    </div>


</form>


			</div>


		</div>
	</div>


@endsection