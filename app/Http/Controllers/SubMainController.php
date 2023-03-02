<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\seminar;

class SubMainController extends Controller
{
    // function index()
    // {
    //  return view('sign-up');
    // }

    // function send(Request $request)
    // {
    //  $this->validate($request, [
    //   'name'     =>  'required',
    //   'email'  =>  'required|email',
    //   'phone' => 'required',
    //   'message' =>  'required'
    //  ]);

    //     $data = array(
    //         'name'      =>  $request->name,
    //         'email' => $request->email,
    //         'phone'     =>  $request->phone,
    //         'message'   =>   $request->message
    //     );

    //  Mail::to('kahigakamiru@gmail.com')->send(new SendMail($data));
    //  return back()->with('success', 'Thanks for contacting us!');

    // }
    public function sendEmail(Request $req){
      $data = [
        'name' =>  $req->name,
        'email' => $req->email,
        'phone' =>  $req->phone
        ];
        Mail::to('james@baroncabot.com')->send(new seminar($data));
        return redirect()->route('page','thank-you');

    }
}
