<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WatchTime;
use App\Models\Mentor;
use App\Models\MentorClass;
use Illuminate\Support\Facades\DB;

class RevenueController extends Controller
{
    public function calculate()
    {
        $totalSubscriptionPrice = 69000;
        $adminFeePercentage = 20;
        $mentorSharePercentage = 50;

        $netRevenue = $totalSubscriptionPrice * (1 - $adminFeePercentage / 100);
        $mentorRevenue = $netRevenue * ($mentorSharePercentage / 100);

        $watchTimes = WatchTime::with('class')->get();

        $classTimes = [];
        foreach ($watchTimes as $watchTime) {
            $classId = $watchTime->class_id;
            if (!isset($classTimes[$classId])) {
                $classTimes[$classId] = 0;
            }
            $classTimes[$classId] += $watchTime->minutes;
        }

        $totalMinutes = array_sum($classTimes);

        $mentorRevenues = [];
        foreach (Mentor::all() as $mentor) {
            $mentorClasses = MentorClass::where('mentor_id', $mentor->id)->pluck('class_id');
            $mentorMinutes = array_sum(array_intersect_key($classTimes, array_flip($mentorClasses->toArray())));

            if ($totalMinutes > 0) {
                $percentage = $mentorMinutes / $totalMinutes;
                $mentorRevenues[$mentor->name] = $mentorRevenue * $percentage;
            }
        }

        return response()->json($mentorRevenues);
    }
}
