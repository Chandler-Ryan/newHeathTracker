@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center pt-5">
        @if ($edit)
            <h1>Edit Daily Record</h1>
            <form action="/record/{{$record->id}}" method="post">
            @method('PUT')
        @else
            <h1>Add New Daily Record</h1>            
            <form action="/record" method="post">
        @endif
            @csrf
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control{{$errors->has('record_date') ? ' is-invalid' : '' }}" id="floatingdate" name="record_date" value="{{$record->record_date ?? old('record_date') ?? date('Y-m-d')}}">
                        <label for="floatingdate">Date</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control{{$errors->has('weight') ? ' is-invalid' : '' }}" id="floatingInput" placeholder="125.0" step="0.1" name="weight" value="{{$record->weight ?? old('weight')}}">
                        <label for="floatingInput">Weight</label>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Systolic</span>
                        <input type="number" class="form-control{{$errors->has('systolic') ? ' is-invalid' : '' }}" placeholder="120" step="1" min="80" max="180" name="systolic" value="{{$record->systolic ?? old('systolic')}}">
                        <span class="input-group-text">/</span>
                        <input type="number" class="form-control{{$errors->has('diastolic') ? ' is-invalid' : '' }}" placeholder="80" step="1" min="50" max="150" name="diastolic" value="{{$record->diastolic ?? old('diastolic')}}">
                        <span class="input-group-text">Diastolic</span>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control{{$errors->has('resting_heartrate') ? ' is-invalid' : '' }}" id="resting_heartrate" placeholder="125" step="1" name="resting_heartrate" value="{{$record->resting_heartrate ?? old('resting_heartrate')}}">
                        <label for="resting_heartrate">Resting Heartrate</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control{{$errors->has('bloodsugar') ? ' is-invalid' : '' }}" id="bloodsugar" placeholder="125" step="1" name="bloodsugar" value="{{$record->bloodsugar ?? old('bloodsugar')}}">
                        <label for="bloodsugar">Blood Sugar</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control{{$errors->has('steps') ? ' is-invalid' : '' }}" id="steps" step="1" placeholder="Steps" name="steps" value="{{$record->steps ?? old('steps')}}">
                        <label for="steps">Steps</label>
                    </div>
                </div>
                <div class="row PB-3">
                    <div class="col-6">
                        <a href="/record" class="btn btn-outline-warning"><i class="far fa-hand-point-left"></i><span class="pl-5">Back</span></a>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-outline-primary">{{$edit ? 'Edit' : 'Add'}} Workout</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection