@extends('layouts.app')

@section('content')
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

        <div class="col-md-8 pt-5">
            <div class="card">
                <div class="card-header">Last 7 weights</div>
                <div class="card-body"></div>
                <div class="card-footer"><a href="/weight/create" class="btn btn-primary">Add Weight</a></div>
            </div>
        </div>

        <div class="col-md-8 pt-5">
            <div class="card">
                <div class="card-header">Last 7 blood pressures</div>
                <div class="card-body"></div>
                <div class="card-footer"><a href="/bp/create" class="btn btn-primary">Add Blood Pressure</a></div>
            </div>
        </div>

        <div class="col-md-8 pt-5">
            <div class="card">
                <div class="card-header">Last 7 exercises</div>
                <div class="card-body"></div>
                <div class="card-footer"><a href="/exercise/create" class="btn btn-primary">Add exercise</a></div>
            </div>
        </div>
        
    </div>
</div>
@endsection
