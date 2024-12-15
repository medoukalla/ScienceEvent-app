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

    public function formation_details( Formation $formation )   
    {
        return view('frontend.formation-details', compact('formation'));
    }
}
