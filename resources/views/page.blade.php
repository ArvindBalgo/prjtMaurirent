@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <h2>{{$name}}</h2>
    @if($day == 'Friday')
        <p>Friday!!!!</p>
    @else
        <p>Work Hard</p>
    @endif
    <p>This is my body content.</p>
    <h2>Loop</h2>
    @foreach($drinks as $drink)
    {{$drink}}<br>
    @endforeach

    <h2>Execute PHP functions</h2>
    <p>The date is {{date(' D M, Y')}}</p>
@endsection