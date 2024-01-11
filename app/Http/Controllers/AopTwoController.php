<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Partner;
use App\Models\PartnerOne;
use App\Models\AopOne;
use App\Models\AopTwo;

use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class AopTwoController extends Controller
{
    public function view(){
        $data['countAopTwos'] = AopTwo::count();
        $data['allData'] = AopTwo::all();
        return view('backend.aop_twos.view', $data);
    }
    public function add(){
        return view('backend.aop_twos.add');
    }
    public function store(Request $request){
        $data = new AopTwo();
        $data->short_title = $request->short_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/aop_twos_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.aop_twos.view')->with('success', "AOPs Successfully Stored.");
    }
    public function edit($id){
        $editData = AopTwo::find($id);
        return view('backend.aop_twos.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = AopTwo::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/aop_twos_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/aop_twos_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.aop_twos.view')->with('success', "AOPs Successfully Updated.");
    }
    public function delete($id){
        $data = AopTwo::find($id);
        if (file_exists('upload/aop_twos_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/aop_twos_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.aop_twos.view')->with('error', 'AOPs successfully deleted.');
    }
}
