<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stories;
use Illuminate\Database\Eloquent\Casts\Json;
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
        $params = [
            "name" => $request->input("name"),
            "body" => $request->input("body"),
            "views" => $request->input("views"),
        ];

        $stories = Stories::add($params);

        if ( ! $stories) {
            return Json::encode(["error" => "Ошибка при добавлении"]);
        }

        return redirect()->route('admin.stories.index')->with("success", "История добавлена");
    }
}
