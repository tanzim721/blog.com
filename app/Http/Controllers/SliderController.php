<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  
 
class SliderController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = Slider::all();
        return view('backend.slider.view', $data);
    }
    public function add(){
        return view('backend.slider.add');
    }
    public function store(Request $request){
        $data = new Slider();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.sliders.view')->with('success', "Services Successfully Stored.");
    }
    public function edit($id){
        $editData = Slider::find($id);
        return view('backend.slider.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Slider::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/slider_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/slider_images'),$filename);
            $data['image']=$filename;
        }
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.sliders.view')->with('success', "Sliders Successfully Updated.");
    }
    public function delete($id){
        $data = Slider::find($id);
        if (file_exists('upload/slider_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/slider_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.sliders.view')->with('success', 'Sliders successfully deleted.');
    }
}
