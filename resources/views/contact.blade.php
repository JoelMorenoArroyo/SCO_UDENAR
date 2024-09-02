@extends('master')

@section('content')
    <h1>contact 1</h1>
    <p>{{$name}}</p>

    @foreach([1,2,3,4,5] as $item)
        <li>{{$item}}</li>
    @endforeach

@endsection