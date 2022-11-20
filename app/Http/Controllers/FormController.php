<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index ()
    {
        return view('form.index');
    }

    public function confirm (Request $request)
    {

        $inputs = $request->all();
        return view('form.confirm', [
            'inputs' => $inputs
        ]);
    }

    public function store (Request $request)
    {

        $inputs = Form::create($request->all());
        return view('form.thanks');
    }
}
