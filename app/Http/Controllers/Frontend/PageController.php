<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller{

    public function aboutus(){
        $aboutus = Page::where('type','about-us')->first();
        if($aboutus->status == 1){
            return view('frontend.about-us',compact('aboutus'));
        }
        return view('errors.404');
    }

    public function howTo(){
        $howto = Page::where('type','how-to')->first();
        if($howto->status == 1){
            return view('frontend.how-to',compact('howto'));
        }
        return view('errors.404');
    }

    public function termOfUse(Type $var = null){
        $termOfUse = Page::where('type','terms-of-use')->first();
        if($termOfUse->status == 1){
            return view('frontend.terms-of-use',compact('termOfUse')); 
        }
        return view('errors.404');
    }

    public function privacyPolicy(){
        $privacyPolicy = Page::where('type','privacy-policy')->first();
        if($privacyPolicy->status == 1){
            return view('frontend.privacy-policy',compact('privacyPolicy'));
        }
        return view('errors.404');
    }

    public function returnPolicy(){
        $returnPolicy = Page::where('type','return-policy')->first();
        if($returnPolicy->status == 1){
            return view('frontend.return-policy',compact('returnPolicy'));
        }
        return view('errors.404');
    }

    public function shippingPolicy(){
        $shippingPolicy = Page::where('type','shipping-policy')->first();
        if($shippingPolicy->status == 1){
            return view('frontend.shipping-policy',compact('shippingPolicy'));
        }
        return view('errors.404');
    }

    public function howItWorks(){
        $howItWorks = Page::where('type','how-it-works')->first();
        if($howItWorks->status == 1){
            return view('frontend.how-it-works',compact('howItWorks'));
        }
        return view('errors.404');
    }

    public function faqsList(){
        $faqs = Page::where('type','faq')->get();
        return view('frontend.faq',compact('faqs'));
    }  
}
