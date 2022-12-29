<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->get();
        return response()->json($news);
    }
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'description' => 'required'
        ]);

        News::insert([
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description
        ]);
        return response('News Inserted Successfully');
    }
}
