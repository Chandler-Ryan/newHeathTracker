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
                    <td>Blood Sugar</td>
                    <td>{{$record->bloodsugar}} mg/dl</td>
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
    <div class="row PB-3">
        <div class="col-4">
            <a href="/record" class="btn btn-outline-warning"><i class="far fa-hand-point-left"></i><span class="pl-5">Back</span></a>
        </div>
        <div class="col-4">
            @if ($record->workouts->count() > 0)
                <h2 class="text-center">Workouts:</h2>
            @else
            <h2 class="text-center">Add a Workout <i class="far fa-hand-point-right"></i></h2>
            @endif
        </div>
        <div class="col-4 text-end">
            <a href="/record/{{$record->id}}/workout/create" class="btn btn-outline-success">+WO</a>
        </div>
    </div>
    @if ($record->workouts->count() > 0)
        @foreach ($record->workouts as $workout)
        <div class="row mb-3 col-8 mx-auto">
            <table class="table table-striped">
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col"><a href="/record/{{$record->id}}/workout/{{$workout->id}}/edit" class="btn btn-outline-warning">Edit WO</a></div>
                            <div class="col text-center">{{$workout->type}}</div>
                            <div class="col text-end">
                                <form action="record/{{$record->id}}/workout/{{$workout->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
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