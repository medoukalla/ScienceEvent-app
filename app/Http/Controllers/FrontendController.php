<?php

namespace App\Http\Controllers;

use App\Category;
use App\Doctor;
use Illuminate\Http\Request;
use App\Formation;
use Illuminate\Support\Facades\Validator;

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


    public function formation_access( Formation $formation )   
    {
        return view('frontend.formation-access', compact('formation'));
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


    public function profile() {
        return view('frontend.profile');
    }

    public function profile_update(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'name.required' => 'Le nom est obligatoire',
            'name.string' => 'Le nom doit  tre une cha ne de caract res',
            'name.max' => 'Le nom ne peut pas faire plus de 255 caract res',
            'password.required' => 'Le mot de passe est obligatoire',
            'password.string' => 'Le mot de passe doit  tre une cha ne de caract res',
            'password.min' => 'Le mot de passe doit faire au moins 8 caract res',
            'password.confirmed' => 'Les mots de passe ne correspondent pas',
        ]);

        if ($validator->fails()) {
            return redirect()->route('frontend.profile')
                ->withErrors($validator)
                ->withInput();
        }

        $user = auth()->user();
        $user->name = $request->input('name');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('frontend.profile')->with('success', 'Mis jour avec succès.');
        
    }
}
