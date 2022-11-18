<?php

namespace App\Http\Controllers;

use App\Inquiry;
use Illuminate\Http\Request;

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
        
    }
}
