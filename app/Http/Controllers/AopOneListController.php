<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\service_offer_lists;
use App\Models\ServiceOffer;
use App\Models\AopOneList;
use App\Models\ServiceOfferList;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;


class AopOneListController extends Controller
{
    public function view(){
        $data['allData'] = AopOneList::all();
        return view('backend.aop_one_lists.view', $data);
    }
    public function add(){
        return view('backend.aop_one_lists.add');
    }
    public function store(Request $request){
        $data = new AopOneList();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.aop_one_lists.view')->with('success', "AOPs Successfully Stored.");
    }
    public function edit($id){
        $editData = AopOneList::find($id);
        return view('backend.aop_one_lists.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = AopOneList::find($id);
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.aop_one_lists.view')->with('success', "AOPs Successfully Updated.");
    }
    public function delete($id){
        $data = AopOneList::find($id);
        $data->delete();
        return redirect()->route('panel.aop_one_lists.view')->with('error', 'AOPs successfully deleted.');
    }
}
