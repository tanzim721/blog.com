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
use App\Models\AopTwoList;
use App\Models\AopThreeList;
use App\Models\ServiceOfferList;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;

class AopThreeListController extends Controller
{
    public function view(){
        $data['allData'] = AopThreeList::all();
        return view('backend.aop_three_lists.view', $data);
    }
    public function add(){
        return view('backend.aop_three_lists.add');
    }
    public function store(Request $request){
        $data = new AopThreeList();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.aop_three_lists.view')->with('success', "AOPs Successfully Stored.");
    }
    public function edit($id){
        $editData = AopThreeList::find($id);
        return view('backend.aop_three_lists.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = AopThreeList::find($id);
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.aop_three_lists.view')->with('success', "AOPs Successfully Updated.");
    }
    public function delete($id){
        $data = AopThreeList::find($id);
        $data->delete();
        return redirect()->route('panel.aop_three_lists.view')->with('error', 'AOPs successfully deleted.');
    }
}
