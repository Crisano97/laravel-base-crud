@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="input-thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="input-thumb" name="thumb">
                    </div>
                    <div class="mb-3">
                        <label for="input-title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="input-title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="input-description" class="form-label">Description</label>
                        <textarea class="form-control" name="description" id="input-description" cols="30" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="input-series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="input-series" name="series">
                    </div>
                    <div class="mb-3">
                        <label for="input-type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="input-type" name="type">
                    </div>
                    <div class="mb-3">
                        <label for="input-price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="input-price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="input-sale-date" class="form-label">Sale Date</label>
                        <input type="date" class="form-control" id="input-sale-date" name="sale_date">
                    </div>
    
                    <a href="{{ route('comics.store') }}" type="submit" class="btn btn-primary">Submit</a>
                </form>
            </div>
        </div>
    </div>
@endsection