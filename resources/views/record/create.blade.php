@extends('layouts.app')

@section('content')

{{-- BEGIN (write your solution here) --}}
{{ Form::model($record, ['route' => 'records.store', 'class' => 'd-flex justify-content-between flex-column gap-10 mt-4']) }}
@include('record.form')
{{ Form::submit('Добавить', ['class' => 'form-control mb-4 w-25 btn btn-primary']) }}
{{ Form::close() }}
{{-- END --}}
@endsection