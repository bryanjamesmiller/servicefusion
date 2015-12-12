@extends('_base')

@section('title')
    Create a record | Service Fusion
@endsection

@section('header')
    Create a new record
@endsection

@section('content')
    {!! Form::open(array('url' => '/records')) !!}
        @include('records._form_for_create_and_update', ['submit_button' => 'Create New Record'])
    {!! Form::close() !!}
@endsection