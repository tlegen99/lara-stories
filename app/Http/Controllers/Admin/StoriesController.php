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
        $story = Stories::add($request->except(["_token"]));

        if ( ! $story) {
            return Json::encode(["error" => "Ошибка при добавлении"]);
        }

        return redirect()->route('admin.stories.index')->with("success", "История добавлена");
    }

    public static function preview(int $id)
    {
        $story = Stories::find($id);

        return view("admin.stories.preview", [
            "story" => $story
        ]);
    }

    public static function edit(int $id)
    {
        $story = Stories::find($id);

        return view("admin.stories.edit", [
            "story" => $story
        ]);
    }

    public static function update(int $id, Request $request)
    {
        $story = Stories::edit($id, $request);

        if ( ! $story) {
            return Json::encode(["error" => "Ошибка при редактировании"]);
        }

        return redirect()->route("admin.stories.edit", ["id" => $id])->with("success", "История отредактирована");
    }

    public static function delete(int $id)
    {
        $story = Stories::remove($id);

        if ( ! $story) {
            return Json::encode(["error" => "Ошибка при удалении"]);
        }

        return redirect()->route("admin.stories.index")->with("success", "История удалена");
    }
}
