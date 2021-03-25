<?php

namespace App\Http\Controllers;
use App\Models\Profil;
use Illuminate\Http\Request;



class ProfilController extends Controller
{
    public function index()
    {
        $data_profil=Profil::all();
        //return $data_profil;
        return view('profil',compact('data_profil'));
    }
}
