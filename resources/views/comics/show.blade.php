@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card text-center">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">{{ $comic->description }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Series: {{ $comic->series }}</li>
                        <li class="list-group-item">Type: {{ $comic->type }}</li>
                        <li class="list-group-item">Price: {{ $comic->price }}€</li>
                        <li class="list-group-item">Sale Date: {{ $comic->sale_date }}</li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>
@endsection