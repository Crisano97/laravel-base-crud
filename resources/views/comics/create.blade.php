@extends('layouts.main')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <form action="{{ route('comics.store'), $comic->slug }}" method="POST">
                    @csrf
                    
                    @include('comics.includes.form')
                </form>
            </div>
        </div>
    </div>
@endsection