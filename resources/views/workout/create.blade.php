@extends('layouts.app')

@section('content')

<div class="container">
    <div class="text-center pt-5">
        @if ($edit)
            <h1>Edit Workout</h1>
            <form action="/record/{{request()->route('record')}}/workout/{{request()->route('workout')}}" method="post">
            @method('PUT')
        @else
            <h1>Add Workout</h1>            
            <form action="/record/{{request()->route('record')}}/workout" method="post">
        @endif
            @csrf
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="mb-3">
                        <select class="form-select" name="type">
                            <option selected>Workout Type</option>
                            <option>Indoor Run</option>
                            <option>Outdoor Run</option>
                            <option>Indoor Bike</option>
                            <option>Outdoor Bike</option>
                            <option>Indoor Walk</option>
                            <option>Outdoor Walk</option>
                            <option>Strength</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" pattern="/^([01]?[0-9]|2[0-3])\:+[0-5][0-9]$/"class="form-control{{$errors->has('duration') ? ' is-invalid' : '' }}" id="floatingdate" name="duration" value="{{$workout->duration ?? old('duration')}}" placeholder="Duration">
                        <label for="floatingdate">Duration format hh:mm</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control{{$errors->has('distance') ? ' is-invalid' : '' }}" id="floatingInput" placeholder="125.0" step="0.01" name="distance" value="{{$workout->distance ?? old('distance')}}">
                        <label for="floatingInput">Distance</label>
                    </div>
                    <input type="hidden" name="daily_record_id" value="{{request()->route('record')}}">
                </div>
                <div class="pt-3">
                    <button type="submit" class="btn btn-outline-primary">{{$edit ? 'Edit' : 'Add'}} Workout</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection