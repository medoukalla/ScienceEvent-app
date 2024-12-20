<?php

namespace App\Http\Controllers;

use App\Category;
use App\Doctor;
use Illuminate\Http\Request;
use App\Formation;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index',[
            'last_formation' => Formation::latest()->first(),
        ]);
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


    public function contact()
    {
        return view('frontend.contact');
    }   


    public function formations()
    {
        return view('frontend.formations',[
            'formations' => Formation::all(),
            'categories' => Category::all(),
            'doctors' => Doctor::all()
        ]);
    }   


    public function doctor(Doctor $doctor, $name) {

        if (!$doctor) {
            return redirect()->route('frontend.index');
        }

        return view('frontend.doctor', [
            'doctor' => $doctor
        ]);
    }
}
