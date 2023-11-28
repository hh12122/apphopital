<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Store\File\Reader;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Notification;
use App\Notifications\MyFirstNotification;

class AdminController extends Controller
{
    public function addview(){
        if (Auth::id())
        {
                if(Auth::user()->useryype=='1'){

                return view('admin.add_doctor');

            } else{
                return redirect()->back();
        }
        }else{
            return redirect('login');
        }
    }

    public function emails($id){
      $data=Appointment::find($id);
        return view('admin.emailview',compact('data'));
    }
    public function delete($id){
        $data=Doctor::find($id);
        $data->delete();
        return redirect()->back();

    }
    public function sendemail(Request $request,$id){
$data=Appointment::find($id);
$details=[

'greeting' => $request->greeting,
'body'=> $request->body,
'actiontext'=>$request->actiontext,
'actionurl'=>$request->actionurl,
'endpart'=>$request->endpart,


];
Notification::send($data,new MyFirstNotification($details));
return redirect()->back()->with('message','email sent');
    }

    public function editdoctor(Request $request, $id){
        $data=Doctor::find($id);
       $data->name=$request->name;
       $data->phone=$request->phone;
       $data->speciality=$request->speciality;
       $data->room=$request->room;
       $image=$request->file;
if($image){

    $imagename=time().'.'.$image->getClientoriginalExtension();
    $request->file->move('doctorimage', $imagename);
    $data->image=$imagename;
}


$data->save();

        return redirect()->back()->with('message',' doctor update successfuly');

    }
    public function update($id){

$data=Doctor::find($id);
      return view('admin.updatedoctor',compact('data'));
    }



    public function showdoctor(){
        $data=Doctor::all();

        return view('admin.showdoctor',compact('data'));
    }

    public function canceled($id){
        $data=Appointment::find($id);
        $data->status='canceled';
        $data->save();
        return redirect()->back();

    }     public function approved($id){
        $data=Appointment::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();

    }



    public function show(){
        if (Auth::id())
        {
                if(Auth::user()->useryype=='1'){
                    $data=Appointment::all();

                    return view('admin.showappoint',compact('data'));

            } else{
                return redirect()->back();
        }
        }else{
            return redirect('login');
        }
    }



    public function upload(Request $request){
$doctor = new Doctor();
$image=$request->file;
$imagename=time().'.'.$image->getClientoriginalExtension();
$request->file->move('doctorimage', $imagename);
$doctor->image=$imagename;
$doctor->name=$request->name;
$doctor->phone=$request->nubmer;
$doctor->speciality=$request->speciality;
$doctor->room=$request->room;
$doctor->save();

return redirect()->back()->with('message','doctor added sucessfully');
    }
}
