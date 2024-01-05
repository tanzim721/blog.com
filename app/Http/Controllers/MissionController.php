<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Mission;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 


class MissionController extends Controller
{
    public function view(){
        $data['countMission'] = Mission::count();
        $data['allData'] = Mission::all();
        return view('backend.mission.view', $data);
    }
    public function add(){
        return view('backend.mission.add');
    }
    public function store(Request $request){
        $data = new Mission();
        $data->title = $request->title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/mission_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.missions.view')->with('success', "Mission Successfully Stored.");
    }
    public function edit($id){
        $editData = Mission::find($id);
        return view('backend.mission.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Mission::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/mission_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/mission_images'),$filename);
            $data['image']=$filename;
        }
        $data->title = $request->title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.missions.view')->with('success', "Mission Successfully Updated.");
    }
    public function delete($id){
        $data = Mission::find($id);
        if (file_exists('upload/mission_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/mission_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.missions.view')->with('success', 'Mission successfully deleted.');
    }
}
