@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Series</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Sale Date</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @forelse ($comics as $comic)
                            <tr>
                                <td>{{ $comic->id }}</td>
                                <td>
                                    <a href="{{ route('comics.show', $comic->slug) }}">
                                        {{ $comic->title }}    
                                    </a>
                                </td>
                                <td>{{ $comic->series }}</td>
                                <td>{{ $comic->type }}</td>
                                <td>{{ $comic->price }}</td>
                                <td>{{ $comic->sale_date }}</td>
                                <td>
                                    <a href="{{ route('comics.edit', $comic->slug) }}" class="btn btn-sm btn-success">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan=6>non sono disponibili comic</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection