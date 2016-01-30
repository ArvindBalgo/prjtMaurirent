@extends('layouts.master')

@section('content')
    @if($data)
        TRUE
    @else
        FALSE
    @endif
Contact page {{$data}}
@endsection