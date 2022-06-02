@extends('layouts.app')

@section('content')

{{ Form::model($record, ['route' => ['records.update', $record], 'method' => 'PATCH']) }}
@include('record.form')
{{ Form::submit('Обновить', ['class' => 'form-control mb-4 w-25 btn btn-primary']) }}
{{ Form::close() }}
@endsection