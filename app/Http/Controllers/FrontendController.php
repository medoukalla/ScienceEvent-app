<?php

namespace App\Http\Controllers;

use App\Category;
use App\Doctor;
use Illuminate\Http\Request;
use App\Formation;
use App\Resource;
use Illuminate\Support\Facades\Validator;
use Auth;
use Illuminate\Notifications\DatabaseNotification;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index',[
            'last_formation' => Formation::latest()->first(),
            'categories' => Category::limit(4)->get(),
        ]);
    }


    public function download(Resource $resource)
    {
        // Get the file path from the resource
        $filePath = storage_path('app/' . $resource->file_path);

        // Check if the file exists
        if (!file_exists($filePath)) {
            return response()->json(['error' => 'File not found'], 404);
        }

        // Extract the original file name and ensure it has an extension
        $originalFileName = $this->getFullFileName($resource->file_name, $resource->file_path);

        // Return the file as a downloadable response
        $response = response()->download($filePath, $originalFileName, [
            'Content-Type' => mime_content_type($filePath),
        ]);

        // Handle redirect if provided
        if (request()->has('redirect')) {
            $redirectUrl = request()->input('redirect');
            $response->headers->set('X-Redirect', $redirectUrl); // Add custom header for redirection
        }

        return $response;
    }

    // Helper method to ensure the file name includes an extension
    protected function getFullFileName($fileName, $filePath)
    {
        // Extract the file extension from the file path
        $fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);

        // Append the extension to the file name if it doesn't already have one
        if (pathinfo($fileName, PATHINFO_EXTENSION) === '') {
            $fileName .= '.' . $fileExtension;
        }

        return $fileName;
    }

    public function about()
    {
        return view('frontend.about',[
            'categories' => Category::limit(4)->get(),
        ]);
    }

    public function aide()
    {
        return view('frontend.aide',[
            'categories' => Category::limit(4)->get(),
        ]);
    }

    
    public function confidentialite()
    {
        return view('frontend.confidentialite');
    }
    

    public function formation_details( Formation $formation )   
    {

        // check if user traying to acces is already bought this course 
        $inscription = $formation->orders()->where('status', 3)->where('user_id', auth()->id())->first();
        if ( is_null($inscription) || empty($inscription) || $inscription == '' ) {
            $button_route = null;
        }else {
            $button_route = route('frontend.formation.access',[$formation, $formation->title]);
        }

        return view('frontend.formation-details', compact('formation','button_route'));
    }


    public function formation_access( Formation $formation )   
    {

        // check if user traying to acces is already bought this course 
        $inscription = $formation->orders()->where('status', 3)->where('user_id', auth()->id())->first();
        if ( is_null($inscription) || empty($inscription) || $inscription == '' ) {
            return redirect()->route('frontend.profile');
        }

        // count number of comments
        $number_of_comments = $formation->comments()->count();
        // count number of resources
        $number_of_resources = $formation->resources()->count();

        return view('frontend.formation-access', [
            'formation' => $formation,
            'number_of_comments' => $number_of_comments,
            'number_of_resources' => $number_of_resources,
            'last_formations' => Formation::latest()->take(6)->get(),
        ]);
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

        $search = request('search');
        if ( is_null( $search ) ) {
            $formations = Formation::all();
        }else {
            $formations = Formation::where(function ($query) use ($search) {
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('brief', 'like', '%' . $search . '%');
            })->get();
        }

        return view('frontend.formations',[
            'formations' => $formations,
            'categories' => Category::all(),
            'doctors' => Doctor::all(),
            'selectedCategory' => null,

        ]);
    } 
    
    public function formations_category( Category $category )
    {
        return view('frontend.formations',[
            'formations' => Formation::all(),
            'categories' => Category::all(),
            'doctors' => Doctor::all(),
            'selectedCategory' => $category->id,
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


    public function markAsRead(Request $request, $id)
    {
        $notification = DatabaseNotification::find($id);

        if ($notification && $notification->notifiable_id === auth()->id()) { // Check if notification belongs to the current user
            $notification->markAsRead();
        }

        return redirect()->back(); // Or redirect to a specific route
    }
}
