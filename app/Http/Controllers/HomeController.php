<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Mail;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function postContact(Request $request)
    {
        $fields = $request->validate([
            'nome' => 'required|between:5,50',
            'email' => 'required|email|between:5,50',
            'telefone' => 'required|numeric|',
            'descricao' => 'required|min:5',
        ]);

        Mail::to('eduardobaranowski@gmail.com')->send(new ContactMail($fields));
        //return redirect()->route('site.home');
        return view('site.contact');
        //return redirect()->back();
    }
}
