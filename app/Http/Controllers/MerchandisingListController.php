<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\MerchandisingList;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class MerchandisingListController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = MerchandisingList::all();
        return view('backend.merchandisinglist.view', $data);
    }
    public function add(){
        return view('backend.merchandisinglist.add');       
    }
    public function store(Request $request){
        $data = new MerchandisingList();
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.merchandisinglist.view')->with('success', "Merchandising List Successfully Stored.");
    }
    public function edit($id){
        $editData = MerchandisingList::find($id);
        return view('backend.merchandisinglist.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = MerchandisingList::find($id);
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.merchandisinglist.view')->with('success', "Merchandising List Successfully Updated.");
    }
    public function delete($id){
        $data = MerchandisingList::find($id);
        $data->delete();
        return redirect()->route('panel.merchandisinglist.view')->with('error', 'Merchandising List successfully Deleted.');
    }
}
