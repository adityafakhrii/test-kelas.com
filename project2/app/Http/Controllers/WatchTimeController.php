<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchTime;

class WatchTimeController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'class_id' => 'required|exists:classes,id',
            'minutes' => 'required|integer|min:1',
            'watch_date' => 'required|date',
        ]);

        WatchTime::create($request->all());

        return response()->json(['message' => 'Watch time recorded successfully.']);
    }
}

