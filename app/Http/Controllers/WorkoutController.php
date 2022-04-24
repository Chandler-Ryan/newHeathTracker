<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    protected $woTypes = ['Indoor Run','Outdoor Run','Indoor Bike','Outdoor Bike','Indoor Walk','Outdoor Walk','Strength','Other'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('record.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('workout.create', ['edit'=> false, 'woTypes'=>$this->woTypes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $record)
    {
        $workout = $request->validate([
            'duration' => array('regex:/^([01]?[0-9]|2[0-3])\:+[0-5][0-9]$/'),
            'distance' => 'numeric|nullable',
            'type' => 'in:'.implode(',', $this->woTypes),
            'daily_record_id' => 'exists:daily_records,id|in:'.$record
        ]);

        Workout::create($workout);
        return redirect()->route('record.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function show($record, Workout $workout)
    {
        return redirect()->route('record.show', $record);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function edit($record, Workout $workout)
    {
        return view('workout.create', ['edit'=> true, 'workout' => $workout, 'record' => $record, 'woTypes'=>$this->woTypes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function update($record, Request $request, Workout $workout)
    {
        $val = $request->validate([
            'duration' => array('regex:/^([01]?[0-9]|2[0-3])\:+[0-5][0-9]$/'),
            'distance' => 'numeric|nullable',
            'type' => 'in:'.implode(',', $this->woTypes),
            'daily_record_id' => 'exists:daily_records,id|in:'.$record
        ]);

        $workout->update($val);
        return redirect()->route('record.show', $record);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function destroy($record, Workout $workout)
    {
        $workout->delete();
        return redirect()->route('record.show', $record);
    }
}
