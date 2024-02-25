<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index($id, $name)
    {
        return view('profil.profil')
            ->with('id', $id)
            ->with('name', $name);
    }
}
