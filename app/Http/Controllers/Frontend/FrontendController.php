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

    // started about section......... 
    public function about(){
        $data['logo'] = Logo::first();
        $data['times'] = BusinessTime::all();
        $data['contacts'] = Contact::all();
        $data['visions'] = Vision::all();
        $data['missions'] = Mission::all();
        $data['partners'] = Partner::all();
        $data['partnerones'] = PartnerOne::all();

        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        return view('frontend.about.view', $data);
    }
    // ended about section......... 

    // start why choose us.............. 
    public function why_choose_us(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        $data['services'] = Service::all();
        $data['servicelists'] = ServiceList::all();

        $data['partners'] = Partner::all();
        $data['contacts'] = Contact::all();
        $data['times'] = BusinessTime::all();
        $data['partnerones'] = PartnerOne::all();
        return view('frontend.about.choose', $data);
    }
    // ended why choose us.............. 

    // start team section ........
    public function team(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        $data['partners'] = Partner::all();
        $data['partnerones'] = PartnerOne::all();

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
        $data['factoryEvaluations'] = FactoryEvaluation::all();
        
        return view('frontend.about.team', $data);
    }
    public function merchandising(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        $data['partners'] = Partner::all();
        $data['partnerones'] = PartnerOne::all();

        $data['contacts'] = Contact::all();
        $data['visions'] = Vision::all();
        $data['missions'] = Mission::all();
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
        return view('frontend.about.merchandising.view', $data);
    }
    public function supplier_identifier(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        $data['partners'] = Partner::all();
        $data['partnerones'] = PartnerOne::all();

        $data['contacts'] = Contact::all();
        $data['visions'] = Vision::all();
        $data['missions'] = Mission::all();
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
        return view('frontend.about.supplier_identifier.view', $data);
    }
    public function compititive_pricing(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        $data['partners'] = Partner::all();
        $data['partnerones'] = PartnerOne::all();
        $data['contacts'] = Contact::all();
        $data['visions'] = Vision::all();
        $data['missions'] = Mission::all();
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
        return view('frontend.about.compititive_pricing.view', $data);
    }
    public function factory_evaluation(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        $data['partners'] = Partner::all();
        $data['partnerones'] = PartnerOne::all();

        $data['contacts'] = Contact::all();
        $data['visions'] = Vision::all();
        $data['missions'] = Mission::all();
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
        return view('frontend.about.factory_evaluation.view', $data);
    }
    // ended team section ........

    //  started service section 
    public function service(){
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
        return view('frontend.service.view', $data);
    }

    public function partner(){
        $data['logo'] = Logo::first();
        $data['sliders'] = Slider::all();
        $data['abouts'] = About::all();
        $data['about_lists'] = AboutList::all();
        $data['partners'] = Partner::all();
        $data['partnerones'] = PartnerOne::all();

        $data['contacts'] = Contact::all();
        $data['visions'] = Vision::all();
        $data['missions'] = Mission::all();
        $data['times'] = BusinessTime::all();
        $data['services'] = Service::all();
        $data['servicelists'] = ServiceList::all();
        $data['serviceoffers'] = ServiceOffer::all();
        $data['serviceofferlists'] = ServiceOfferList::all();
        return view('frontend.partner.view', $data);
    }

    public function quality(){
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
        return view('frontend.quality.view', $data);
    }


    
    
}
