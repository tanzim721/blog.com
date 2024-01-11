<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\NewsEvent;
use App\Models\Location;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  


class LocationController extends Controller
{
    public function view(){
        $data['countLocation'] = Location::count();
        $data['allData'] = Location::all();
        return view('backend.location.view', $data);
    }
    public function add(){
        return view('backend.location.add');
    }
    public function store(Request $request){
        $data = new Location();
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.locations.view')->with('success', "Location Successfully Stored.");
    }
    public function edit($id){
        $editData = Location::find($id);
        return view('backend.location.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Location::find($id);
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.locations.view')->with('success', "Location Successfully Updated.");
    }
    public function delete($id){
        $data = Location::find($id);
        $data->updated_by = Auth::user()->id;
        $data->delete();
        return redirect()->route('panel.locations.view')->with('error', 'Location successfully deleted.');
    }
}
