<?php

namespace App\Http\Controllers\Frontend;
use App\Mail\ContactMail;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function home()
  {
    return view('frontend.index');
  }
  public function contact()
  {
    return view('frontend.index');
  }
  public function sendEmail(Request $request)
  {
    $details = [
      'name'=>$request->name,
      'email'=>$request->email,
      'phone'=>$request->phone,
      'message'=>$request->message,
    ];
    Mail::to('afifauttara444@gmail.com')->send(new ContactMail($details));
    return back()->with('message_sent','Your message has been sent successfully!');
  }

  }
