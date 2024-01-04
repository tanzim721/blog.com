<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  

class ProfileController extends Controller
{
    public function view(){
        // dd('ok');
        $id = Auth::user()->id;
        $user = User::find($id);
        // dd($user);
        return view('backend.user.view', compact('user'));
    }
    public function edit(){
        $id = Auth::user()->id;
        $editData = User::find($id);
        return view('backend.user.edit-profile', compact('editData'));
    }
    public function update(Request $request){
        $data = User::find(Auth::user()->id);
        $data->usertype = $request->usertype;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;
        if($request->file('image')){
            $file= $request->file('image');
            @unlink(\public_path('upload/logo/'.$data->logo));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['image']=$filename;
        }
        $data->save();
        return redirect()->route('panel.profile.view')->with('success', 'Data Updated Successfully');
    }
}
