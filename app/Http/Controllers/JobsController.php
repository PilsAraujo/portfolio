<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('faction')->latest()->simplePaginate(4);
        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function show(Job $job) 
    {
        return view('jobs.show', ['job' => $job]);   
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required','string', 'min:3'],
            'salary' => ['required', 'string'],
            'description' => ['required','string'],
        ]);
    
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
            'faction_id' => 1
        ]);
    
        return redirect('/jobs'); 
    }
    
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'title' => ['required','string', 'min:3'],
            'salary' => ['required', 'string'],
            'description' => ['required','string'],
        ]);
       
         $job->title = request('title');
         $job->salary = request('salary');
         $job->description = request('description');
         $job->save();
    
         return redirect('jobs/' . $job->id );
    
    }
    
    public function destroy(Job $job) 
    {
        $job->delete();

        return redirect('/jobs');   
    }    
    
}
