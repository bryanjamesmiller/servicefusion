@extends('_base')

@section('title')
    Update a record | Service Fusion
@endsection

@section('header')
    Update record {!! $record->id !!} from the database?
@endsection

@section('content')
    {!! Form::model($record, array('method' => 'PATCH', 'url' => '/records/'.$record->id)) !!}
        @include('records._form_for_create_and_update', ['submit_button' => 'Save Changes'])
    {!! Form::close() !!}
@endsection

@section('extra_js')
    <script src="/js/validation.js"></script>
@endsection