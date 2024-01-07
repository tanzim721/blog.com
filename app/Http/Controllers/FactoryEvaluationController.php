<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\FactoryEvaluation;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 


class FactoryEvaluationController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = FactoryEvaluation::all();
        return view('backend.factory_evaluation.view', $data);
    }
    public function add(){
        return view('backend.factory_evaluation.add');
    }
    public function store(Request $request){
        $data = new FactoryEvaluation();
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/factory_evaluations_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.factory_evaluations.view')->with('success', "Factory Evaluation Successfully Stored.");
    }
    public function edit($id){
        $editData = FactoryEvaluation::find($id);
        return view('backend.factory_evaluation.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = FactoryEvaluation::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/factory_evaluations_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/factory_evaluations_images'),$filename);
            $data['image'] = $filename;
        }
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.factory_evaluations.view')->with('success', "Factory Evaluation Successfully Updated.");
    }
    public function delete($id){
        $data = FactoryEvaluation::find($id);
        if (file_exists('upload/factory_evaluations_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/factory_evaluations_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.factory_evaluations.view')->with('error', 'Factory Evaluation successfully deleted.');
    }
}
