<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\todolist;

class todolistController extends Controller{
    public function index(){
        //READ (GET)
        return 'Hello World';
    }
    public function store(Request $request){
        //CREATE (POST)
    }
    public function update(Request $request, todolist $todolist){
        //UPDATE (PUT)
    }
    public function destroy(todolist $todolist){
        //DELETE (DELETE)
    }
}