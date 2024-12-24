<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Models\ContactUs;
use Illuminate\Support\Facades\Mail;
// use App\Services\ApiFootballService;
use App\Services\ApiBasKetBallService;
use App\Models\League;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    protected $ApiBasKetBallService;

    public function __construct(ApiBasKetBallService $ApiBasKetBallService)
    {
        $this->ApiBasKetBallService = $ApiBasKetBallService;

    }
   public function index()
    {
      //   $leagues = League::whereHas('leagueMatches')->limit(25)->get();
        return view('front_end.pages.home');
    }

    public function aboutUs()
     {
        return view('front_end.pages.about');
     }

    public function contactUs()
    {
       return view('front_end.pages.contact');
    }

    public function contactSave(Request $request){
       $full_name = $request->full_name ?? '';
       $email = $request->email ?? '';
       $subject = $request->subject ?? '';
       $message = $request->message ?? '';

       $contact = [
          'full_name' => $full_name,
          'email' => $email,
          'subject' => $subject,
          'message' => $message
       ];

       if(isset($full_name,$email,$subject,$message)){

         ContactUs::create($contact);

          //Mail::to('ashishyadav.avology@gmail.com')->send(new ContactMail($contact));
       }
       return redirect()->back()->with('success','Your contact query sent successfully.');
    }

    public function howToPlay()
     {
        return view('front_end.pages.how_to_play');
     }

     public function termsCondition(){
       return view('front_end.pages.terms-condition');
     }

     public function privacyPolicy(){
       return view('front_end.pages.privacy-policy');
     }
     public function personalInfo(){
       return view('front_end.pages.personal-information');
     }
}