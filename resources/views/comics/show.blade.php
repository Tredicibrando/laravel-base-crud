@extends('layouts.app')

@section('content')
    {{-- @dump($comics) --}}

    <h1>
        {{$comics->title}}
    </h1>

    <img src="{{$comics->thumb}}" alt="">

    <p>
        {{$comics->description}}
    </p>

    <h4>
        {{$comics->price}}
    </h4>

@endsection