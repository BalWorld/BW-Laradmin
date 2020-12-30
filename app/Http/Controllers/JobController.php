<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class JobController extends Controller
{
    public function index() {
        $ajobs = Job::all();
    
    return view('bw_jobs_all', ['jobs' => $ajobs]);
    
    }
    public function career() {
        $ajobs = Job::orderBy('id', 'desc')->get();
    
    return view('main/careers', ['jobs' => $ajobs]);
    
    }

    public function show($id) {
        $job = Job::findOrFail($id);

        return view('bw_jobs_all', ['job' => $job]);
    }

    public function showCareer($id) {
        $job = Job::findOrFail($id);

        return view('main/career', ['job' => $job])->withJob(Job::findOrFail($id));
    }


    public function destroy($id) {
            $job = Job::findOrFail($id);
            $job->delete();

            return redirect('/jobs');
            //
    }


    public function store() {
        $s_jobs = new Job();

        $s_jobs->bw_job_name = request('jobname');
        $s_jobs->bw_job_title = request('jobtitle');
        $s_jobs->bw_job_description = request('jobdesc');
        $s_jobs->bw_job_pskills = request('jobskills');
        $s_jobs->bw_job_sskills = request('secondaryskills');
        $s_jobs->bw_job_oskills = request('optionalskills');
        $s_jobs->bw_job_location = request('location');
        $s_jobs->bw_job_minexp = request('minexp');
        $s_jobs->bw_job_maxexp = request('maxexp');
        $s_jobs->bw_job_sal = request('salary');
        $s_jobs->bw_job_type = request('jobtype');
        $s_jobs->bw_job_wlocation = request('wlocation');


        $s_jobs->save();

        return redirect('/dashboard');
    }

}
