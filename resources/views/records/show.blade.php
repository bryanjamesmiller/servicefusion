@extends('_base')

@section('title')
    Individual records | Service Fusion
@endsection

@section('header')
    Individual records
@endsection

@section('content')
    @include('records._single_record_output')
@endsection

@section('extra_js')
    <script src="/js/googleinfo.js"></script>
@endsection
