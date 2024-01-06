<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\NewsEvent;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;  

class NewsEventController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = NewsEvent::all();
        return view('backend.news_event.view', $data);
    }
    public function add(){
        return view('backend.news_event.add');
    }
    public function store(Request $request){
        $data = new NewsEvent();
        $data->date = date('Y-m-d', strtotime($request->date));
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/news_event_images'),$filename);
            $data['image']=$filename;
        }
        $data->save(); 
        return redirect()->route('panel.news_events.view')->with('success', "News and Events Successfully Stored.");
    }
    public function edit($id){
        $editData = NewsEvent::find($id);
        return view('backend.news_event.edit', compact('editData'));
    }
    public function update($id, Request $request){
        $data = NewsEvent::find($id);
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/news_event_images'.$data->image));
            $filename=date('YMDHi').$file->getClientOriginalName();
            $file->move(public_path('upload/news_event_images'),$filename);
            $data['image'] = $filename;
        }
        $data->date = date('Y-m-d', strtotime($request->date));
        $data->short_title = $request->short_title;
        $data->long_title = $request->long_title;
        $data->updated_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.news_events.view')->with('success', "News and Events Successfully Updated.");
    }
    public function delete($id){
        $data = NewsEvent::find($id);
        if (file_exists('upload/news_event_images/' . $data->image) AND ! empty($data->image)) {
            unlink('upload/news_event_images/' . $data->image);
        }
        $data->delete();
        return redirect()->route('panel.news_events.view')->with('success', 'News and Events successfully deleted.');
    }
}
