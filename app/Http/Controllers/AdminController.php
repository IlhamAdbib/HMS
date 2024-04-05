<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview(){
       return view('admin.add_doctor');
    }

    public function upload(Request $request){
      $request->validate([
          'doctor-image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation rule corrected
      ]);
      
      $doctor = new Doctor; // Assuming Doctor is the correct model name
      $doctor->named = $request->named;
      $doctor->phone = $request->phone;
      $doctor->speciality = $request->speciality;
      $doctor->room = $request->room;
      
      if ($request->hasFile('doctor-image')) { // Correcting file check to 'doctor-image'
          $image = $request->file('doctor-image'); // Getting the uploaded file
          $imagename = time().'.'.$image->getClientOriginalExtension();
          $image->move('doctorimage', $imagename);
          $doctor->image = $imagename;
      }
      
      $doctor->save();
      
      return redirect()->back()->with('message','Doctor added successfully');
  }
  

     public function showappointment(){
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
     }

     public function approved($id){
        $data=appointment::find($id);
        $data->status='approved';
        $data->save();
        return redirect()->back();
     }
     public function canceled($id){
        $data=appointment::find($id);
        $data->status='canceled';
        $data->save();
        return redirect()->back();
     }

     public function showdoctor(){
        $data=doctor::all();
        return view('admin.showdoctor',compact('data'));
     }

     public function deletedoctor($id){
        $data=doctor::find($id);
        $data->delete();
        return redirect()->back();
     }

     public function updatedoctor($id){
      $data=doctor::find($id);
      return view('admin.update_doctor',compact('data'));
   }

   public function editdoctor( Request $request,$id){
      $data=doctor::find($id);
      $doctor->name=$request->name;
      $doctor->phone=$request->phone;
      $doctor->speciality=$request->speciality;
      $doctor->room=$request->room;
      $image=$request->file;
      if($image){
         $imagename=time().'.'.$image->getClientOriginalExtension();
         $request->file->move('doctorimage',$imagename);
         $doctor->image=$imagename;
      }
      
      
      $doctor->save();
      return redirect()->back()->with('message','Doctor details updated successfully');
   }


}
