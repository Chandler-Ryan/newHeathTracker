<?php

namespace App\Http\Controllers;

use App\Models\DailyRecord;
use Illuminate\Http\Request;

class DailyRecordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('record.index', ['records' => DailyRecord::where('user_id', \Auth::id())->orderByDesc('record_date')->get() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('record.create', ['edit'=> false]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DailyRecord::create($request->validate([
            'user_id' => 'required|in:'.\Auth::id(),
            'record_date' => ['required', 'unique:daily_records,record_date,NULL,id,user_id,'.\Auth::id()],
            'steps' => 'integer|numeric|nullable',
            'resting_heartrate' => 'integer|numeric|nullable',
            'diastolic' => 'integer|numeric|nullable',
            'systolic' => 'integer|numeric|nullable',
            'weight' => 'integer|numeric|nullable'
            ])
        );
        return redirect()->route('record.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DailyRecord  $record
     * @return \Illuminate\Http\Response
     */
    public function show(DailyRecord $record)
    {
        return view('record.show', ['record' => $record]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DailyRecord  $record
     * @return \Illuminate\Http\Response
     */
    public function edit(DailyRecord $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DailyRecord  $record
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DailyRecord $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DailyRecord  $record
     * @return \Illuminate\Http\Response
     */
    public function destroy(DailyRecord $record)
    {
        $record->delete();
        return redirect()->route('record.index');
    }
}
