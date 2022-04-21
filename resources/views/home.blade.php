@extends('layouts.app')

@section('content')
<style>
    td,th{
        text-align: center;
    }
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
                                    <th>Resting HR</th>
                                    <th>Steps</th>
                                    <th>Workout Count</th>
                                    <th>Workout Duration</th>
                                </tr>
                                @foreach ($records as $record)
                                <tr>
                                    <td><a href="/record/{{$record->id}}">{{$record->record_date}}</a></td>
                                    <td>{{$record->weight}}</td>
                                    <td>{{$record->systolic}} / {{$record->diastolic}}</td>
                                    <td>{{$record->resting_heartrate}}</td>
                                    <td>{{$record->steps}}</td>
                                    <td>{{isset($record->workouts) ? $record->workouts->count() : '0'}}</td>
                                    <td>{{isset($record->workouts) ? date('H:i', strtotime(AddTime($record->workouts->pluck('duration')->toArray()))) : 'no'}}</td>
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
                                    <th>Resting HR</th>
                                    <th>Steps</th>
                                    <th>Workout Count</th>
                                    <th>Workout Duration</th>
                                </tr>

                                <tr>
                                    <td>{{floor($records->avg("weight"))}}</td>
                                    <td>{{floor($records->avg("systolic"))}} / {{floor($records->avg("diastolic"))}}</td>
                                    <td>{{floor($records->avg("resting_heartrate"))}}</td>
                                    <td>{{floor($records->avg("steps"))}}</td>
                                    <td>{{round($records->sum(function ($record) {return $record->workouts->count();}) / $records->count(), 2)}}</td>
                                    <td></td>
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
