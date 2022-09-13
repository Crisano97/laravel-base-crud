@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                @dump($comics)
                <h3>main content</h3>
            </div>
        </div>
    </div>
@endsection