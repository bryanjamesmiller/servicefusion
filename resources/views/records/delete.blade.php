@extends('_base')

@section('title')
    Delete a record | Service Fusion
@endsection

@section('header')
    Delete record {!! $record->id !!} from the database?
@endsection

@section('content')
    {!! Form::open(array('method' => 'PATCH', 'action' => 'RecordsController@update', $record->id)) !!}

    <div class="form-group">
        {!! Form::label('firstname', 'First Name') !!}
        {!! Form::text('firstname', '', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('lastname', 'Last Name') !!}
        {!! Form::text('lastname', '', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!!  Form::label('birthday', 'Date of Birth') !!}
        {!! Form::text('birthday', '', array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('zipcode', 'Zip Code') !!}
        {!! Form::text('zipcode', '', array('class' => 'form-control')) !!}
    </div>

    <button type="submit" class="btn btn-default">Submit</button>

    {!! Form::close() !!}
@endsection