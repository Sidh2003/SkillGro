<?php

namespace App\Http\Controllers\Frontend;
use App\Mail\Thankyou;
use App\Models\Slider;
use App\Models\Enquiry;
use App\Models\Service;
use App\Mail\ContactMail;
use App\Rules\CustomCaptcha;
use Illuminate\Http\Request;
use App\Models\ServiceVisitor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;



class HomeController extends Controller
{
    public function home()
    {
        return view('Frontend.home');
    }

    public function about()
    {
        return view('Frontend.about');
    }
    public function courses(Request $request)
    {
        return view('Frontend.courses');
    }
    public function contact()
    {
        return view('Frontend.contact');
    }
    public function services()
    {
        return view('Frontend.services');
    }


    public function thankyou()
    {
        return view('Frontend.thankyou');
    }

}
