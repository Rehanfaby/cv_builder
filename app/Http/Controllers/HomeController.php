<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Person;
use App\Contact;
use App\Education;
use App\Experience;
use App\Hobby;
use App\Language;
use App\Skill;
use Auth;
use PDF;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        return view('index');
    }

    public function create()
    {
        return view('cv');
    }

    public function record($id)
    {
        $person = Person::where('user_id',$id)->with('contacts','educations','experiences','hobbies','languages','skills')->latest()->first();
        // return view('cv_latest',compact('person'));
        return view('cv',compact('person'));
    }

    public function pdf($id)
    {
        $person = Person::where('user_id',$id)->with('contacts','educations','experiences','hobbies','languages','skills')->latest()->first();
        // dd($person);
        //  return view('cv_pdf',compact('person'));

         $pdf = PDF::loadView('cv_pdf',compact('person'));
  
         return $pdf->download($person->name.' CV.pdf');
    }

    public function store(Request $req)
    {

        foreach ($req->except('_token') as $data => $value) {
            $valids[$data] = "required";
          }
          $req->validate($valids);
       
       $person = Person::create([
            'name' => $req->person_name,
            'user_id' => Auth::User()->id,
            'title' => $req->person_title,
            'age' => $req->age,
            'description' => $req->person_description,
        ]);
        $p_id = $person->id;

        Contact::create([
            'person_id' => $p_id,
            'email' => $req->email,
            'number' => $req->number,
            'address' => $req->address,
        ]);
      
        foreach($req->skill_name as $item){
            Skill::create([
            'person_id' => $p_id,
            'skill' => $item,
            ]);
        }

        foreach($req->degree as $key=>$item){
            Education::create([
            'person_id' => $p_id,
            'degree_title' => $req->degree[$key],
            'institute' => $req->university[$key],
            'passing_year' => $req->education_year[$key],
            'degree_description' => $req->education_description[$key],
            ]);
        }

        foreach($req->job_title as $key=>$item){
            Experience::create([
            'person_id' => $p_id,
            'job_title' => $req->job_title[$key],
            'company_name' => $req->Company[$key],
            'start_date' => $req->starting_date[$key],
            'end_date' => $req->last_date[$key],
            'job_description' => $req->experience_description[$key],
            ]);
        }

        foreach($req->hobby_name as $item){
            Hobby::create([
            'person_id' => $p_id,
            'hobbies' => $item,
            ]);
        }

        foreach($req->language_name as $item){
            Language::create([
            'person_id' => $p_id,
            'language' => $item,
            ]);
        }
        


        return redirect('/cv/record/'.Auth::User()->id);
    }
}
