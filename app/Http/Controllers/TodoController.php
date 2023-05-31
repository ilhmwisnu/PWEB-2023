<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Ini Home Page",
            "todos" => Todo::all()
        ]);
    }

    public function about()
    {
        return "About Page";
    }

    public function show($id,$title)
    {
        // return view("detail_todo", [
        //     "todo" => Todo::find($id)
        // ]);
        return $title;
    }
}
