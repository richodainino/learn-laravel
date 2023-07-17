<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TodoController extends Controller
{
    public function index(): View
    {
        $todos = Todo::all();

        return view('tudu', [
            'todos' => $todos,
        ]);
    }

    public function store(Request $request)
    {
        $todo = new Todo();
        $todo->name = $request->input('name');
        $todo->save();

        return redirect('/tudu');
    }    

    public function show(Request $request, $id)
    {
        $todo = Todo::find($id);
        
        return 'show ' . $todo->name . ' with id ' . $id;
    }

    public function update(Request $request, $id)
    {
        // return 'update ' . $request->input('update-name') . ' ' . $id;

        $todo = Todo::find($id);
        $todo->name = $request->input('update-name');
        $todo->save();

        return redirect('/tudu');
    }

    public function destroy(Request $request, $id)
    {
        // return 'destroy ' . $id;

        Todo::destroy($id);

        return redirect('/tudu');
    }
}
