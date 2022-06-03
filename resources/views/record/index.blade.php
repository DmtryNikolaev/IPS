@extends('layouts.app')

@section('content')
<h3>Список записей</h3>
@foreach ($records as $record)
<div class="border border-secondary mt-2 p-2 rounded-3">
    <b>{{$record->date}}</b>
    <p>{{$record->value}}</p>
    {{ Form::open(['route' => ['records.destroy', $record], 'method' => 'delete']) }}
    <button type="submit">Delete</button>
    {{ Form::close() }}
    <a href="{{ route('records.edit', $record) }}">Edit</a>
</div>
@endforeach
<div class="ct-chart ct-perfect-fourth mt-5"></div>

@endsection