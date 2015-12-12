@extends('_base')

@section('title')
    List records | Service Fusion
@endsection

@section('header')
    List all records
@endsection

@section('content')
    @foreach($records as $record)
        <a href="/records/{{ $record->id }}">Click here to edit Record #{{ $record->id }}</a>
        <p>First Name: {{ $record->firstname }}</p>
        <p>Last Name: {{ $record->lastname }}</p>
        <p>Date of Birth: {{ $record->birthday }}</p>
        <p>Zip Code: {{ $record->zipcode }}</p>
        <hr>
    @endforeach
@endsection
