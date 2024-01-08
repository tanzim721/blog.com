<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\FactoryEvaluationList;
use App\Models\AboutList;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class AboutListController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = AboutList::all();
        return view('backend.about_lists.view', $data);
    }
    public function add(){
        return view('backend.about_lists.add');
    }
    public function store(Request $request){
        $data = new AboutList();
        $data->short_title = $request->short_title;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.about_lists.view')->with('success', "About List Successfully Stored.");
    }
    public function edit($id){
        $editData = AboutList::find($id);
        return view('backend.about_lists.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = AboutList::find($id);
        $data->short_title = $request->short_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.about_lists.view')->with('success', "About List Successfully Updated.");
    }
    public function delete($id){
        $data = AboutList::find($id);
        $data->delete();
        return redirect()->route('panel.about_lists.view')->with('error', 'About List successfully deleted.');
    }
}
