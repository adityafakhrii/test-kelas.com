<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorClass extends Model
{
    use HasFactory;

    protected $fillable = ['mentor_id', 'class_id'];
}

