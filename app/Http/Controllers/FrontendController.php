<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formation;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function formation_details( Formation $formation )   
    {
        return view('frontend.formation-details', compact('formation'));
    }

    public function login()
    {
        return view('frontend.login');
    }       

    public function postLogin(Request $request)
    {
        
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function postRegister(Request $request)
    {
        
    }   
}
