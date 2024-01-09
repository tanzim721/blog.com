<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Partner;
use App\Models\ServiceOffer;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;

class ServiceOfferController extends Controller
{
    public function view(){
        $data['countOffer'] = ServiceOffer::count();
        $data['allData'] = ServiceOffer::all();
        return view('backend.service_offers.view', $data);
    }
    public function add(){
        return view('backend.service_offers.add');
    }
    public function store(Request $request){
        $data = new ServiceOffer();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.service_offers.view')->with('success', "Service offers Successfully Stored.");
    }
    public function edit($id){
        $editData = ServiceOffer::find($id);
        return view('backend.service_offers.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = ServiceOffer::find($id);
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.service_offers.view')->with('success', "Service Offer Successfully Updated.");
    }
    public function delete($id){
        $data = ServiceOffer::find($id);
        $data->delete();
        return redirect()->route('panel.service_offers.view')->with('error', 'Service Offer successfully deleted.');
    }
}
