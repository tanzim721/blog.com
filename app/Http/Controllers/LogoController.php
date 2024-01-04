<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  


class LogoController extends Controller
{
    public function view(){
        $data['allData'] = Logo::all();
        // dd('ok');
        return view('backend.logo.view', $data);
    }
    public function add(){
        return view('backend.logo.add');
    }
    public function store(Request $request){
        
        $data = new Logo();
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'),$filename);
            $data['logo']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.logo.view')->with('success', "Logo Successfully Stored.");
    }
    public function edit($id){
        $editData = Logo::find($id);
        return view('backend.logo.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Logo::find($id);
        if($request->file('image')){
            $file= $request->file('image');
            @unlink(public_path('upload/logo_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/logo_images'),$filename);
            $data['logo']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.logo.view')->with('success', "Logo Successfully Updated.");
    }
    public function delete($id){
        $data = Logo::find($id);
        $data->updated_by = Auth::user()->id;
        if (file_exists('upload/logo_images/' . $data->logo) AND ! empty ($data->logo)) {
            unlink('upload/logo_images/'.$data->logo);
        }
        $data->delete();
        return redirect()->route('panel.logo.view')->with('success', 'Logo successfully deleted.');
    }
}
