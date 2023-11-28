<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use App\Models\Appointment;
class HomeController extends Controller
{
    public function redirect(){

        if (Auth::id())
        {
                if(Auth::user()->useryype=='0'){
                    $doctor = Doctor::all();
                return view('user.Homes',compact('doctor'));

            }else{
                    return view('admin.home');
                }
        }
        else{
                return redirect()->back();
        }
    }
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }
    public function indexx(){

        if (Auth::id()) {
            return redirect('home');
        }else {
            $doctor= Doctor::all();
            return view('user.Homes',compact('doctor'));
        }


    }
    public function myappoint(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0')
            {
                $user_id=Auth::user()->id;
                $appoint = Appointment::where('user_id',$user_id)->get();
                return view('user.myappointment',compact('appoint'));
            }else{
                return view('admin.home');
            }
    }
    else{
            return redirect()->back();
    }

    }
    public function uploadappoint(Request $request){
        $Appointment = new Appointment();

        if(Auth::id()){
            $Appointment ->user_id=Auth::user()->id;

        }
        $Appointment ->name=$request->name;
        $Appointment ->email=$request->email;
        $Appointment ->phone=$request->phone;
        $Appointment ->doctor=$request->doctor;
        $Appointment ->date=$request->date;

        $Appointment ->message=$request->message;
        $Appointment ->status="In Progress";

        $Appointment ->save();

        return redirect()->back()->with('message','Appointment added sucessfully');
            }

            public function cancel($id){
                $data=Appointment::find($id);
                $data->delete();
                return redirect()->back();

            }
}
