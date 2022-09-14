@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="input-thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="input-thumb" name="thumb" value="{{ $comic->thumb }}">
                    </div>
                    <div class="mb-3">
                        <label for="input-title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="input-title" name="title" value="{{ $comic->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="input-description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="input-description" cols="30" rows="10" value="{{ $comic->description }}">{{ $comic->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="input-series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="input-series" name="series" value="{{ $comic->series }}">
                    </div>
                    <div class="mb-3">
                        <label for="input-type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="input-type" name="type" value="{{ $comic->type }}">
                    </div>
                    <div class="mb-3">
                        <label for="input-price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="input-price" name="price" value="{{ $comic->price }}">
                    </div>
                    <div class="mb-3">
                        <label for="input-sale-date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="input-sale-date" name="sale_date" value="{{ $comic->sale_date }}">
                    </div>
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection