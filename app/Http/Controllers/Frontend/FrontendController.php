<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Service;
use App\Models\Slider;
use App\Models\About;
use App\Models\AboutList;
use App\Models\Contact;
use App\Models\BusinessTime;
use App\Models\Partner;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth; 

class FrontendController extends Controller
{
    public function home(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        $data['partners'] = Partner::all();
        $data['contacts'] = Contact::all();
        $data['times'] = BusinessTime::all();
        return view('frontend.home1', $data);
    }
}
