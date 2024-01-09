<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  

class ServicesController extends Controller
{
    public function view(){
        $data['countService'] = Service::count();
        $data['allData'] = Service::all();
        return view('backend.service.view', $data);
    }
    public function add(){
        return view('backend.service.add');
    }
    public function store(Request $request){
        $data = new Service();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/service_images'),$filename);
            $data['image']=$filename;
        }
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.services.view')->with('success', "Services Successfully Stored.");
    }
    public function edit($id){
        $editData = Service::find($id);
        return view('backend.service.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Service::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/service_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/service_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.services.view')->with('success', "Service Successfully Updated.");
    }
    public function delete($id){
        $data = Service::find($id);
        if (file_exists('upload/service_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/service_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.services.view')->with('success', 'Service successfully deleted.');
    }
}