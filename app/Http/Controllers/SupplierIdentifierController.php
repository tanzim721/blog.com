<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\SupplierIdentifier;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  


class SupplierIdentifierController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = SupplierIdentifier::all();
        return view('backend.supplier_identifiers.view', $data);
    }
    public function add(){
        return view('backend.supplier_identifiers.add');
    }
    public function store(Request $request){
        $data = new SupplierIdentifier();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/supplier_identifiers_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.supplier_identifiers.view')->with('success', "Supplier identifier Successfully Stored.");
    }
    public function edit($id){
        $editData = SupplierIdentifier::find($id);
        return view('backend.supplier_identifiers.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = SupplierIdentifier::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/supplier_identifiers_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/supplier_identifiers_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.supplier_identifiers.view')->with('success', "Supplier identifier Successfully Updated.");
    }
    public function delete($id){
        $data = SupplierIdentifier::find($id);
        if (file_exists('upload/supplier_identifiers_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/supplier_identifiers_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.supplier_identifiers.view')->with('error', 'Supplier identifier successfully deleted.');
    }
} 
