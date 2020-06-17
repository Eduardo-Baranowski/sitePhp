<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    private $usuario;
    public function __construct(User $usuario)
    {
        $this->usuario = $usuario;
    }

    public function store(Request $request)
    {
        $dataForm = $request->all();
        $insert = $this->usuario->insert($dataForm);
        if ($insert)
            return redirect()->route('site.home');
        else
            return redirect()->route('site.contact');
    }
}
