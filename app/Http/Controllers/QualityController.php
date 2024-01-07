<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Quality;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class QualityController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = Quality::all();
        return view('backend.quality.view', $data);
    }
    public function add(){
        return view('backend.quality.add');
    }
    public function store(Request $request){
        $data = new Quality();
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.qualitys.view')->with('success', "Quality Successfully Stored.");
    }
    public function edit($id){
        $editData = Quality::find($id);
        return view('backend.quality.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Quality::find($id);
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.qualitys.view')->with('success', "Quality Successfully Updated.");
    }
    public function delete($id){
        $data = Quality::find($id);
        $data->delete();
        return redirect()->route('panel.qualitys.view')->with('success', 'Quality successfully deleted.');
    }
}
