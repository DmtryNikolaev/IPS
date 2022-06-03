@extends('layouts.app')

@section('content')
<h3 class="mb-3">Список записей</h3>
<a href="{{route('records.create')}}" class="btn btn-primary mb-4">Создать запись</a>
<div class="records">
    @foreach ($records as $record)
    <div class="border border-secondary p-2 rounded-3">
        <b>{{$record->date}}</b>
        <p class="mb-1">{{$record->value}}</p>
        {{ Form::open(['route' => ['records.destroy', $record], 'method' => 'delete']) }}
        <div class="d-flex">
            <button type="submit" class="btn btn-primary me-1">Delete</button>
            <a href="{{ route('records.edit', $record) }}" class="btn btn-primary">Edit</a>
        </div>
        {{ Form::close() }}
    </div>
    @endforeach
</div>
<div class="ct-chart ct-perfect-fourth mt-5"></div>
@endsection