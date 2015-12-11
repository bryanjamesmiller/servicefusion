@extends('_base')

@section('title')
    Create a record | Service Fusion
@endsection

@section('header')
    Create a new record
@endsection

@section('content')
    {{-- firstname, lastname, date of birth and zip-code --}}
    {!! Form::open(array('url' => '')) !!}

    {!!  Form::label('firstname', 'First Name') !!}
    {!! Form::text('firstname') !!}

    {!! Form::close() !!}
@endsection