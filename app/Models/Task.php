<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description', 'priority','user_id'];
    protected $table = 'tasks';

    //one to many relationship with user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     //many to many relationship with task category
     public function categories()
     {
         return $this->belongsToMany(Category::class ,'category_task');
     }
 }

