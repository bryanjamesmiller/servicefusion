@extends('_base')

@section('title')
    List records | Service Fusion
@endsection

@section('header')
    List all records
@endsection

@section('content')
    @foreach($records as $record)
        <p><kbd>First Name:</kbd>  {{ $record->firstname }}</p>
        <p><kbd>Last Name:</kbd>  {{ $record->lastname }}</p>
        <p><kbd>Date of Birth:</kbd>  {{ $record->birthday }}</p>
        <p><kbd>Zip Code:</kbd>  {{ $record->zipcode }}</p>
        <h2><a href="/records/{{ $record->id }}">Edit Record #{{ $record->id }}</a></h2>
        <h2 ><a href="/records/{{ $record->id }}"class="text-danger">Delete Record #{{ $record->id }}</a></h2>
        <hr>
    @endforeach
@endsection
