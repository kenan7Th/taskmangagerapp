<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProfileRequest;
use App\Http\Requests\UpdateProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    
    public function index()
    {
        $tak=Profile::all();
        return response()->json($tak,200);
    }
    //create function
    public function store(CreateProfileRequest $request)
    {
        

        $task = Profile::create($request->validated());
        return response()->json($task, 201);
    }
    //update  
    public function update(UpdateProfileRequest $request, $id)
    {
        // Find the task by ID or return a 404 error if not found
        $task = Profile::findOrFail($id);
    
    
        // Update the task with the validated data
        $task->update($request->validated());
    
        // Return the updated task as JSON response
        return response()->json($task, 200);
    }
    // public function show($id)
    // {
    //    $mytask=  Profile::find($id);
    //      return response()->json($mytask,200);
    // }

    public function show($id)
    {
        $profile=  Profile::where('user_id',$id)->first();
        return response()->json($profile,200);
    }
}
