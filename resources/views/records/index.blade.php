@extends('_base')

@section('title')
    List records | Service Fusion
@endsection

@section('header')
    Complete list of records
@endsection

@section('content')
    @foreach($records as $record)
        @include('records._single_record_output')
        <hr>
    @endforeach
@endsection

@section('extra_js')
    <script src="/js/googleinfo.js"></script>
@endsection

