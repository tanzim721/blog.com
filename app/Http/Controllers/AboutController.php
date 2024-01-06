<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\About;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  

class AboutController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = About::all();
        return view('backend.about.view', $data);
    }
    public function add(){
        return view('backend.about.add');
    }
    public function store(Request $request){
        $data = new About();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->ceo_name = $request->ceo_name;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.abouts.view')->with('success', "About Successfully Stored.");
    }
    public function edit($id){
        $editData = About::find($id);
        return view('backend.about.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = About::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/about_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->ceo_name = $request->ceo_name;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.abouts.view')->with('success', "About Successfully Updated.");
    }
    public function delete($id){
        $data = About::find($id);
        if (file_exists('upload/about_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/about_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.abouts.view')->with('success', 'About successfully deleted.');
    }
}
