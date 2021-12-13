<?php

namespace App\Http\Controllers\Frontend;
// use App\Mail\ContactMail;
// use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
  public function home()
  {
    return view('frontend.index');
  }

  }
