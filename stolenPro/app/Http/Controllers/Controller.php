<?php

namespace App\Http\Controllers;

use App\device;
use App\User;
use App\report;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    function signingup(Request $request)
    {
        $user =new User;

        $user->first_name=$request['firstname'];
        $user->last_name=$request['lastname'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->last_name=$request['lastname'];
        $user->phone_number=$request['phone'];
        $user->city=$request['city'];
        $user->address=$request['location'];


        $user->save();

        session()->put('user_id',$user->id);
        session()->put('user_name',$user->first_name);

        return redirect()->route('home');
    }


    function login(Request $request1)
    {
        $email=$request1['email'];
        $pass=$request1['password'];

           

        $user=User::where([
           ['email','=',$email],
           ['password','=',$pass]
        ])->first();
        if($user)
        {

            session()->put('user_id',$user->id);
            session()->put('user_name',$user->first_name);
            return redirect()->route('home');
        }
        else{
            return redirect()->back()->withErrors(['wrong email or password']);

        }



    }


    function  register_device(Request $request2)
    {
        if(session()->get('user_id') == null)
        {
            return redirect()->back()->withErrors(['You are not login..Log in or Register first']);
        }

        $device=new device;

        $device->user_id=session()->get('user_id');
        $device->device_type=$request2['type'];
        $device->device_company=$request2['company'];
        $device->device_model=$request2['model'];
        $device->device_identity=$request2['identify'];
        $device->identity_type=strtolower($request2['identify_type']);
        $device->status='good';
        $device->used_year=$request2->date;
        $device->phoneNum=$request2['contact'];

        foreach ($request2->file('photos') as $file) {
            

            $file->storeAs('upload', $file->getClientOriginalName());
            $source=base_path('storage\\app\\public\\upload\\'.$file->getClientOriginalName());
            $dest=base_path('public\\images\\device\\'.$file->getClientOriginalName());
            \File::copy($source, $dest);
        }



        if($request2['status']=="New")
        {
            $device->new=true;
        }
        else{
            $device->new=false;
        }
        

            $device->device_image1="images/device/".$_COOKIE['image1'];
            $device->device_image2="images/device/".$_COOKIE['image2'];
            $device->device_image3="images/device/".$_COOKIE['image3'];

            


        $device->save();


        

        return redirect()->back()->withErrors(['Your device is registerd Successfully. Want to register another device?']);

    }


    function report()
    {
        if(session()->get('user_id')!= null)
        {
            return view('report');
        }
        else{
            return view('login')->withErrors(['you should login first']);
        }

    }


    function  report_submit(Request $request3)
    {
        $report=new report;
        $report->user_id=session()->get('user_id');
        $report->email=$request3['email'];
        $report->lost_date=$request3['lost_date'];
        $report->item_type=$request3['type'];
        $report->identify_type=strtolower($request3['identify_type']);
        $report->item_identify=$request3['identify'];
        $report->item_description=$request3['description'];
        $report->lost_location=$request3['location'];
        $report->phone=$request3['phone'];
        $report->status=$request3['status'];
        $report->item_image1="images/report/".$_COOKIE['report_image1'];
        $report->item_image2="images/report/".$_COOKIE['report_image2'];

        foreach ($request3->file('photos') as $file) {
            

            $file->storeAs('upload', $file->getClientOriginalName());
            $source=base_path('storage\\app\\public\\upload\\'.$file->getClientOriginalName());
            $dest=base_path('public\\images\\report\\'.$file->getClientOriginalName());
            \File::copy($source, $dest);
        }

        $report->save();

        return redirect()->back()->withErrors(['Your report is saved Successfully. Want to report another one']);


    }


    function update_device($device_id)
    {
        $device=device::where('id',$device_id)->first();

        return view('update_device', ['device' =>$device]);


        

    }


    function check_device(Request $request4)
    {

        $type=strtolower($request4['identify_type']);
        $identifier=$request4['identify'];


        $device=device::where([
           ['identity_type','=',$type],
           ['device_identity','=',$identifier]
        ])->first();


        $report=report::where([
           ['identify_type','=',$type],
           ['item_identify','=',$identifier]
        ])->first();

        return view('matched_device',['device' => $device , 'report' => $report]);

    }

    function find_device(Request $request6)
    {
        $type=strtolower($request6['identify_type']);
        $identifier=$request6['identify'];


        $device=device::where([
           ['identity_type','=',$type],
           ['device_identity','=',$identifier]
        ])->first();

        return view('report_register',['device' => $device]);
    }


    function updating_device(Request $request5,$device_id)
    {
        $device1=device::where('id',$device_id)->first();
        $device=new device;
        $device->id=$device1->id;
        $device->user_id=session()->get('user_id');
        $device->device_type=$request5['type'];
        $device->device_company=$request5['company'];
        $device->device_model=$request5['model'];
        $device->device_identity=$request5['identify'];
        $device->identity_type=strtolower($request5['identify_type']);
        $device->status='good';
        $device->used_year=$request5->date;
        $device->phoneNum=$request5['contact'];

       


        if($request5['status']=="New")
        {
            $device->new=true;
        }
        else{
            $device->new=false;
        }
        

            $device->device_image1=$device1->device_image1;
            $device->device_image2=$device1->device_image2;
            $device->device_image3=$device1->device_image3;

            $device1->delete();
            $device->save();

            return view('welcome');

    }

    function report_register(Request $request7,$device_id)
    {
        $device1=device::where('id',$device_id)->first();
        $device=new device;
        $device->id=$device1->id;
        $device->user_id=session()->get('user_id');
        $device->device_type=$request7['type'];
        $device->used_year=$device1->used_year;
        $device->device_company=$request7['company'];
        $device->device_model=$request7['model'];
        $device->device_identity=$request7['identify'];
        $device->identity_type=strtolower($request7['identity_type']);
        $device->status=$request7['status'];
        $device->phoneNum=$request7['contact'];

       


        if($request7['status']=="New")
        {
            $device->new=true;
        }
        else{
            $device->new=false;
        }
        

            $device->device_image1=$device1->device_image1;
            $device->device_image2=$device1->device_image2;
            $device->device_image3=$device1->device_image3;

            



        $report=new report;
        $report->user_id=session()->get('user_id');

        $user=User::where('id',session()->get('user_id'))->first();

        $report->email=$user->email;
        $report->lost_date=$request7['date'];
        $report->item_type=$request7['type'];
        $report->identify_type=strtolower($request7['identity_type']);
        $report->item_identify=$request7['identify'];
        $report->item_description=$request7['identity_type'].$request7['identify'];
        $report->lost_location='location';
        $report->phone=$request7['contact'];
        $report->status=$request7['status'];
        $report->item_image1=$device1->device_image1;
        $report->item_image2=$device1->device_image2;


            $device1->delete();
            $device->save();
            $report->save();

            return view('report')->withErrors(['Your report is saved Successfully. Want to report another one']);

    }

}


