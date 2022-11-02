<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('welcome', compact('jobs'));
    }
    public function show($id)
    {
        //find the job based on the passed id
        $job = Job::find($id);
        return view('jobs.show', compact('job'));
    }
    public function apply(Request $request, $id)
    {

        DB::insert('insert into jobs_users(user_id, job_id, created_at) values (?, ?, ?)', [Auth::user()->id, $id, Carbon::now()]);

        return redirect()->back()->with('message', 'Application sent successfully');
    }
}
