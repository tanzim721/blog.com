<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\FactoryEvaluationList;
use App\Models\BusinessTime;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class BusinessTimeController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = BusinessTime::all();
        return view('backend.business_times.view', $data);
    }
    public function add(){
        return view('backend.business_times.add');
    }
    public function store(Request $request){
        $data = new BusinessTime();
        $data->short_title = $request->short_title;
        $data->time = $request->time;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.business_times.view')->with('success', "Business Time Successfully Stored.");
    }
    public function edit($id){
        $editData = BusinessTime::find($id);
        return view('backend.business_times.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = BusinessTime::find($id);
        $data->short_title = $request->short_title;
        $data->time = $request->time;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.business_times.view')->with('success', "Business Time Successfully Updated.");
    }
    public function delete($id){
        $data = BusinessTime::find($id);
        $data->delete();
        return redirect()->route('panel.business_times.view')->with('error', 'Business Time successfully deleted.');
    }
}
