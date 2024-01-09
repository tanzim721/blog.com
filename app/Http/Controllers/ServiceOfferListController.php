<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\service_offer_lists;
use App\Models\ServiceOffer;
use App\Models\ServiceOfferList;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;


class ServiceOfferListController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = ServiceOfferList::all();
        return view('backend.service_offer_lists.view', $data);
    }
    public function add(){
        return view('backend.service_offer_lists.add');
    }
    public function store(Request $request){
        $data = new ServiceOfferList();
        $data->short_title = $request->short_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/service_offer_list_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.service_offer_lists.view')->with('success', "service_offer_lists Successfully Stored.");
    }
    public function edit($id){
        $editData = ServiceOfferList::find($id);
        return view('backend.service_offer_lists.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = ServiceOfferList::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/service_offer_list_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/service_offer_list_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.service_offer_lists.view')->with('success', "service_offer_lists Successfully Updated.");
    }
    public function delete($id){
        $data = ServiceOfferList::find($id);
        if (file_exists('upload/service_offer_list_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/service_offer_list_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.service_offer_lists.view')->with('error', 'service_offer_lists successfully deleted.');
    }
}
