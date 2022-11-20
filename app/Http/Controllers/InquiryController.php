<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;
use App\Mail\ContactsSendmail;

class InquiryController extends Controller
{
    
    public function index()
    {
        return view('contact.index');
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();

        return view('contact.confirm',[
            'inputs' => $inputs
        ]);
    }

    public function send(Request $request)
    {
        $inputs = $request->all();
        \Mail::to($inputs['email'])->send(new ContactsSendmail($inputs));
        \Mail::to('rodeo1106@gmail.com')->send(new ContactsSendmail($inputs));

        return view('contact.thanks', [
            'inputs' => $inputs
        ]);
    }
}
