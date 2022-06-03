@extends('layouts.app')

@section('content')

{{ Form::model($record, ['route' => ['records.update', $record],'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 w-25 m-auto','method' => 'PATCH', ]) }}
@include('record.form')
{{ Form::submit('Обновить', ['class' => 'form-control mb-4 w-100 btn btn-primary']) }}
{{ Form::close() }}
@endsection