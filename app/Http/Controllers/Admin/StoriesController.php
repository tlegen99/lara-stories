<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stories;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    
    public function index()
    {
        $stories = Stories::all();
        
        return view("admin.stories.index")->with(["stories" => $stories]);
    }
    
    public function create()
    {
        return view("admin.stories.create");
    }
    
    public function store(Request $request)
    {
        return redirect()->route('admin.stories.index');
    }
}
