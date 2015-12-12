@extends('_base')

@section('title')
    Create a record | Service Fusion
@endsection

@section('header')
    Create a new record
@endsection

@section('content')
    {!! Form::open(array('url' => '/records')) !!}

    <div class="form-group">
        {!! Form::label('firstname', 'First Name') !!}
        {!! Form::text('firstname', '', array('class' => 'form-control', 'id' => 'firstname')) !!}
        <div class="text-danger" id="button_fn_hint">The "First Name" field must not be empty.</div>
    </div>

    <div class="form-group">
        {!! Form::label('lastname', 'Last Name') !!}
        {!! Form::text('lastname', '', array('class' => 'form-control', 'id' => 'lastname')) !!}
        <div class="text-danger" id="button_ln_hint">The "Last Name" field must not be empty.</div>
    </div>

    <div class="form-group">
        {!!  Form::label('birthday', 'Date of Birth') !!}
        {!! Form::text('birthday', '', array('class' => 'form-control', 'id' => 'birthday')) !!}
        <div class="text-danger" id="button_dob_hint">The "Date of Birth" field must not be empty.</div>
    </div>

    <div class="form-group">
        {!! Form::label('zipcode', 'Zip Code') !!}
        {!! Form::text('zipcode', '', array('class' => 'form-control', 'id' => 'zip')) !!}
        <span class="text-danger" id="zip_hint">The Zip Code must be a 5-digit integer.</span>
        <div class="text-danger" id="button_zip_hint">The "Zip Code" field must not be empty.</div>
    </div>

    <button type="submit" class="btn btn-info form-control" id="btn">Submit</button>
    {!! Form::close() !!}
@endsection