<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tasks = Task::all();
        $tasks = Task::orderBy('time')->get();

        $groupedTasks = [];

        $dayAbbreviations = [
            'Mo' => 'Monday',
            'Tu' => 'Tuesday',
            'We' => 'Wednesday',
            'Th' => 'Thursday',
            'Fr' => 'Friday',
            'Sa' => 'Saturday',
            'Su' => 'Sunday',
        ];

        $allHoursInDay = [];
        for ($hour = 7; $hour < 24; $hour++) {
            $allHoursInDay[] = str_pad($hour, 2, '0', STR_PAD_LEFT) . ':00'; // Format as HH:00
        }

        foreach ($tasks as $task) {
            $time = $task->time;
            $day = $task->day;

            // Create a new group for each unique time
            if (!isset($groupedTasks[$time])) {
                $groupedTasks[$time] = [];
            }

            // Add the task to the corresponding time and day group
            $groupedTasks[$time][$day] = $task;
        }


        // echo dd($groupedTasks);
        return view('calendar', compact('groupedTasks', 'allHoursInDay', 'dayAbbreviations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
