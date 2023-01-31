@extends('layouts.main-layout')

@section('content')

    <div class="container">
        <h1 class="my-4">Movies List</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Original title</th>
                    <th>Nationality</th>
                    <th>Date</th>
                    <th>Vote</th>
                </tr>
            </thead>
            
            <tbody class="table-group-divider">
                @foreach ($movies as $movie)
                    <tr>
                        <td>{{ $movie['id']}}</td>
                        <td>{{ $movie['title']}}</td>
                        <td>{{ $movie['original_title']}}</td>
                        <td>{{ $movie['nationality']}}</td>
                        <td>{{ $movie['date']}}</td>
                        <td>{{ $movie['vote']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection