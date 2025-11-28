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

    public function course_details(Request $request)
    {
        return view('Frontend.course_details');
    }

    public function contact()
    {
        return view('Frontend.contact');
    }
    public function services()
    {
        return view('Frontend.services');
    }

    public function dashbord()
    {
        return view('Frontend.dashbord');
    }
    public function shop()
    {
        return view('Frontend.shop');
    }

    public function shop_details()
    {
        return view('Frontend.shop_details');
    }

    public function setting()
    {
        return view('Frontend.setting');
    }

    public function enrolled_courses()
    {
        return view('Frontend.enrolled_courses');
    }

    public function quiz()
    {
        return view('Frontend.quiz');
    }

    public function weekly_test()
    {
        return view('Frontend.weekly_test');
    }

    public function certifications()
    {
        return view('Frontend.certifications');
    }

    public function test()
    {
        return view('Frontend.Dashbord.test'); // matches your folder
    }


    public function submitTest(Request $request)
    {
        // Here you can store test answers if needed

        return redirect('/weekly_test');
    }


    public function thankyou()
    {
        return view('Frontend.thankyou');
    }

    public function contactEnquiry(Request $request)
    {
        // Validation rules with Google reCAPTCHA instead of custom captcha
        $rules = [
            'full_name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            // 'mobile' => 'required|digits:10',
        ];

        $messages = [
            'full_name.required' => 'Your Full Name is required',
            'subject.required' => 'Your Subject is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email should be a valid email',
            // 'mobile.required' => 'The mobile number field is required.',
            // 'mobile.digits' => 'The mobile number must be exactly 10 digits.',
        ];

        $request->validate($rules, $messages);


        // Save enquiry
        $enquiry = new Enquiry();
        $enquiry->full_name = $request->full_name;
        $enquiry->subject = $request->subject;
        // $enquiry->mobile = $request->mobile;
        $enquiry->email = $request->email;
        $enquiry->message = $request->message;
        $enquiry->save();

        Mail::to('siddhesh.sonavane024@gmail.com')->send(new ContactMail($enquiry));
        Mail::to($request->email)->send(new Thankyou($enquiry));

        return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
    }
}
