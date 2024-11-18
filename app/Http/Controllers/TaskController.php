<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {
        $tak=Task::all();
        return response()->json($tak,200);
    }
    //create function
    public function store(StoreTaskRequest $request)
    {
        

        $task = Task::create($request->validated());
        return response()->json($task, 201);
    }
    //update  
    public function update(UpdateTaskRequest $request, $id)
    {
        // Find the task by ID or return a 404 error if not found
        $task = Task::findOrFail($id);
    
    
        // Update the task with the validated data
        $task->update($request->validated());
    
        // Return the updated task as JSON response
        return response()->json($task, 200);
    }
    public function show($id)
    {
       $mytask=  Task::find($id);
         return response()->json($mytask,200);
    }
    
}
