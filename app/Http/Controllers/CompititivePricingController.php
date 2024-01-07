<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\CompititivePricing;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class CompititivePricingController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = CompititivePricing::all();
        return view('backend.compititive_pricing.view', $data);
    }
    public function add(){
        return view('backend.compititive_pricing.add');
    }
    public function store(Request $request){
        $data = new CompititivePricing();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/compititive_pricings_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.compititive_pricings.view')->with('success', "Compititive Pricing Successfully Stored.");
    }
    public function edit($id){
        $editData = CompititivePricing::find($id);
        return view('backend.compititive_pricing.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = CompititivePricing::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/compititive_pricings_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/compititive_pricings_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.compititive_pricings.view')->with('success', "Compititive Pricing Successfully Updated.");
    }
    public function delete($id){
        $data = CompititivePricing::find($id);
        if (file_exists('upload/compititive_pricings_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/compititive_pricings_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.compititive_pricings.view')->with('error', 'Compititive Pricing successfully deleted.');
    }
}
