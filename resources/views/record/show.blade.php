@extends('layouts.app')

@section('content')
<style>
    .fa-hand-point-left{
        padding-right: 10px;
    }
</style>
<div class="container">
    <div class="row PB-3">
        <div class="col-4">
            <a href="/record" class="btn btn-outline-warning"><i class="far fa-hand-point-left"></i><span class="pl-5">Back</span></a>
        </div>
        <div class="col-4">
            <h2 class="text-center">{{date('F d, Y', strtotime($record->record_date))}}</h2>
        </div>
        <div class="col-4">

        </div>
    </div>
    <div class="row">
        <div class="col">
            
            <table class="table table-striped">
                <tr>
                    <td>Weight</td>
                    <td>{{$record->weight}}</td>
                </tr>
                <tr>
                    <td>BP</td>
                    <td>{{$record->systolic}} / {{$record->diastolic}}</td>
                </tr>
                <tr>
                    <td>Resting HR</td>
                    <td>{{$record->resting_heartrate}}</td>
                </tr>
                <tr>
                    <td>Steps</td>
                    <td>{{$record->steps}}</td>
                </tr>
                <tr>
                    <td>Workout Count</td>
                    <td>{{isset($record->workouts) ? $record->workouts->count() : '0'}}</td>
                </tr>
                <tr>
                    <td>Workout Duration</td>
                    <td>{{isset($record->workouts) ? date('H:i', strtotime(AddTime($record->workouts->pluck('duration')->toArray()))) : 'no'}}</td>
                </tr>
            </table>
        </div>
    </div>
    @if ($record->workouts->count() > 0)
        @foreach ($record->workouts as $workout)
        <div class="row mb-3 col-8 mx-auto">
            <table class="table table-striped">
                <tr>
                    <td colspan="2" class="text-center">{{$workout->type}}</td>
                </tr>
                <tr>
                    <td>Duration:</td>
                    <td>{{$workout->duration}}</td>
                </tr>
                <tr>
                    <td>Distance:</td>
                    <td>{{$workout->distance}}</td>
                </tr>
            </table>
        </div>
        @endforeach    
    @endif
</div>
@endsection