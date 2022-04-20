@extends('layouts.app')

@section('content')
<div class="container">
    <div class="text-center pt-5">
        @if ($edit)
            <h1>Edit Weight</h1>
            <form action="/weight/{{$weight->id}}" method="post">
            @method('PUT')
        @else
            <h1>Add New Weight</h1>            
            <form action="/weight" method="post">
        @endif
            @csrf
            <div class="row">
                <div class="col-8 mx-auto">
                    <div class="form-floating mb-3">
                        <input type="number" class="form-control" id="floatingInput" placeholder="125.0" step="0.1" name="amount" value="{{$weight->amount ?? old('amount')}}">
                        <label for="floatingInput">Current Weight</label>
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="form-floating">
                        <input type="date" class="form-control" id="floatingdate" name="date" value="{{$weight->date ?? old('date')}}">
                        <label for="floatingdate">Date</label>
                    </div>
                </div>
                <div class="pt-3">
                    <button type="submit" class="btn btn-outline-primary">{{$edit ? 'Edit' : 'Add'}} Weight</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection