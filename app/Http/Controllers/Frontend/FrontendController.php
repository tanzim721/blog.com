<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Service;
use App\Models\ServiceList;
use App\Models\Slider;
use App\Models\About;
use App\Models\AboutList;
use App\Models\Contact;
use App\Models\Vision;
use App\Models\Mission;
use App\Models\BusinessTime;
use App\Models\Partner;
use App\Models\Merchandising;
use App\Models\ServiceOffer;
use App\Models\ServiceOfferList;
use App\Models\SupplierIdentifier;
use App\Models\CompititivePricing;

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
        $data['visions'] = Vision::all();
        $data['missions'] = Mission::all();
        $data['times'] = BusinessTime::all();
        $data['services'] = Service::all();
        $data['servicelists'] = ServiceList::all();
        $data['serviceoffers'] = ServiceOffer::all();
        $data['serviceofferlists'] = ServiceOfferList::all();
        $data['merchandisings'] = Merchandising::all();
        $data['supplierIdentifiers'] = SupplierIdentifier::all();
        $data['compititivePricings'] = CompititivePricing::all();
        return view('frontend.home1', $data);
    }
    public function about(){
        $data['logo'] = Logo::first();
        $data['times'] = BusinessTime::all();
        $data['contacts'] = Contact::all();
        $data['visions'] = Vision::all();
        $data['missions'] = Mission::all();
        $data['partners'] = Partner::all();

        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        return view('frontend.about.view', $data);
    }
}
