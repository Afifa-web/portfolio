<?php

namespace App\Http\Controllers;

// use App\Mail\PHPMailer;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// use Mail;

class ContactController extends Controller
{
    public function contact()
    {
      return view('frontend.index');
    }

    public function sendEmail(Request $request)
    {
      // $details = [
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $message=$request->message;

        // require 'PHPMailer/vendor/autoload.php';

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
        $mail = new PHPMailer(true);
        $mail ->SMTPDebug =0;
        $mail ->isSMTP();
        $mail ->env('smtp.mailtrap.io');
        $mail ->SMTPAuth=true;
        $mail ->Username =env('MAIL_USERNAME');
        $mail ->Password =env('MAIL_PASSWORD');
        $mail ->SMTPSecure =PHPMailer::ENCRYPTION_STARTTLS;
        $mail-> Port =2525;
        $mail ->setFrom($name,$email);
        $mail ->addAddress('afifauttara444@gmail.com');
        $mail ->Subject='$phone';
        $mail ->Body='$message';
        $dt=$mail->send();
      if($dt){
          return back()->with('message_sent','Your message has been sent successfully!');
      }else {
        echo "Something wet wrong";
      }
      // ];
      // Mail::to('afifauttara444@gmail.com')->send(new PHPMailer($details));
      // return back()->with('message_sent','Your message has been sent successfully!');
    }
}
