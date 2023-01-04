<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Testimony;
use Illuminate\Http\Request;


class TestimonyController extends Controller
{
    public function index()
    {
        $testimony = Testimony::latest()->get();
        return response()->json($testimony);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'story' => 'required'
        ]);

        Testimony::insert([
            'title' => $request->title,
            'image' => $request->image,
            'story' => $request->story
        ]);
        return response('Testimony  Inserted Successfully');
    }
}
