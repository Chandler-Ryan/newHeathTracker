@extends('layouts.app')

@section('content')

<div class="text-center pt-5">
    <h1>Health Tracker</h1>
</div>

<div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
</div>
@endsection