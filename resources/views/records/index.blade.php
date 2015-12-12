@extends('_base')

@section('title')
    List records | Service Fusion
@endsection

@section('header')
    List all records
@endsection

@section('content')
    @foreach($records as $record)
        <div class="row well well-lg">
            <h2 class="index_titles text-primary col-xs-12">This is Record #{{ $record->id }}</h2>
            <div class="col-lg-4 col-md-12 col-xs-12">
                <p><kbd>First Name:</kbd>  {{ $record->firstname }}</p>
                <p><kbd>Last Name:</kbd>  {{ $record->lastname }}</p>
                <p><kbd>Date of Birth:</kbd>  {{ $record->birthday }}</p>
                <p><kbd>Zip Code:</kbd>  <span class="log_input"> {{ $record->zipcode }} </span></p>
                <p><kbd>Zip Code's data from Google API:</kbd> <span class="log_output"> </span></p>
                <p><kbd>Created at:</kbd>  {{ $record->created_at }}</p>
                <p><kbd>Updated at:</kbd>  {{ $record->updated_at }}</p>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="edit_or_delete_links"><a href="/records/{{ $record->id }}" class="text-success">Edit Record #{{ $record->id }}</a></div>
            </div>
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="edit_or_delete_links"><a href="/records/{{ $record->id }}" class="text-danger">Delete Record #{{ $record->id }}</a></div>
            </div>
        </div>
        <hr>
    @endforeach
@endsection

