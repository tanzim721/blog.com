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
use App\Models\PartnerOne;
use App\Models\Merchandising;
use App\Models\MerchandisingList;
use App\Models\ServiceOffer;
use App\Models\ServiceOfferList;
use App\Models\SupplierIdentifier;
use App\Models\CompititivePricing;
use App\Models\FactoryEvaluation;
use App\Models\FactoryEvaluationList;
use App\Models\Quality;
use App\Models\ContactForm;

use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use Hash;
use Mail;
use Str;
use Auth;

class ContactFromController extends Controller
{
    public function view(){
        // $data['countLogo'] = Logo::count();
        $data['allData'] = ContactForm::all();
        return view('backend.contact_from.view', $data);
    }
    public function add(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        $data['partners'] = Partner::all();
        $data['partnerones'] = PartnerOne::all();

        $data['contacts'] = Contact::all();
        $data['times'] = BusinessTime::all();
        $data['services'] = Service::all();
        $data['servicelists'] = ServiceList::all();
        $data['serviceoffers'] = ServiceOffer::all();
        $data['serviceofferlists'] = ServiceOfferList::all();
        $data['merchandisings'] = Merchandising::all();
        $data['MerchandisingLists'] = MerchandisingList::all();
        $data['supplierIdentifiers'] = SupplierIdentifier::all();
        $data['compititivePricings'] = CompititivePricing::all();
        $data['factoryEvaluations'] = FactoryEvaluation::all();
        $data['factoryEvaluationLists'] = FactoryEvaluationList::all();
        $data['qualitys'] = Quality::all();
        return view('frontend.contact.view', $data);
    }
    public function store(Request $request){
        $data = new ContactForm();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->message = $request->message;
        $data->created_by = Auth::user()->id;
        $data->save(); 
        return redirect()->route('panel.contact_from.add')->with('success', "Message Send Successfully");
    }
}
