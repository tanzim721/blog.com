<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Merchandising;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class MerchandisingController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = Merchandising::all();
        return view('backend.merchandising.view', $data);
    }
    public function add(){
        return view('backend.merchandising.add');
    }
    public function store(Request $request){
        $data = new Merchandising();
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/merchandising_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.merchandisings.view')->with('success', "Merchandising Successfully Stored.");
    }
    public function edit($id){
        $editData = Merchandising::find($id);
        return view('backend.merchandising.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Merchandising::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/merchandising_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/merchandising_images'),$filename);
            $data['image'] = $filename;
        }
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.merchandisings.view')->with('success', "Merchandising Successfully Updated.");
    }
    public function delete($id){
        $data = Merchandising::find($id);
        if (file_exists('upload/merchandising_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/merchandising_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.merchandisings.view')->with('success', 'Merchandising successfully deleted.');
    }
}
