<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WatchTime extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'class_id', 'minutes', 'watch_date'];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
