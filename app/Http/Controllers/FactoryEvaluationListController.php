<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\FactoryEvaluationList;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class FactoryEvaluationListController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = FactoryEvaluationList::all();
        return view('backend.factory_evaluations_list.view', $data);
    }
    public function add(){
        return view('backend.factory_evaluations_list.add');
    }
    public function store(Request $request){
        $data = new FactoryEvaluationList();
        $data->short_title = $request->short_title;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.factory_evaluations_list.view')->with('success', "Factory Evaluation Successfully Stored.");
    }
    public function edit($id){
        $editData = FactoryEvaluationList::find($id);
        return view('backend.factory_evaluations_list.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = FactoryEvaluationList::find($id);
        $data->short_title = $request->short_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.factory_evaluations_list.view')->with('success', "Factory Evaluation Successfully Updated.");
    }
    public function delete($id){
        $data = FactoryEvaluationList::find($id);
        $data->delete();
        return redirect()->route('panel.factory_evaluations_list.view')->with('error', 'Factory Evaluation successfully deleted.');
    }
}
