<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobResponse;

class JobResponseController extends Controller
{
    public function index()
    {
        $aresponses = JobResponse::all();
        return view('bw_responses_all', ['responses' => $aresponses]);
    }
    
    public function upload()
    {
        return view('bw_response');
    }

    public function uploadFile(Request $req)
    {
        $req->file->store('public/resumes');
        return "fileupload Success";
    }

    public function store(Request $request)
    {
        $jobresponse = new JobResponse();

        $jobresponse->name = request('name');
        $jobresponse->email = request('email');
        $jobresponse->phone = request('phone');
        $jobresponse->job = request('job');
        $jobresponse->status = 'Not Contacted';


        if ($request->hasfile('resume')) {
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/jobresponse/', $filename);
            $jobresponse->file = $filename;
        } else {
            return $request;
            $jobresponse->resume='';
        }

        $jobresponse->save();
        return view('/bw_response')->with('jobresponse', $jobresponse);
        
    }

    public function apply(Request $request)
    {
        $jobresponse = new JobResponse();

        $jobresponse->name = request('name');
        $jobresponse->email = request('email');
        $jobresponse->phone = request('phone');
        $jobresponse->job = request('job');
        $jobresponse->status = 'Not Contacted';


        if ($request->hasfile('resume')) {
            $file = $request->file('resume');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/jobresponse/', $filename);
            $jobresponse->file = $filename;
        } else {
            return $request;
            $jobresponse->resume='';
        }

        $jobresponse->save();
        
        return '<script type="text/javascript">alert("Thankyou For Applying!");window.location = "/careers/"; </script>';
        
    }

        public function show() {
            
    }
    
        public function destroy($id) {
            $jobresponse = JobResponse::findOrFail($id);
            $jobresponse->delete();

            return redirect('/responses');
            //
    }

        public function update(Request $req) {
            
            $jobresponse = JobResponse::find($req->id);

            
            //$jobresponse->name =  $req->name;
            //$jobresponse->email =$req->email;
            //$jobresponse->phone = $req->phone;
            //$jobresponse->job = $req->job;
            $jobresponse->status = $req->status;
            
            $jobresponse->save();
            return redirect('/responses');
            //
    }
}
