<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function index($id) 
    {
                $job = Job::find($id); 

                return view('job', ['job' => $job]);   
    }
}
