<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Resources\TodoResource;

class TodosController extends Controller
{
    public function index(){

        //fetch all todos from database

        //display them in todos.index page

        $todos = Todo::all();

        return view('todos.index')->with('test', $todos);

        // return response()->json($todos);
        // return new TodoResource($todos);
    }

    public function create()
    {
        return view ('todos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'completed' => 'required'
        ]);

        $todo = Todo::create($request->all());
        
        return redirect(route('todos.index'));
        // $todo->name = $request('name')
    }

    public function edit($id)
    {
        $targetTodo = Todo::find($id);

        return view('todos.edit')->with('targetEdit',$targetTodo);
    }

    public function update(Request $request){
       
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'completed'=>'required',
        ]);

        $targetTodo = Todo::find($request->id);

        $targetTodo->update($request->all());

        return redirect (route('todos.index'));
    }

    public function delete($id)
    {
        $targetDelete = Todo::find($id);
        $targetDelete->delete();
        return redirect (route('todos.index'));
    }
}
