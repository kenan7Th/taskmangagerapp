<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  use HasFactory;
    //many to many relationships tasks and categories
    public function tasks()
    {
        return $this->belongsToMany(Task::class,'category_task');
    }
}
