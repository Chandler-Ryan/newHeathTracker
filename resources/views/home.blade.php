@extends('layouts.app')

@section('content')
<style>
    a{
        color:black;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome, {{ auth()->user()->name}}
                </div>
            </div>
        </div>

        <div class="col-12 pt-5">
            <div class="card">
                <div class="card-header">Last 7 Daily Records</div>
                <div class="card-body">
                    @isset($records)

                            <table class="table table-striped">
                                <tr>
                                    <th>Date</th>
                                    <th>Weight</th>
                                    <th>BP</th>
                                    <th>R-HR</th>
                                    <th>Blood Sugar</th>
                                    <th>Steps</th>
                                    <th>WO's</th>
                                    <th>WO Time</th>
                                </tr>
                                @foreach ($records as $record)
                                <tr>
                                    <td data-th="Date:"><a href="/record/{{$record->id}}">{{date('M d, Y',strtotime($record->record_date))}}</a></td>
                                    <td data-th="Weight:">{{$record->weight ?? 0}}</td>
                                    <td data-th="Blood Pressure:">{{$record->systolic ?? 0}} / {{$record->diastolic ?? 0}}</td>
                                    <td data-th="Resting Heartrate:">{{$record->resting_heartrate ?? 0}}</td>
                                    <td data-th="Blood Sugar:">{{$record->bloodsugar ?? 0}}</td>
                                    <td data-th="Steps:">{{$record->steps ?? 0}}</td>
                                    <td data-th="Workout Count:">{{isset($record->workouts) ? $record->workouts->count() : '0'}}</td>
                                    <td data-th="Duration:">{{isset($record->workouts) ? date('H:i', strtotime(AddTime($record->workouts->pluck('duration')->toArray()))) : 'no'}}</td>
                                </tr>                                    
                                @endforeach        
                            </table>

                    @endisset
                </div>
                <div class="card-footer text-center">
                    <a href="/record/create" class="btn btn-primary">Add Daily Record</a>
                    <a href="/record" class="btn btn-primary">View All Records</a>
                </div>
            </div>
        </div>

        <div class="col-12 pt-5">
            <div class="card">
                <div class="card-header">Average for the last 7 days</div>
                <div class="card-body">
                    @isset($records)

                            <table class="table table-striped">
                                <tr>
                                    <th>Weight</th>
                                    <th>BP</th>
                                    <th>R-HR</th>
                                    <th>Blood Sugar</th>
                                    <th>Steps</th>
                                    <th>WO's</th>
                                    <th>WO Time</th>
                                </tr>

                                <tr>
                                    <td data-th="Weight:" class="notRowLabel">{{floor($records->avg("weight")) ?? 0}}</td>
                                    <td data-th="Blood Pressure:">{{floor($records->avg("systolic")) ?? 0}} / {{floor($records->avg("diastolic")) ?? 0}}</td>
                                    <td data-th="Resting Heartrate:">{{floor($records->avg("resting_heartrate")) ?? 0}}</td>
                                    <td data-th="Blood Sugar:">{{floor($records->avg("bloodsugar")) ?? 0}}</td>
                                    <td data-th="Steps:">{{floor($records->avg("steps")) ?? 0}}</td>
                                    <td data-th="Workout Count:">{{round($records->sum(function ($record) {return $record->workouts->count();}) / $records->count(), 2) ?? 0}}</td>
                                    <td data-th="Duration:">unsetup</td>
                                </tr>                                         
                            </table>

                    @endisset
                </div>
                <div class="card-footer text-center">
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
