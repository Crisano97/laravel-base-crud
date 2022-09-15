@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('delete'))
                    <div class="alert alert-warning">
                        {{ session('delete') }} Comic removed
                    </div>
                @elseif (session('created'))
                <div class="alert alert-success">
                    {{ session('created') }} Comic created
                </div>
                @endif
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
                                    <form action="{{ route('comics.destroy', $comic->slug) }}" method="POST" class="d-inline delete-comics">
                                        @csrf
                                        @method('DELETE')
                                        
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                                
                            </tr>
                        @empty
                            <tr>
                                <td colspan=7>non sono disponibili comic</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('footer-scripts')
    <script>
        const deleteComics = document.querySelectorAll('.delete-comics');
        deleteComics.forEach(
            formElement =>{
                formElement.addEventListener('submit', function(event){
                    event.preventDefault();
                    const result = window.confirm('Are you sure to continue?');
                    if(result) this.submit();
                })
            }
        )

    </script>
@endsection