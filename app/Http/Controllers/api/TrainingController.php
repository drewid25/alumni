<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function index()
    {
        $training = Training::latest()->get();
        return response()->json($training);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'instructor' => 'required',
            'date' => 'required'
        ]);

        Training::insert([
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
            'instructor' => $request->instructor,
            'date' => $request->date
        ]);
        return response('Training Inserted Successfully');
    }
}
