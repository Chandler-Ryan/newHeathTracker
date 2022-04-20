@extends('layouts.app')

@section('content')
<style>
    form{
        display:inline;
    }
    td, th{
        text-align:center;
    }
    td.controls{
        text-align: right;
    }
    th.add{
        text-align:right;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            @if($records->count() > 0 )
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Weight</th>
                        <th>BP</th>
                        <th>Resting HR</th>
                        <th>Steps</th>
                        <th>Workout Count</th>
                        <th>Workout Duration</th>
                        <th class="add"><a href="/record/create" class="btn btn-outline-primary">Add Daily Record</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td>{{$record->record_date}}</td>
                        <td>{{$record->weight}}</td>
                        <td>{{$record->systolic}} / {{$record->diastolic}}</td>
                        <td>{{$record->resting_heartrate}}</td>
                        <td>{{$record->steps}}</td>
                        <td>{{isset($record->workouts) ? $record->workouts->count() : '0'}}</td>
                        <td>{{isset($record->workouts) ? date('H:i', strtotime(AddTime($record->workouts->pluck('duration')->toArray()))) : 'no'}}</td>
                        <td class="controls">
                            <a href="/record/{{$record->id}}/workout/create" class="btn btn-outline-success">+WO</a>
                            <a href="/record/{{$record->id}}/edit" class="btn btn-outline-warning">Edit</a>
                            <form action="record/{{$record->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h2 class="text-center">There are no daily records yet.</h2>
            <div class="text-center"><a href="/record/create" class="btn btn-outline-success">Add Daily Record</a></div>           
            @endisset
        </div>
    </div>
</div>
@endsection