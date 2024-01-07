<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Partner;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  

class PartnerController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = Partner::all();
        return view('backend.partner.view', $data);
    }
    public function add(){
        return view('backend.partner.add');
    }
    public function store(Request $request){
        $data = new Partner();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/partner_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.partners.view')->with('success', "Partner Successfully Stored.");
    }
    public function edit($id){
        $editData = Partner::find($id);
        return view('backend.partner.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Partner::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/partner_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/partner_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.partners.view')->with('success', "Partner Successfully Updated.");
    }
    public function delete($id){
        $data = Partner::find($id);
        if (file_exists('upload/partner_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/partner_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.partners.view')->with('error', 'Partner successfully deleted.');
    }
}
