<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\ServiceList;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class ServiceListController extends Controller
{
    public function view(){
        $data['allData'] = ServiceList::all();
        return view('backend.service_lists.view', $data);
    }
    public function add(){
        return view('backend.service_lists.add');
    }
    public function store(Request $request){
        $data = new ServiceList();
        $data->short_title = $request->short_title;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.service_lists.view')->with('success', "Services Successfully Stored.");
    }
    public function edit($id){
        $editData = ServiceList::find($id);
        return view('backend.service_lists.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = ServiceList::find($id);
        $data->short_title = $request->short_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.service_lists.view')->with('success', "Service Successfully Updated.");
    }
    public function delete($id){
        $data = ServiceList::find($id);
        $data->delete();
        return redirect()->route('panel.service_lists.view')->with('success', 'Service successfully deleted.');
    }
}
