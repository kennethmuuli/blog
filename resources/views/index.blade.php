@extends('partials.layout')
@section('title', 'Home Page')
@section('content')
    <h1>Home</h1>

    @for($i = 0; $i<10; $i++)
        <li>{{$i}}</li>
    @endfor
@endsection

