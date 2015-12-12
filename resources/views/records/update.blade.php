@extends('_base')

@section('title')
    Update a record | Service Fusion
@endsection

@section('header')
    Update record {!! $record->id !!} from the database?
@endsection

@section('content')
    {{-- In form-model binding, you have to have "null" as the 2nd field in the form. --}}

    {!! Form::model($record, array('method' => 'PATCH', 'action' => 'RecordsController@update', $record->id)) !!}

    <div class="form-group">
        {!! Form::label('firstname', 'First Name') !!}
        {!! Form::text('firstname', null, array('class' => 'form-control', 'id' => 'firstname')) !!}
        <div class="text-danger" id="button_fn_hint">The "First Name" field must not be empty.</div>
    </div>

    <div class="form-group">
        {!! Form::label('lastname', 'Last Name') !!}
        {!! Form::text('lastname', null, array('class' => 'form-control', 'id' => 'lastname')) !!}
        <div class="text-danger" id="button_ln_hint">The "Last Name" field must not be empty.</div>
    </div>

    <div class="form-group">
        {!!  Form::label('birthday', 'Date of Birth') !!}
        {!! Form::text('birthday', null, array('class' => 'form-control', 'id' => 'birthday')) !!}
        <div class="text-danger" id="button_dob_hint">The "Date of Birth" field must not be empty.</div>
    </div>

    <div class="form-group">
        {!! Form::label('zipcode', 'Zip Code') !!}
        {!! Form::text('zipcode', null, array('class' => 'form-control', 'id' => 'zip')) !!}
        <span class="text-danger" id="zip_hint">The Zip Code must be a 5-digit integer.</span>
        <div class="text-danger" id="button_zip_hint">The "Zip Code" field must not be empty.</div>
    </div>

    <button type="submit" class="btn btn-info form-control" id="btn">Submit</button>
    {!! Form::close() !!}
@endsection