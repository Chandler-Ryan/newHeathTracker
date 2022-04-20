@extends('layouts.app')

@section('content')
<style>
    form{
        display:inline;
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
        <div class="col-8">
            @isset($weights)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th class="add"><a href="/weight/create" class="btn btn-outline-success">Add Weight</a></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($weights as $weight)
                    <tr>
                        <td>{{$weight->date}}</td>
                        <td>{{$weight->amount}}</td>
                        <td class="controls">
                            <a href="/weight/{{$weight->id}}/edit" class="btn btn-outline-warning">Edit</a>
                            <form action="weight/{{$weight->id}}" method="POST">
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
            <h2 class="text-center">There are no weights recorded yet.</h2>                
            @endisset
        </div>
    </div>
</div>
@endsection