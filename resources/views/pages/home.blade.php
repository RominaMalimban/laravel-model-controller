@extends('layouts.main-layout')

@section('content')
    <h1>Movies List</h1>

    <ul>
        @foreach ($movies as $movie)
            <li>{{$movie['title']}}</li>
        @endforeach
    </ul>
@endsection