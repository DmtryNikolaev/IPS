@extends('layouts.app')

@section('content')

{{ Form::model($record, ['route' => 'records.store', 'class' => 'd-flex justify-content-between flex-column gap-10 mt-4 w-25 m-auto']) }}
@include('record.form')
{{ Form::submit('Добавить', ['class' => 'form-control mb-4 btn btn-primary']) }}
{{ Form::close() }}
@endsection