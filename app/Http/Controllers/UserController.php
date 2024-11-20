<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getprofile($id){
    $profile= User::find($id)->profile;
    return response()->json($profile,200);}

////get all the tasks  belgongs to a scpecifc user
    public function getUserTasks($id){
        $tasks= User::find($id)->tasks;
        return response()->json($tasks,200);}
}
