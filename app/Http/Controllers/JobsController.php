<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

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

        $faction = Auth::user()->faction;

        if (!$faction) {
            return back()->with('error', 'You must belong to a faction to post a job.');
        }

    
        $job = $faction->jobs()->create([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
        ]);

        $job = Mail::to($job->faction->user)->queue(
            new JobPosted($job)
        );
    
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
