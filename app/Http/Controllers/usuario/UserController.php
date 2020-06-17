<?php

namespace App\Http\Controllers\usuario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($nombre)
    {
        return 'Usuário: ' . $nombre;
    }

    public function user1($id)
    {
        return 'Usuário: ' . $id;
    }

    public function user2($id, $nombre)
    {
        return 'Usuário: ' . $id . 'y nombre es ' . $nombre;
    }
}
