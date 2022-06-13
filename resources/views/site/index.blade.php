@extends('layouts.site')

@section('title', 'Sectors')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class='container'>
    Please enter your name and pick the Sectors you are currently involved in.
    <br>
    <br>
    {{ Form::token() }}
    {{ Form::open(['route' => 'storeSectors', 'method' => 'post']) }}
        @if (count($sectorsTree) > 0)

        {{ Form::label('Name:') }} 
        {{ Form::text('name', $sessionData['name']) }}
        <br>
        <br>
        <select multiple="" name="sectors[]" size="5">
            @foreach ($sectorsTree as $sector)
                @include('child', $sector)
            @endforeach
        </select>
        <br>
        <br>
        {{ Form::checkbox('terms', '1', false) }}
        {{ Form::label('Agree to terms') }}
        <br>
        <br>
        {{ Form::submit('Save', ['class' => 'btn btn-outline-primary mr-2']) }}<br>
    {{ Form::close() }}
    @endif
</div>

@endsection


       
        