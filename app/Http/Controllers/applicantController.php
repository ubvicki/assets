<?php

namespace App\Http\Controllers;

use App\Models\applicant;
use App\Models\contact;
use App\Models\details;
use Illuminate\Http\Request;
use App\View\Components\DynamicTable;
class applicantController extends Controller
{
    public function index(){
        return view('landingpage');
    }

    public function create(){
        return view('welcome');
    }

    public function store(Request $request){
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);
        $colour = $request->colors;


        $applicants =New applicant();
        $contacts =New contact();
        $details = new details();
        $applicants->id= $request->id;
        $applicants->name= $request->name;
        $applicants->father_name= $request->father_name;
        $applicants->colors= implode(', ',$colour);
        $applicants->gender= $request->gender;
        $contacts->email= $request->email;
        $contacts->mobile_no= $request->mobile_no;
        $details->dob= $request->dob;
        $details->image= $request->image;
        // $contacts->applicant_id = $applicants->id;
        // $details->applicant_id = $applicants->id;
        // $details->profilepic= 'images/'.$imageName;
        $applicants->save();
        $applicants->contact()->save($contacts);
        $applicants->details()->save($details);

        return redirect()->route('applicant.success');
    }

    public function edit(){

    }

    public function update(){

    }

    public function show(){

    }

    public function destroy(){

    }

    public function success(){
        return view('components.success');
    }
}
