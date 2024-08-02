<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Mail\JobPosted;
use App\Models\jobListing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Jobs.index',[
            'jobs'=> jobListing::with('employer')->latest()->simplePaginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|min:3',
            'salary'=>'required|min:3|numeric',
        ]);

        $job=jobListing::create([
            'jobTitle' => request('title'),
            'jobSalary' =>  request('salary'),
            'employer_id' =>  6
        ]);

        SendMailJob::dispatch($job);

        return redirect('/job');

    }

    /**
     * Display the specified resource.
     */
    public function show(jobListing $job)
    {
        return view('Jobs.show',[
            'job'=> $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jobListing $job)
    {
//        Gate::authorize('can_edit',$job); can also be done on route level by use of middlewares

         return view('Jobs.edit',[
            'job'=> $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, jobListing $job)
    {
        $request->validate([
            'title'=>'required|min:3',
            'salary'=>'required|min:3|numeric',
        ]);

        $job->update([
            'jobTitle' => request('title'),
            'jobSalary' =>  request('salary'),
        ]);
        return redirect('/job');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(jobListing $job)
    {
        $job->delete();
        return redirect('/job');
    }
}
