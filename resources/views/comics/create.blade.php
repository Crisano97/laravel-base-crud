@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="input-thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="input-thumb" name="input-thumb">
                    </div>
                    <div class="mb-3">
                        <label for="input-title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="input-title" name="input-title">
                    </div>
                    <div class="mb-3">
                        <label for="input-description" class="form-label">Description</label>
                        <textarea class="form-control" name="input-description" id="input-description" cols="30" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="input-series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="input-series" name="input-series">
                    </div>
                    <div class="mb-3">
                        <label for="input-type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="input-type" name="input-type">
                    </div>
                    <div class="mb-3">
                        <label for="input-price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="input-price" name="input-price">
                    </div>
                    <div class="mb-3">
                        <label for="input-sale-date" class="form-label">Sale Date</label>
                        <input type="text" class="form-control" id="input-sale-date" name="input-sale-date">
                    </div>
    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection