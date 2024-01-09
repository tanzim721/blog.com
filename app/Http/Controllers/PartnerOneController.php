<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Partner;
use App\Models\PartnerOne;

use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  

class PartnerOneController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = PartnerOne::all();
        return view('backend.partner_ones.view', $data);
    }
    public function add(){
        return view('backend.partner_ones.add');
    }
    public function store(Request $request){
        $data = new PartnerOne();
        $data->short_title = $request->short_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/partner_one_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.partner_ones.view')->with('success', "Real estate Successfully Stored.");
    }
    public function edit($id){
        $editData = PartnerOne::find($id);
        return view('backend.partner_ones.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = PartnerOne::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/partner_one_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/partner_one_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.partner_ones.view')->with('success', "Real estate Successfully Updated.");
    }
    public function delete($id){
        $data = PartnerOne::find($id);
        if (file_exists('upload/partner_one_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/partner_one_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.partner_ones.view')->with('error', 'Real estate successfully deleted.');
    }
}
