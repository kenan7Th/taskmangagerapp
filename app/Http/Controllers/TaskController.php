<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|integer|min:1',
        ]);

        $task = Task::create($validated);
        return response()->json($task, 200);
    }
    //update  
    public function update(Request $request, $id)
    {
        // Find the task by ID or return a 404 error if not found
        $task = Task::findOrFail($id);
    
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|integer|min:1',
        ]);
    
        // Update the task with the validated data
        $task->update($validated);
    
        // Return the updated task as JSON response
        return response()->json($task, 200);
    }
    public function show($id)
    {
       $mytask=  Task::find($id);
         return response()->json($mytask,200);
    }
    
}
