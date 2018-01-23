@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>
    {!! Form::open(['action' => 'method' => 'POST']) !!}
        
    {!! Form::close() !!}
@endsection