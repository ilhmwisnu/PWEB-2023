<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        // RAW Query
        // $data = DB::select("SELECT * from todos");

        //Query Builder
        $data = DB::table("todos")->get();

        //ORM
        $data = Todo::all();
        return view('home', [
            "title" => "Ini Home Page",
            "todos" => $data
        ]);
    }

    public function about()
    {
        return "About Page";
    }

    public function show($id, $title)
    {
        //RAW Query
        // $data = DB::select('select * from todos where id=1 ')[0];

        //Query Builder
        // $data = DB::table("todos")->where("id", 1)->get()[0];

        //ORM
        $data = Todo::find($id);

        return view("detail_todo", [
            "todo" => $data,
        ]);
    }

    public function create()
    {
        return view("tambah_todo");
    }

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                "title" => "required",
                "description" => 'required'
            ]
        );

        $validated["deadline"] = now();

        //Raw
        // DB::insert('insert into todos (title,description,deadline) values (?, ?, ?)', [$request->title, $request->description, now()]);

        //Query Builder
        // DB::table("todos")->insert($validated);

        //ORM
        // Todo::create($validated);

        return redirect("/");
    }

    public function destroy($id)
    {
        //Raw
        // DB::delete('delete todos where id=?', [$id]);

        //Query Builder
        // DB::table("todos")->delete($id);

        //ORM
        Todo::destroy($id);

        return redirect("/");
    }
}
