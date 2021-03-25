<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //untuk memproteksi halaman biar klo login baru bisa buka klo blom login ga bisa buka
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        // menuju halaman home setelah login
    }
    public function profil()
    {
        return view('profil');
        // menuju halaman home setelah login
    }
}
