<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BootcampController extends Controller
{
    public function index()
    {
        return view('bootcamp.index');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'registered_for' => 'required',
            'motivation' => 'required',
            'goals' => 'required',
            'prior_experience' => 'required',
            'proficiency' => 'required',
            'expectation' => 'required',
            'previous_work' => 'required',
            'commit_hour' => 'required',
            'job_title' => 'required',
            'work_experience' => 'required',
            'education_level' => 'required',
            'study_field' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'location' => 'required',
            'email' => 'required|email|allowed_email_domain',
        ],  [
            'allowed_email_domain' => 'Invalid email domain.',
        ]); 
        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors(), 422);
        }

        // If validation passes, proceed to save data to the database
        $bootcamp = new Bootcamp($request->all());
        $bootcamp->save();
        return redirect()->route('bootcamp.payment')->with('status', 'Bootcamp registration was successful');
    }

    public function payment()
    {
        return view('bootcamp.payment');
    }

    public function confirmed()
    {
        return view('bootcamp.thanks');
    }

    public function uiux()
    {
        return view('bootcamp.uiux');
    }
}
