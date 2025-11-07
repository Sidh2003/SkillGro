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


    // public function contactEnquiry(Request $request)
    // {
    //     // dd($request->all());
    //     // dd($request->enquiry_type);
    //     // Validation rules
    //     $rules = [
    //         'first_name' => 'required',
    //         'last_name' => 'required',
    //         'email' => 'required|email',
    //         'mobile' => 'required|digits:10',
    //         'captcha' => ['required', new CustomCaptcha($request->sequence)],
    //     ];

    //     $messages = [
    //         'first_name.required' => 'Your First Name is required',
    //         'last_name.required' => 'Your Last Name is required',
    //         'email.required' => 'Email is required',
    //         'email.email' => 'Email should be a valid email',
    //         'mobile.required' => 'The mobile number field is required.',
    //         'mobile.digits' => 'The mobile number must be exactly 10 digits.',
    //     ];

    //     $request->validate($rules, $messages);
    //     $enquiry = new Enquiry();
    //     $enquiry->first_name = $request->first_name;
    //     $enquiry->last_name = $request->last_name;
    //     $enquiry->mobile = $request->mobile;
    //     $enquiry->email = $request->email;
    //     $enquiry->message = $request->message;
    //     $enquiry->enquiry_type = $request->enquiry_type;
    //     $enquiry->save();

    //     //dd($enquiry);
    //     Mail::to('harshasreikicenter1111@gmail.com')->send(new ContactMail($enquiry));
    //     Mail::to($request->email)->send(new Thankyou($enquiry));

    //     return response()->json(['status' => 'success', 'message' => 'Enquiry Sent Successfully']);
    // }
}
