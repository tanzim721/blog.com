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
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.services.view')->with('success', "Service Successfully Updated.");
    }
    public function delete($id){
        $data = Service::find($id);
        $data->delete();
        return redirect()->route('panel.services.view')->with('success', 'Service successfully deleted.');
    }
}