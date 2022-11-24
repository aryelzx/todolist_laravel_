<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;
class TodoController extends Controller
{
    public function index(){
        $todos = Todo::orderBy('completed')->get();
        return view('todo.index')->with(['todos' => $todos]);
    }
    public function create(){
        return view('todo.create');
    }
    public function upload(Request $request){
        $request->validate([
            'title' => 'required'
        ]);
        $todo = $request->title;
        Todo::create([
            'title' => $todo
        ]);
        return redirect()->back()->with('alerta', 'Tarefa criada com sucesso!');
    }
    public function edit($id){
        $todo = Todo::find($id);
        return view('todo.edit')->with(['id' => $id, 'todo' => $todo]);
    }
    public function update(Request $request){
        $request->validate([
            'title' => 'required'
        ]);
        $updateTodo = Todo::find($request->id);
        $updateTodo->update(['title' => $request->title]);
        return redirect('/index')->with('alerta', "Lista editada com sucesso!");
    }
 
    public function completed($id){
        $todo = Todo::find($id);
        if ($todo->Completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('alerta', "Tarefa incompleta!");
        }else {
            $todo->update(['completed' => true]);
            return redirect()->back()->with('alerta', "Tarefa completada!");
        }
    }
    public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('alerta', "Tarefa deletada com sucesso!");
    }
}
