<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Contact;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class ContactController extends Controller
{
    public function view(){
        // $data['countContact'] = Contact::count();
        $data['allData'] = Contact::all();
        return view('backend.contact.view', $data);
    }
    public function add(){
        return view('backend.contact.add');
    }
    public function store(Request $request){
        $data = new Contact();
        $data->address = $request->address;
        $data->mobile_no = $request->mobile_no;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;
        $data->google_plus = $request->google_plus;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.contacts.view')->with('success', "Contact Successfully Inserted.");
    }
    public function edit($id){
        $editData = Contact::find($id);
        return view('backend.contact.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = Contact::find($id);
        $data->address = $request->address;
        $data->mobile_no = $request->mobile_no;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->youtube = $request->youtube;
        $data->google_plus = $request->google_plus;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.contacts.view')->with('success', "Contact Successfully Updated.");
    }
    public function delete($id){
        $data = Contact::find($id);
        $data->delete();
        return redirect()->route('panel.contacts.view')->with('success', 'Contact successfully deleted.');
    }
}
