<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //your are allowed to fill all the fields with and exception for the id 
    use HasFactory;

    protected $guarded = ['id'];
//insdie the profile model 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

