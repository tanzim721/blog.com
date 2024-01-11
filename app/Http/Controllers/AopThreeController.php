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
use App\Models\AopThree;

use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 


class AopThreeController extends Controller
{
    public function view(){
        $data['countAopThrees'] = AopThree::count();
        $data['allData'] = AopThree::all();
        return view('backend.aop_threes.view', $data);
    }
    public function add(){
        return view('backend.aop_threes.add');
    }
    public function store(Request $request){
        $data = new AopThree();
        $data->short_title = $request->short_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/aop_threes_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.aop_threes.view')->with('success', "AOPs Successfully Stored.");
    }
    public function edit($id){
        $editData = AopThree::find($id);
        return view('backend.aop_threes.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = AopThree::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/aop_threes_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/aop_threes_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.aop_threes.view')->with('success', "AOPs Successfully Updated.");
    }
    public function delete($id){
        $data = AopThree::find($id);
        if (file_exists('upload/aop_threes_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/aop_threes_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.aop_threes.view')->with('error', 'AOPs successfully deleted.');
    }
}
