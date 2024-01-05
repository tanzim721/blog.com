<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Mission;
use App\Models\Vision;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class VisionController extends Controller
{
    public function view(){
        $data['countVision'] = Vision::count();
        $data['allData'] = Vision::all();
        return view('backend.vision.view', $data);
    }
    public function add(){
        return view('backend.vision.add');
    }
    public function store(Request $request){
        $data = new Vision();
        $data->title = $request->title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/vision_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.visions.view')->with('success', "Vision Successfully Stored.");
    }
    public function edit($id){
        $editData = Vision::find($id);
        return view('backend.vision.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Vision::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/vision_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/vision_images'),$filename);
            $data['image']=$filename;
        }
        $data->title = $request->title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.visions.view')->with('success', "Vision Successfully Updated.");
    }
    public function delete($id){
        $data = Vision::find($id);
        if (file_exists('upload/vision_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/vision_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.visions.view')->with('success', 'vision successfully deleted.');
    }
}
