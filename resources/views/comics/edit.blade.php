@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', $comic->slug)}}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    @include('comics.includes.form')
                </form>
            </div>
        </div>
    </div>
@endsection