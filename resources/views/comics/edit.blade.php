@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form action="{{ route('comics.update', $comic->slug)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="input-thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="input-thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                        @error('thumb')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input-title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="input-title" name="title" value="{{ old('title', $comic->title) }}">
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input-description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="input-description" cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="input-series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="input-series" name="series" value="{{ old('series', $comic->series) }}">
                        @error('series')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input-type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="input-type" name="type" value="{{ old('type', $comic->type) }}">
                        @error('type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input-price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="input-price" name="price" value="{{ old('price', $comic->price) }}">
                        @error('price')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="input-sale-date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="input-sale-date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                        @error('sale_date')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection