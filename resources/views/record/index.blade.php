@extends('layouts.app')

@section('content')
<style>
    form{
        display:inline;
    }
    a{
        color:black;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            @if($records->count() > 0 )
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="d-none d-md-table-cell">Date</th>
                        <th class="d-none d-md-table-cell">Weight</th>
                        <th class="d-none d-md-table-cell">BP</th>
                        <th class="d-none d-md-table-cell">R-HR</th>
                        <th class="d-none d-md-table-cell">BS</th>
                        <th class="d-none d-md-table-cell">Steps</th>
                        <th class="d-none d-md-table-cell">WO's</th>
                        <th class="d-none d-md-table-cell">WO Time</th>
                        <th class="add d-block d-md-table-cell"><a href="/record/create" class="btn btn-outline-primary">Add Daily Record</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($records as $record)
                    <tr>
                        <td data-th="Date:" class="d-block d-md-table-cell"><a href="/record/{{$record->id}}">{{date('M d, Y',strtotime($record->record_date))}}</a></td>
                        <td data-th="Weight:" class="d-block d-md-table-cell">{{$record->weight ?? 0}}</td>
                        <td data-th="Blood Pressure:" class="d-block d-md-table-cell">{{$record->systolic}} / {{$record->diastolic}}</td>
                        <td data-th="Resting Heartrate:" class="d-block d-md-table-cell">{{$record->resting_heartrate ?? 0}}</td>
                        <td data-th="Blood Sugar:" class="d-block d-md-table-cell">{{$record->bloodsugar ?? 0}}</td>
                        <td data-th="Steps:" class="d-block d-md-table-cell">{{$record->steps ?? 0}}</td>
                        <td data-th="Workout Count:" class="d-block d-md-table-cell">{{isset($record->workouts) ? $record->workouts->count() : '0'}}</td>
                        <td data-th="Workout Duration:" class="d-block d-md-table-cell">{{isset($record->workouts) ? date('H:i', strtotime(AddTime($record->workouts->pluck('duration')->toArray()))) : 'no'}}</td>
                        <td class="controls d-flex justify-content-evenly d-md-table-cell">
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