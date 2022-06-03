@if ($errors->any())
<div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="mb-1">
    <label for="staticEmail" class="col-sm-2 col-form-label">Дата</label>
    <div class="input-form">
        {{ Form::date('date') }}
    </div>
</div>

<div class="mb-2">
    <label for="staticEmail" class="col-sm-2 col-form-label">Значение</label>
    <div class="input-form">
        {{ Form::number('value') }}
    </div>
</div>