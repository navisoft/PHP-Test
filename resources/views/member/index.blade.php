@extends('layouts.master')

@section('content')
    <h1>List of other member </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($models as $model)
                <tr>
                    <td>{{ $model->firstname }}</td>
                    <td>{{ $model->lastname }}</td>
                    <td>{{ $model->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop