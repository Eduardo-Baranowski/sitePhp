<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.contact');
    }

    public function postContact(Request $request)
    {

        $fields = $request->validate([
            'nome' => 'required|between:5,50',
            'email' => 'required|email|between:5,50',
            'phone' => 'required|numeric|',
            'descricao' => 'required|min:5',
        ]);

        Mail::to('eduardobaranowski@gmail.com')->send(new ContactMail($fields));

        return redirect()->back();
    }
}
