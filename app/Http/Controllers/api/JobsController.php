<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->get();
        return response()->json($jobs);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'description' => 'required'
        ]);

        Job::insert([
            'title' => $request->title,
            'company' => $request->company,
            'location' => $request->location,
            'description' => $request->description
        ]);
        return response('Jobs  Inserted Successfully');
    }
}
